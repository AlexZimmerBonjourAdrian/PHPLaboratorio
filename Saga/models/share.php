<?php
class ShareModel extends Model{

	public function index(){
		$this->query('SELECT * FROM recurso ORDER BY tipo DESC');
		$rows = $this->resultSet();
		return $rows;
	}

	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


		if(isset($post['submit'])){ 

			$img = file_get_contents($_FILES['Imagen']['tmp_name']);
			
			if($post['Nombre'] == '' || $post['Suscrip'] == '' || $post['Descarg'] == ''|| $post['Tipo'] == '' || $post['Descrip'] == '' || $post['Enlace'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;	
			}

			// Insert into MySQL
			$this->query('INSERT INTO recurso (NomRec, Suscrip, Descarg, Tipo, ImgR, Descrip, Enlace, IdAut) VALUES(:Nombre, :Suscrip, :Descarg, :Tipo, :ImgR, :Descrip, :Enlace, :IdAut)');
			$this->bind(':Nombre', $post['Nombre']);
			$this->bind(':Suscrip', $post['Suscrip']);
			$this->bind(':Descarg', $post['Descarg']);
			$this->bind(':Tipo', $post['Tipo']);
			$this->bind(':ImgR', $img);
			$this->bind(':Descrip', $post['Descrip']);
			$this->bind(':Enlace', $post['Enlace']);
			$this->bind(':IdAut', $_SESSION['autor_data']['id']);

			$this->execute();
			// Verify
			/*if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'shares');
			}*/
			header('Location: '.ROOT_URL.'home');
		}
		return;
	}

	public function evaluar($IdRec){

		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if(isset($_SESSION['IdRec'])){
        	//$_SESSION['IdRec'] = $_GET['IdRec']; //obtengo parametro pasado por href y lo seteo en una sesion
        	$IdRec= $_SESSION['IdRec'];
			echo 'esta seteada idrec';
    	}else{
			echo 'NOO esta seteada idrec';
		}
		
		

		if(isset($post['submit'])){ 
			if($post['inputCalificar'] == '' || $post['inputComentario'] == ''){
				Messages::setMsg('Completa todos los campos', 'error');
				return;	
			}

			$fechaHoy = date("Y-m-d");
			// Insert into MySQL
			
			$this->query('INSERT INTO evaluacion (Calif, FechaEva, ComEva, IdCli, IdRec) VALUES(:Calif, :FechaEva, :Comentario, :IdCli, :IdRec)');
			$this->bind(':Calif', $post['inputCalificar']);
			$this->bind(':FechaEva', $fechaHoy);
			$this->bind(':Comentario', $post['inputComentario']);
			$this->bind(':IdCli', $_SESSION['cliente_data']['id']);
			$this->bind(':IdRec', $IdRec);

			$this->execute();
			//header('Location: '.ROOT_URL.'shares');
		}
		return;



	}
}
