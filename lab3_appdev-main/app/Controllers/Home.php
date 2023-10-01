<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('source/index');
    }
    public function showprod()
    {
      return view('include/prod');
    }
    public function showcustomer()
    {
      return view('include/customer');
    }
}
