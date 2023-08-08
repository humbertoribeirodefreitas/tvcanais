<?php
	/* SERVER SETTINGS */ /* CONFIGURAÇÕES DO SERVIDOR */
	define("OFFICE_KEY", "YOUR_LICENCE_KEY");

	/* OFFICE PANEL DATABASE SETTINGS */ /* CONFIGURAÇÕES DO BANCO DE DADOS DO PAINEL OFFICE */
    define("OFFICE_DB_HOST", "localhost");
    define("OFFICE_DB_PORT", "3306");
    define("OFFICE_DB_NAME", "ondemandflix");
    define("OFFICE_DB_USER", "ondemandflix");
    define("OFFICE_DB_PASS", "rochasantos1212");

 	/* XTREAM PANEL DATABASE SETTINGS */ /* CONFIGURAÇÕES DO BANCO DE DADOS DO SERVIDOR XTREAM CODES */
	define('DB_HOST', '207.244.231.78');
	define('DB_PORT', '7999');
	define('DB_NAME', 'xtream_iptvpro');
	define('DB_USER', 'user_iptvpro');
	define('DB_PASS', 'jpd6ss8TzkMQG3VI');

	/* REPLACE WITH YOUR DOMAIN OR IP BUT KEEP /i */ /* SUBSTITUA COM O SEU ENDEREÇO IP OU DOMINIO MATENHA O /i */
	define("SHORTENER_URL", "http://domain.com/i");

	/* ALLOWED EMAILS FOR TESTS */ /* EMAILS PERMITIDOS PARA TESTES */
	define ("ALLOWED_EMAILS", serialize (array ("root@localhost.com", "exemplo2@gmail.com")));

	/* ENABLE DEBUG LOG */
	define("OFFICE_DEBUG", 0);
?>