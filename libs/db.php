<?php
require "rb-mysql.php";
R::setup( 'mysql:host=localhost; dbname=ghj','root', '' );
if(!R::testConnection()) die('<p style="font-size: 200%; margin: 40px; text-align: center; font-family: sans-serif;">Error: No DB connection</p>');
session_start(); 
?>