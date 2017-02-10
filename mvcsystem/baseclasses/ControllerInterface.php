<?php
/**
 * Created by PhpStorm.
 * User: ottodeklerk
 * Date: 10-02-17
 * Time: 12:13
 */

namespace mvcsystem\baseclasses;


use mvcsystem\RequestDirector;

interface ControllerInterface
{
    public function __construct(RequestDirector $requestDirector);
    public function index();
}