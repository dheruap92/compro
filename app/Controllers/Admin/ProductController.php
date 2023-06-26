<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Daftar Product",
            'daftar_category' => $this->category->findAll()
        ];
        return view('admin/product/index',$data);
    }
}
