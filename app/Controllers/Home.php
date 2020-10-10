<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function exp_ajax()
    {
        return view('exp_ajax');
    }

    public function exp_ajax_result()
    {
        $json = $this->request->getJSON(true);

        return $this->response->setJSON($json);
    }

    //--------------------------------------------------------------------
}
