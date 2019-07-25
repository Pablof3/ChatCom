<?php
namespace Controller;
use Library;
class Area extends Library\Controller
{
    public function Registro()
    {
        $this->vista('Master/template');
    }
    public function Registros()
    {
        $this->vista('Master/template');
    }
}

?>