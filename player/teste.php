<script>
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
                    if (xhr.status !== 200 || xhr.response.length <= 50) {
                        local.retry(local);
                    } else {
                        local.onreadystatechange();
                    }
                }
                xhr.ontimeout = function(e) {
                    local.retry(local);
                };
            let method = local.method.split('|')[0];
            xhr.open(method, local.url);
            xhr.send(null);
        } else if (local.retries == 4) {
            local.onreadystatechange();
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
            if (!this._local.noIntercept) {
                this._local.onreadystatechange = cb;
                this.addEventListener('readystatechange', () => {
                    if (this._local.url.includes('ts') && !this._local.noIntercept) {
                        if (this.status !== 200 || this.response.length <= 50) {
                            this._local.retry(this._local);
                        } else {
                            this._local.onreadystatechange();
                        }
                    } else {
                        this._local.onreadystatechange();
                    }
                });
            } else {
                this.addEventListener('readystatechange', cb);
            }
        }
    });
})(XMLHttpRequest);
</script>
<script>
var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() {
    if (xhr.readyState == XMLHttpRequest.DONE) {
        console.log(this);
    }
}
xhr.open('GET', '/teste.ts', true);
xhr.send(null);
</script>
