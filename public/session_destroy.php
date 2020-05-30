<?php

session_start();
session_destroy();

header( "Location: http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );
//header('location: '.$_SERVER['REQUEST_URI']);
//header('location: /');

die;