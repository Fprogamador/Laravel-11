<?php

namespace App\Http\Controllers;

class HomeController{
  public static function index(): never{
    dd(vars: 'home controller test');
  }
}