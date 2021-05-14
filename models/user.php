<?php
session_start();
class UserModel extends Model{
	public function register(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){

			Messages::setMsg('Please Fill In All Fields', 'error');
			return;
			if($post['name'] == '' || $post['email'] == '' || $post['password'] == '' || $post['ApellidoAut']=''|| $post['SexoAut']= ('Masculino' + 'Femenino')|| $post['NickName']= SQL_VARCHAR || $post['FNAut']= date('')|| $post['imgAut']=SQLT_BLOB||$post['BiografiaAut']=''){
			}

			$this->query('SELECT * FROM users WHERE EmailAut = :email AND password = :password AND ApellidoAut = :ApellidoAut AND SexoAut = :SexoAut AND FNAut= :FNAut AND imgAut=:imgAut AND BiografiaAut = :BiografiaAut ');
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
		
			$this->bind(':ApellidoAut', $post['ApellidoAut']);
			$this->bind(':SexoAut', $post['SexoAut']);
			$this->bind(':NickName', $post['NickName']);
			$this->bind(':FNAut', $post['FNAut']);
			$this->bind(':imgAut',$post['imgAut']);
			$this->bind(':BiografiaAut',$post['BiografiaAut']);
			
			$row = $this->single();

			if($row){
				Messages::setMsg('El usuario ya existe', 'error');
			}
			else {
				
				// Insert into MySQL
				$this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
				$this->bind(':name', $post['name']);
				$this->bind(':email', $post['email']);
				$this->bind(':password', $password);
				$this->bind(':ApellidoAut', $post['ApellidoAut']);
				$this->bind(':SexoAut', $post['SexoAut']);
				$this->bind(':NickName', $post['NickName']);
				$this->bind(':FNAut', $post['FNAut']);
				$this->bind(':imgAut',$post['imgAut']);
				$this->bind(':BiografiaAut',$post['BiografiaAut']);
				$this->execute();

				$this->query('SELECT * FROM users WHERE email = :email AND password = :password');
				$this->bind(':email', $post['email']);
				$this->bind(':password', $password);
				
				$row = $this->single();
				
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
				"id"	=> $row['id'],
				"name"	=> $row['name'],
				"email"	=> $row['email'],
				"ApellidoAut" =>$row['ApellidoAut'],
				"SexoAut" =>$row['SexoAut'],
				"NickName" =>$row['NickName'],
				"FNAut" =>$row['FNAut'],
				"imgAut" =>$row['imgAut'],
				"BiografiaAut"=>$row['BiografiaAut']
				);

				header('Location: '.ROOT_URL.'shares');
				
			}

		}
		return;
	}

	public function login(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['Contrasenia']);

		if($post['submit']){
			// Compare Login
			$this->query('SELECT * FROM cliente WHERE EmailCli = :EmailCli AND Contrasenia = :Contrasenia');
			$this->bind(':EmailCli', $post['EmailCli']);
			$this->bind(':Contrasenia', $password);
			
			$row = $this->single();

			if($row){
		
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"IdCli"	=> $row['IdCli'],
					"NomCli"	=> $row['NomCli'],
					"ApellidoCli" => $row['ApellidoCli'],
					"EmailCli"	=> $row['EmailCli'],
					"SexoCli" => $row['SexoCli'],
					"NicknameClie" => $row['NicknameCli'],
					"FNCli" => $row['FNCli'],
					"imgCli" => $row['imgCli'],
					"Contrasenia" => $row['Contrasenia']
					
					
					/*"FNcli" => $row['FNCli'],
					//"ApellidoCli" => $row['surname'],
					//"contrasenia" => $row['password'],
					//"ApellidoCli" => $row['surname']
					/*"FNcli" => $row['FNCli'],
					"imgCli" => $row['imgCli'],
					"Nickname" => $row['Nickname'],
					"NomCli" => $row['NomCli'],
					"EmailCli"	=> $row['EmailCli'],
					"SexoCli" => $row['SexoCli']
					*/
				);
				

				header('Location: '.ROOT_URL.'share');

			} else {
				Messages::setMsg('Incorrect Login', 'error');
			}
		}
		return;

		
	}
	
}