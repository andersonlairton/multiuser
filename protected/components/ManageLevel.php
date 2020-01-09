<?php
/* 
class ManageLevel{
      const ADMIN = 1;
      const COMUM = 2;
       
      private $niveisUsuario;
  
      public static function getLevel($nivelUsuario)
      {     
          //var_dump($nivelUsuario);
          //die;
          $niveisUsuario['ADMIN']          = 1;
          $niveisUsuario['COMUM']      = 2;
          //var_dump($niveisUsuario);
          //die;
          return isset($niveisUsuario[$nivelUsuario]) ? $niveisUsuario[$nivelUsuario] : null;
      }
}
*/
 
class ManageLevel{
      const ADMIN = 1;
      const COMUM = 2;
       
      private $niveisUsuario;
  
      public static function getLevel($nivelUsuario)
      {
          $niveisUsuario['ADMIN']          = 1;
          $niveisUsuario['COMUM']      = 2;
          return isset($niveisUsuario[$nivelUsuario]) ? $niveisUsuario[$nivelUsuario] : null;
      }
}