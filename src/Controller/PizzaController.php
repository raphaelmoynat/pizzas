<?php

namespace App\Controller;
use Core\Http\Response;
use App\Entity\Pizza;
use App\Repository\PizzaRepository;

class PizzaController extends \Core\Controller\Controller
{
    public function index():Response{
        return $this->render("pizza/index", [
            "pageTitle"=> "Pizzas "
        ]);
    }
}