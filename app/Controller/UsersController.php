<?php

class UsersController extends AppController{

	public function index(){
		
		$users = $this->User->find('all');
		//pr($users);

		$this->set('users', $users);
	}

	public function add(){
		
		if( $this->request->is('post') ){
			
			$this->User->save( $this->request->data );
			$this->redirect('/users');
		}
	}

	public function login(){

		if( $this->request->is('post') ){

			// 1. Find method and 2 conditions
			/*$user = $this->User->find('first', array (
				'conditions' => array(
					'email' => $this->request->data('User.email'),
					'password' => $this->request->data('User.password')
				)
			)); */


			// 2. Magical find
			$user = $this->User->findByEmailAndPassword( $this->request->data('User.email'), 
				$this->request->data('User.password'));

			if( $user ){
				$this->Session->write('User', $user);
				$this->redirect(array(
					'controller' => 'home',
					'action' => 'index'
				));
			}

		}

	}
}

?>