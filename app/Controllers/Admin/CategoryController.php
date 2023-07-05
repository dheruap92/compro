<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class CategoryController extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Category Page",
            "list" => $this->category->findAll(),
        ];
        return view("admin/category/index",$data);
    }

    public function create() {
        $data = [
            "title" => "Create Category Page"
        ];

        return view("admin/category/create",$data);
    }

    public function store() {
        $data = [
            "name" => $this->request->getPost("category")
        ];
        $this->category->insert($data);
        return redirect()->back()->with("success","Data Berhasil Ditambahkan");
    }

    public function edit() {
    }

    public function update() {

    }


}
