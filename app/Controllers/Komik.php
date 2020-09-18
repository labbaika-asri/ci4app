<?php
namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $KomikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }

    public function index()
    {
        $komik = $this->komikModel->findAll();
        $data = [
            "title" => "Komik",
            "komik" => $komik
        ];

        return view('komik/index', $data);
    }
    //--------------------------------------------------------------------
}
