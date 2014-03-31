<?php

class HomeController extends AppController{

	public function index(){

		$title="Jordanstown Theatre - What's On";

		$this->set('title_for_layout', $title);
		$this->home = 'index';
		
	}

	public function whats_on(){

		$this->redirect(array('controller' => 'Home', 'action' => 'index'));
	}


	public function coming_soon(){

		$this->redirect(array('controller' => 'Comingsoon', 'action' => 'index'));
	}

}

?>