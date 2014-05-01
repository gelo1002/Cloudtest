<?php
Class Db{ 
 
   private $servidor; 
   private $usuario; 
   private $password; 
   private $base_datos; 
   private $link; 
   private $stmt; 
   private $array; 
 
   static $_instance; 
 
	private function __construct(){ 
      $this->setConexion(); 
      $this->ConnectBD(); 
   } 
	
	public function __destruct()
    {
    }

   private function setConexion(){ 
      $conf = Conf::getInstance(); 
      $this->servidor=$conf->getHostDB(); 
      $this->base_datos=$conf->getDB(); 
      $this->usuario=$conf->getUsuarioDB(); 
      $this->password=$conf->getPassDB();
   } 
 
   
   private function __clone(){ } 
 
   public static function getInstance(){ 
      if (!(self::$_instance instanceof self)){ 
         self::$_instance=new self(); 
      } 
         return self::$_instance; 
   } 
 

   private function ConnectBD(){
      $this->link = mysqli_connect($this->servidor, $this->usuario, $this->password,$this->base_datos);
         
         if($this->link){
            $reg = mysqli_select_db($this->link, $this->base_datos);
            @mysqli_query("SET NAMES 'utf8'");
         } else {
            error_log(0,'Problema de conexión a la base de datos.'); 
            exit('Perdonen las molestias. Tenemos un problema técnico. Esperamos resolverlo en los próximos minutos');
         }
   } 

   public function MySQL_Close(){
      mysql_close();
   }

   //Ejecuta una consulta SQL
   public function ExecuteQuery($sql){ 
      $this->stmt=mysqli_query($this->link, $sql);
		if (mysqli_connect_errno()) {
			printf("Conexi&oacute;n fallida: %s\n", mysqli_connect_error());
			exit();
		}
      return $this->stmt; 
   }

   //Devuelve un arreglo asociativo o un arreglo numerico, pasandole el resultado de una consulta.
   public function GetArrayBD($stmt){
      $arr = array();
      if ($stmt){
           while ( $row = $stmt->fetch_array(MYSQLI_ASSOC)) {
               array_push( $arr,$row );
         }
         if($arr){
            return $arr;
         } else{
            return false;
         }
      } else{
         echo "<div class='msj error'>¡Error en la Consulta Hacia la Base de Datos!</div>";
      }    
   }

   //Filtra los datos provenientes de un formulario, para evitar ataques de inyeccion de codigo a nivel basico
   public function FilterData($data){
      $data = trim($data);
      $data = htmlspecialchars($data);
      return $this->link->real_escape_string($data);
   }

}//termina clase Db

?>