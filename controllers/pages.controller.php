<?php

class PagesController {
	public function index() {
		include_once('views/pages/index.php');
	}
	public function error() {
		include_once('views/pages/error.php');
	}
}

?>
