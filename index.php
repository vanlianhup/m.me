<?php

if(isset($_REQUEST['hub_challenge'])){
	$challenge = $_REQUEST['hub_challenge'];
	$token = $_REQUEST['hub_verify_token'];
}

if($token == "myToken12234"){
	echo $challenge;
}