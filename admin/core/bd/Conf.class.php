<?php
Class Conf{ 

   private $_usuariodb; 
   private $_passdb; 
   private $_hostdb; 
   private $_db; 
 
   static $_instance; 
 
   private function __construct(){       
      require_once  dirname(dirname(dirname(dirname(__FILE__) ) ) ). '/include/config.php';
      $this->_usuariodb=USUARIO; 
      $this->_passdb=PASSBD; 
      $this->_hostdb=HOST; 
      $this->_db=DB; 
   } 
 
   private function __clone(){ } 
 
   public static function getInstance(){ 
      if (!(self::$_instance instanceof self)){ 
         self::$_instance=new self(); 
      } 
      return self::$_instance; 
   } 

   public function getHostDB(){ 
      $var=$this->_hostdb; 
      return $var; 
   } 
 
   public function getUsuarioDB(){ 
      $var=$this->_usuariodb; 
      return $var; 
   } 
 
   public function getDB(){ 
      $var=$this->_db; 
      return $var; 
   } 

   public function getPassDB(){ 
      $var=$this->_passdb; 
      return $var; 
   } 


}
?>