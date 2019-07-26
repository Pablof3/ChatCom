<?php 
namespace Controller;
use Library;
class Chat extends Library\Controller
{
    public function __construct() {
        session_start();
    }
    public function MisChats()
    {
        $this->vista('Chat/mischats');
    }
}

?>