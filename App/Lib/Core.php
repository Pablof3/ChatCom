<?php
namespace Library;
use Controller;
class Core
{
    protected $url;
    protected $controlador = CONTROLLER;
    protected $metodo = METHOD;
    protected $parametros=[];
    
    public function __construct()
    {
        $this->url= $this->getUrl();
        $this->set_Controlador();
        $this->set_Metodo();
        $this->set_Parametros();
        // var_dump($this->controlador);
        // var_dump($this->metodo);
        // var_dump($this->parametros);
        $ControllerObj=null;

        if (file_exists('../App/Controller/'. $this->controlador .'.php')) {     //Controlador Existe
            $nmSpc='Controller\\'.$this->controlador;
            $ControllerObj=new $nmSpc;
            if (method_exists($ControllerObj,$this->metodo)) {                      //Metodo Existe
                $param=new \ReflectionMethod('Controller\\'.$this->controlador,$this->metodo);          
                $numParam=$param->getNumberOfParameters();
                if ($numParam==count($this->parametros)) {                                                      //Con Parametros 
                    call_user_func_array([$ControllerObj,$this->metodo],$this->parametros);
                    exit;
                }
                else {    
                    $this->metodo='e404';                                                                           //Sim Parametros
                    call_user_func_array([$ControllerObj,$this->metodo],[]);
                    exit;
                }
            }
            else {                                                                  //Metodo no Existe
                $this->metodo='e404';
                call_user_func_array([$ControllerObj,$this->metodo],[]);
            }
        }
        else {                                                                  //Controlador no existe
            if (is_null($this->controlador)&&is_null($this->metodo)&&empty($this->parametros)) {
                $this->controlador=CONTROLLER;
                $this->metodo=METHOD;
                $nmSpc='Controller\\'.$this->controlador;
                $ControllerObj=new $nmSpc;
                call_user_func_array([$ControllerObj,$this->metodo],[]);
            }
            else {
                $this->controlador=CONTROLLER;
                $this->metodo='e404';
                $nmSpc='Controller\\'.$this->controlador;                
                $ControllerObj=new $nmSpc;
                call_user_func_array([$ControllerObj,$this->metodo],[]);
            }

        }
        // //buscar controllador  Existe?
        // if (file_exists('../app/controllers/'. ucwords($url[0]) .'.php'))
        // {
        //     $this->controladorActual = ucwords($url[0]);
        //     unset($url[0]);
        // }

        // //instancia de controllador
        // require_once '../app/controllers/'. $this->controladorActual . '.php';
        // $this->controladorActual= new $this->controladorActual;
        
        // //Metodo
        // if (isset($url[1]))
        // {
        //     if (method_exists($this->controladorActual, $url[1]))
        //     {
        //         $this->metodoActual=$url[1];
        //         unset($url[1]);
        //     }
        // }

        // //Parametros
        // $this->parametros = $url ? array_values($url) : [];
        // call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);
        
    }

    public function set_Controlador()
    {
        if (isset($this->url[0])) {
            $this->controlador=ucwords($this->url[0]);
            unset($this->url[0]);
        }
        else {
            $this->controlador=null;
        }
        
    }
    public function set_Metodo()
    {
        if (isset($this->url[1])) {
            $this->metodo=ucwords($this->url[1]);
            unset($this->url[1]);
        }
        else {
            $this->metodo=null;
        }
    }
    public function set_Parametros()
    {
        $this->parametros = $this->url ? array_values($this->url) : [];
    }

    public function getUrl()
    {
        if (isset($_GET['url']))
        {
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
