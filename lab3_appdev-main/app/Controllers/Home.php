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
    public function showAbout()
    {
      return view('include/about');
    }
    public function showContact()
    {
      return view('include/contact');
    }
    public function showAdmin()
    {
      return view('auth/adminlogin');
    }
    public function showUser()
    {
      return view('auth/login');
    }


    public function concealer()
    {
        return view('concealer');
    }
    public function brush()
    {
        return view('brush');
    }
    public function mascara()
    {
        return view('mascara');
    }
    public function liptint()
    {
        return view('liptint');
    }
}
