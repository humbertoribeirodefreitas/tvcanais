(function(XHR) {
    "use strict";
    var open = XHR.prototype.open;
    XHR.prototype.open = function(method, url, ...rest) {
        this._local.method = method;
        this._local.url = url;
        return open.call(this, method.split('|')[0], url, ...rest);
    };
    let _local = {
        retries: 0,
        noIntercept: false
    };
    _local.retry = function(local) {
        var xhr = new XHR();
        xhr._local.noIntercept = true;
        local.retries++;
        if (local.retries < 4) {
            xhr.onreadystatechange = function() {
                if (xhr.status !== 200 || !xhr.response) {
                    local.retry(local);
                } else if (xhr.response){
					if(xhr.response.length > 100){
						local.done(xhr);
					} else {
						local.retry(local);
					}
                } else {
					local.retry(local);
				}
            }
            xhr.ontimeout = function(e) {
                local.retry(local);
            };
            let method = local.method.split('|')[0];
            xhr.open(method, local.url);
            xhr.send(null);
        } else if (local.retries == 4) {
            local.done();
        }
    }
    Object.defineProperty(XHR.prototype, "_local", {
        value: _local
    });
    Object.defineProperty(XHR.prototype, "timeout", {
        value: 5000
    });
    Object.defineProperty(XHR.prototype, "onreadystatechange", {
        set: function(cb) {
            if (!this._local.noIntercept && this._local.url.includes('ts')) {
                this._local.onreadystatechange = cb;
                var self = this;
                this._local.done = function(xhr) {
                    if (xhr) {
                        ["status", "response"].forEach((item) => {
                            Object.defineProperty(self, item, {
                                value: xhr[item],
								configurable: true
                            });
                        });
                    }
                    self._local.onreadystatechange();
                };
                this.addEventListener('readystatechange', () => {
                    if (this.status !== 200 || !this.response) {
                        this._local.retry(this._local);
                    } else if (this.response){
						if(this.response.length > 100){
							this._local.onreadystatechange();
						} else {
							this._local.retry(this._local);
						}
                    } else {
						this._local.retry(this._local);
					}
                });
            } else {
                this.addEventListener('readystatechange', cb);
            }
        }
    });
})(XMLHttpRequest);
var hls;

function playM3u8(url) {
    let video = document.getElementById('moko');
    if (hls) {
        hls.destroy();
        delete hls;
    }
    if (Hls.isSupported()) {
        video.volume = 0.3;
        hls = new Hls();
        var m3u8Url = decodeURIComponent(url)
        hls.loadSource(m3u8Url);
        hls.attachMedia(video);
        hls.on(Hls.Events.MANIFEST_PARSED, function() {
            video.play();
            $('#loading').hide();
        });
    } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
        video.src = url;
        video.addEventListener('canplay', function() {
            video.play();
            $('#loading').hide();
        });
        video.volume = 0.3;
    }
}