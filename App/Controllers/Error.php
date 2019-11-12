<?php

namespace Controllers;

class Error extends \App\Controller
{
    public function error404 ()
    {
        return $this->render('Error404');
    }

    public function error500 (array $params = [])
    {
        return $this->render('Error500');
    }
}

?>