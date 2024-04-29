<?php

class Connection{

	public function connect(){

		$link = new PDO("mysql:host=localhost:3306;dbname=posystem", "root", "");

		$link -> exec("set names utf8");

		return $link;
	}

}