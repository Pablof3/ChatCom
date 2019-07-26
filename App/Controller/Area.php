<?php
namespace Controller;
use Library;
class Area extends Library\Controller
{
    public function Registro()
    {
        $this->vista('Area/registro');
    }
    public function Registros()
    {
        $this->vista('Area/registros');
    }
}

?>