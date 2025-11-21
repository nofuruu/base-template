<?php

namespace App\Controllers;

class AppController extends BaseController
{

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['content'] = 'common/dashboard';

        return view('index', $data);
    }

    
}
