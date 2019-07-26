<?php
namespace Controller;
use Library;
class Comunicado extends Library\Controller
{
    public function MostrarComunicados() {
		return $this->vista('Comunicado/Mostrar');
	}
}

?>