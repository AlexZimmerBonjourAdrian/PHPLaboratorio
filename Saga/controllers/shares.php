<?php
class Shares extends Controller{

	protected function index(){
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->index(), true);
	}

	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'shares');
		}
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->add(), true);
	}

	protected function evaluar(){
		
        $idrecurso = $_GET["IdRec"];
		$_SESSION['idrecurso'] = $idrecurso; 
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->evaluar(), true);

	}


}