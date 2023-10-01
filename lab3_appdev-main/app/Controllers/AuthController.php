<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function index()
    {
        //
    }

    public function __construct(){
        helper(['url', 'form']);
    }
    public function login()
    {
        return view('auth/login');
    }

    public function register(){
        return view('auth/register');
    }

    // public function save(){
    //     //validate request
    //     $validation = $this->validate([
    //         'name'=>'required',
    //         'email'=>'required|valid_email|is_unique[users,email]',
    //         'password'=>'required|min-lenght[5]|max_length[12]',
    //         'cpassword'=>'required|min_length[5]|max_length[12]|matches[password]'
    //     ]);
    //
    //     if(!$validation){
    //         return view('auth/register', ['validation'=>$this->validator]);
    //     }else{
    //         echo 'Form validated successfully!';
    //     }
    // }
    public function save()
   {
       $model = new \App\Models\UserModel();

       $data = [
           'name' => $this->request->getVar('name'),
           'email' => $this->request->getVar('email'),
           'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
           'conpassword' => password_hash($this->request->getVar('conpassword'), PASSWORD_DEFAULT),
           
       ];

       $model->save($data);

       return redirect()->to(site_url('auth'));
   }



}
