<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: accept, content-type');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE');

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

// APP
require('handler/WebsiteHandler.php');
require('handler/InputHandler.php');
require('handler/ThemeHandler.php');
require('handler/ValThemeHandler.php');
require('handler/UserHandler.php');

require('db.php');
require('Toro.php');

header('Content-Type: application/json');

ToroHook::add("404", function() {
    echo "Request not found";
});

Toro::serve(array(

	"1/website/:number"			=> "WebsiteHandler",			// GET
	"1/website/"				=> "WebsiteHandler",			// POST

	"1/input/:number"			=> "InputHandler",				// GET
	"1/input/"					=> "InputHandler"				// POST
	
	"1/theme/:number"			=> "ThemeHandler",				// GET
	"1/theme/"					=> "ThemeHandler",				// POST

	"1/valTheme/:number"		=> "ValThemeHandler",			// GET
	"1/valTheme/"				=> "ValThemeHandler"			// POST

	"1/user/:number"			=> "UserHandler",				// GET
	"1/user/"					=> "UserHandler"				// POST

));