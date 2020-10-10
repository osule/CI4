<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function ajax()
    {
        return view('ajax');
    }

    public function test()
    {
        $json = $this->request->getJSON(true);

        return $this->response->setJSON($json);
    }

    //--------------------------------------------------------------------
}
