<?php

	$connect = mysqli_connect('localhost','root', '', 'site');

	if(!$connect){
		die('problem with connect to database');
	}