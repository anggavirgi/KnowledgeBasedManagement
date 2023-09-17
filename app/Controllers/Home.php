<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Virtusee | Knowledge Based'
        ];
        return view('customer/index', $data);
    }

    public function categories()
    {
        $data = [
            'title' => 'Virtusee | categories'
        ];
        return view('customer/categories', $data);
    }

    public function complain()
    {
        $data = [
            'title' => 'Virtusee | complain'
        ];
        return view('customer/complain', $data);
    }

    public function history()
    {
        $data = [
            'title' => 'Virtusee | history complain'
        ];
        return view('customer/historycomplain', $data);
    }

    public function details()
    {
        $data = [
            'title' => 'Virtusee | article details'
        ];
        return view('customer/articledetails', $data);
    }
}
