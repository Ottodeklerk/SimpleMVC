<?php
/**
 * Created by PhpStorm.
 * User: ottodeklerk
 * Date: 10-02-17
 * Time: 10:28
 */

namespace controller;


use mvcsystem\baseclasses\Controller;
use mvcsystem\RequestDirector;

class HomeController extends Controller
{
    public function __construct(RequestDirector $requestDirector)
    {
        parent::__construct($requestDirector);
    }

    public function index(){
        $this->returnView();
    }

    public function features(){
        $this->returnView();
    }

    public function docs(){
        $this->returnView();
    }
}