<?php

namespace Controllers;

class Home extends \App\Controller
{
    public function index($param)
    {
		return $this->render('Home',["page" => empty($param[0])?1:(int)$param[0],"column" => $param[1], "order" => $param[2]]);
    }	
}

?>