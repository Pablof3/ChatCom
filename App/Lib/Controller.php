<?php
namespace Library;
class Controller
{
      /**
       * Funcion Cargar la Vista
       *
       * Dada La ruta La funcion Carga la Vista Para mostrar cuando es Solicitada
       *
       * @param String $vista Ruta de la Vista en Views
       * @param Array $data Arreglo de Datos para la Vista
       **/
      public function vista($vista, $data=[])
      {
          //verificar si existe
          if (file_exists("../App/View/" . $vista . ".php")) 
          {
                require_once "../App/View/" . $vista . ".php" ;
          }
          else 
          {
              die("No existe la vista");
          }
      }
      public function fileGetContent($vista, $data=[])
      {
          $resp=null;
        if (file_exists("../App/View/" . $vista . ".php")) 
        {
            \ob_start();
              require_once "../App/View/" . $vista . ".php" ;
              $resp=\ob_get_contents();
              \ob_end_clean();
        }
        return $resp;
      }
      public function e404()
      {
          echo "404 No encontrado";
      }
}

?>