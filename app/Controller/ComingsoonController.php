<?php

class ComingSoonController extends AppController{

	public function index(){

		$title="Jordanstown Theatre - Coming Soon";

		$this->set('title_for_layout', $title);
		$this->comingsoon = 'default';		
	}

	public function whats_on(){

		$this->redirect(array('controller' => 'Home', 'action' => 'index'));
	}

	public function coming_soon(){

		$this->redirect(array('controller' => 'Comingsoon', 'action' => 'index'));
	}
}

?>