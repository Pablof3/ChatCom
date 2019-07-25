<?php 
namespace Controller;
use Library;
class Chat extends Library\Controller
{
    public function MisChats()
    {
        $this->vista('Chat/mischats');
    }
}

?>