<?php 
session_start();
include("includes/core/db_connect.php"); 

include('includes/auth.php');

error_reporting(E_ALL);
ini_set('display_errors', 'on');
?>
<!DOCTYPE HMTL>
<html>
<head>
<style>
	input[type=text]{padding:15px; border:1px solid #9c9c4b; height: 5px;}
	</style>
<title>CMS Application</title>
<link href="assets/stylesheet/public.css" rel="stylesheet" media="all"  type="text/css"/>
</head>
<body>

<div id="header">
<h1><a  style="text-decoration:none; color:#EEE" href="contents.php">CMS Application</a>
<span style="float:right"> <a style="text-decoration:none; font-size:15px; color:#EEE" href="logout.php">Logout Here </a></span>
</h1>

</div>
<div id="main">

