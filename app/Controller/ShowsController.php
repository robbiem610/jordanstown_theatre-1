<?php

class ShowsController extends AppController{
	
	public function add(){

		$this->set('title_for_layout', 'Jordanstown Theatre - Shows');

		$users = $this->Show->User->find('list');


		if( $this->request->is('post') ){

			$this->Show->save( $this->request->data);
		}

		$this->set('users', $users);

	}
}

?>