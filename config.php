<?php

define("HOST",'localhost');
define("USER",'root');
define("PASSWORD",'');
define("DATABASE",'uzkino');

$link = mysqli_connect(HOST,USER,PASSWORD,DATABASE) or die(mysqli_connect_errno());

const ASSETS = "views/assets/";
const ADMIN_ASSETS = "/admin/".ASSETS;
const HEADER_MENU_POSITION = 1;
const FOOTER_MENU_POSITION = 2;
const DEFAULT_SEEN_COUNT = 20;
