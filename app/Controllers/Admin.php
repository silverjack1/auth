<?php

namespace App\Controllers;

class Admin extends BaseController
{

    public function index()
    {
      $username = user()->name;
     
      $data = [
         'username' => $username,
         
              ];
      return view('Admin/index', $data);       
    }

    public function makan()
    {
       echo 'Halaman Admin';
    }
    
}