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

    public function generalarticle()
    {
        $data = [
            'title' => 'Virtusee | article'
        ];
        return view('customer/articlegeneral', $data);
    }

    public function generalarticledetail()
    {
        $data = [
            'title' => 'Virtusee | article detail'
        ];
        return view('customer/articledetailgeneral', $data);
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

    public function personalarticle()
    {
        $data = [
            'title' => 'Virtusee | article'
        ];
        return view('customer/articlepersonal', $data);
    }

    public function personalarticledetail()
    {
        $data = [
            'title' => 'Virtusee | article detail'
        ];
        return view('customer/articledetailpersonal', $data);
    }
}
