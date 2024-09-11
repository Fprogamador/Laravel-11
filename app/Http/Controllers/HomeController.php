<?php

namespace App\Http\Controllers;

class HomeController{
  public function index(): never{
    dd(vars: 'home controller test');
  }
}