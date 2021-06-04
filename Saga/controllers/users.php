<?php
class Users extends Controller{

	
	protected function suscripcion()
	{
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->suscripcion(), true);
	}



	protected function register(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->register(), true);
	}

	protected function registerAutor(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->registerAutor(), true);
	}

	protected function registerCliente(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->registerCliente(), true);
	}

	protected function login(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->login(), true);
	}

	protected function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_data']);
		session_destroy();
		// Redirect
		header('Location: '.ROOT_URL);
	}
}