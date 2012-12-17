<?php
/**
 * ACM (facebook) Modulo para crear apps en Facebook.
 *
 * @author Brian Salazar [Avenidanet]
 * @link http://www.avenidanet.com
 * @copyright Brian Salazar 2006-2013
 * @license http://mit-license.org
 *
 */
$config = Settings::Init();
$config->debug = FALSE;
$config->host = '';
$config->user = '';
$config->pass = '';
$config->database = '';

$config->fb_apikey = "";
$config->fb_secret = "";
$config->fb_url = "https://www.facebook.com";
$config->fb_scope = "publish_stream";