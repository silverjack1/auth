<?php

namespace App\Controllers;

class Admin extends BaseController
{

    public function index()
    {
       if (logged_in()) {

          echo 'halaman admin';
       }
       
    }

    public function makan()
    {
       echo 'Halaman Admin';
    }
    
}