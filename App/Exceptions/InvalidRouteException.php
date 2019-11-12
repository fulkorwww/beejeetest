<?php

namespace Controllers;

class InvalidRouteException extends \App\Controller
{
    public function index ()
    {
        return $this->render('Error');
    }
}

?>