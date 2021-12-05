<?php

namespace App\Controllers;

class Admin extends BaseController
{

    public function index()
    {
      $username = 'Muhammad Dian Nafi';
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