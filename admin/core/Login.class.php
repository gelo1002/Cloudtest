<?php
//Se incluyen las clases de conexion a la BD
require_once   "bd/Db.class.php";
require_once   "bd/Conf.class.php";

/*
* Clase para poder loguearse al sistema y tambien crear las variables de sesión del usuario.
*/
class Login
{
	//Variable donde se almacenara la conexion actual a la BD.
	private $_db;

	private $_id;
	private $_email;
	private $_pass;
	private $_stmtLogin;

		
		function __construct($email = '', $pass = '')
		{
			$this->_email = $email;
			$this->_pass = $pass;
			//Se manda a llamar al metodo estatico getInstance() de la clase Db y se asigna a _db
			$this->_db = Db::getInstance();
		}

		/* Se hace la consulta a la BD para preguntar si esta el usuario que venga del formulario de Inicio de Sesión
		*  se retorna el numero de registro que se obtuvieron, puede ser 1 ó ninguna fila.
		*/
		public function SelectUser(){

			//Se filtran los datos prrovenientes del formulario de Inicio de Sesión para evitar Inyecciones de Codigo.
			$email = $this->_db->FilterData($this->_email);
			$pass = $this->_db->FilterData($this->_pass);

			//Se encripta la contraseña con sha1 y md5
			$pass = $this->EncryptPassword($pass);

			$sqlLogin = sprintf( "SELECT users.idusers,
					users.user,
					users.passwd,
					users.puesto
					FROM users
					WHERE users.user = '%s' && users.passwd = '%s'",
					$email, $pass);

			$this->_stmtLogin = $this->_db->ExecuteQuery($sqlLogin);

			return $this->_stmtLogin->num_rows;
		}
		
		/*
		* Se establece el nombre de la variable de sesión y se inicia la sesion
		*/
		private function varSesion(){
			session_name("cm");
			session_start();

		}

		/*
		* Los datos del usuario que se obtuvieron de la BD, se agregan a las variables de sesion
		*/
		public function Create_Session(){
			$this->varSesion();
			$SessionVars = $this->_stmtLogin->fetch_array(MYSQLI_BOTH);
			$this->_id = $SessionVars["idusers"];
			$_SESSION["id"]				= $SessionVars["idusers"];
			$_SESSION["user"]			= $SessionVars["user"];
			$_SESSION["puesto"]			= $SessionVars["puesto"];

		}

		/*
		* Se verifica si el usuario ha iniciado sesion, checando si las variables Emial, Id y Name esta llenas
		*/
		public function GetStatus(){
			$this->varSesion();
			if( empty( $_SESSION["user"]) ){
				return FALSE;
			} else {
				$arrayS = array("id" => $_SESSION["id"]	,"user" => $_SESSION["user"] ,"puesto" => $_SESSION["puesto"]);
				return $arrayS;
			}

		}

		public function Logout(){
			$this->varSesion();
			session_destroy();
			unset($_SESSION);
		}

		/*
		* Se encripta el password usando primero sha1 y luego md5
		*/
		private function EncryptPassword($pass){
			$pass = sha1(md5($pass));
			return $pass;
		}

}
?>