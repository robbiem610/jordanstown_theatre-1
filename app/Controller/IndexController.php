<?php

class IndexController extends AppController{

	public function index(){

		$this->set('title_for_layout', 'Jordanstown Theatre - Index');
		$this->index = 'index';
	}
}

?>