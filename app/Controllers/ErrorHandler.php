<?php

namespace App\Controllers;

class ErrorHandler extends BaseController
{
    public function error404()
    {
        $data = [
            'title' => '404 Not Found'
        ];
        return view('errors/html/error_404', $data);
    }
}
