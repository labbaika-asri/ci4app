<?php namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = ["title" => "Home | WEB PROGRAMING POLMED"];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = ["title" => "About Us"];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            "title" => "Contact Us",
            "alamat" => [
                [
                    "tipe" => "rumah",
                    "alamat" => "Jl. abc No. 123",
                    "kota" => "Medan",
                ],
                [
                    "tipe" => "kantor",
                    "alamat" => "Jl. Setiabudi No. 187",
                    "kota" => "Medan",
                ]
            ],
        ];
        return view('pages/contact', $data);
    }
    //--------------------------------------------------------------------
}
