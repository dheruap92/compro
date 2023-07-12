<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\models\Category;

class CategoryController extends BaseController
{

    protected $folder = "admin/category/";
    public function __construct() {
        $this->category = new Category;

    }
    public function index()
    {
        $data = [
            "title" => "Category Page",
            "list" => $this->category->asObject()->paginate(5,"category"),
            'list_pager' => $this->category->pager
        ];
        return view("admin/category/index",$data);
    }

    public function create() {
        
        $data = [
            "title" => "Create Category Page"
        ];

        return view($this->folder."create",$data);
    }

    public function store() {
        $rules = [
            'category' => 'required'
        ];
        $data = [
            "name" => $this->request->getPost("category")
        ];
        if ($this->validate($rules)) {
            $this->category->insert($data);
            return redirect()->back()->with("success","Data Berhasil Ditambahkan");
        } else {
            return redirect()->back()->with("error",validation_list_errors());
        }

    }

    public function edit($id) {
        $data = [
            "title" => "Edit Category Page",
            "list" => $this->category->find($id)
        ];

        return view($this->folder."edit",$data);
    }

    public function update($id) {
        $rules = [
            'category' => 'required'
        ];
        $data = [
            "name" => $this->request->getPost("category")
        ];
        if ($this->validate($rules)) {
            $this->category->update($id,$data);
            return redirect()->to(site_url('category'))->with("success","Data Berhasil Update");
        } else {
            return redirect()->back()->with("error",validation_list_errors());
        }
    }

    public function delete($id) {
        $delete = $this->category->delete($id);
        return redirect()->back()->with("success","Data berhasil di hapus");
    }


}
