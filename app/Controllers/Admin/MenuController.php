<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Menu;
class MenuController extends BaseController
{
    protected $folder = "admin/menu/";
    public function __construct() {
        $this->menu = new Menu();

    }
    public function index()
    {
        $data = [
            "title" => "menu Page",
            "list" => $this->menu->asObject()->paginate(5,"menu"),
            'list_pager' => $this->menu->pager
        ];
        return view("admin/menu/index",$data);
    }

    public function create() {
        
        $data = [
            "title" => "Create menu Page"
        ];

        return view($this->folder."create",$data);
    }

    public function store() {
        $rules = [
            'menu' => 'required'
        ];
        $data = [
            "name" => $this->request->getPost("menu")
        ];
        if ($this->validate($rules)) {
            $this->menu->insert($data);
            return redirect()->back()->with("success","Data Berhasil Ditambahkan");
        } else {
            return redirect()->back()->with("error",validation_list_errors());
        }

    }

    public function edit($id) {
        $data = [
            "title" => "Edit menu Page",
            "list" => $this->menu->find($id)
        ];

        return view($this->folder."edit",$data);
    }

    public function update($id) {
        $rules = [
            'menu' => 'required'
        ];
        $data = [
            "name" => $this->request->getPost("menu")
        ];
        if ($this->validate($rules)) {
            $this->menu->update($id,$data);
            return redirect()->to(site_url('menu'))->with("success","Data Berhasil Update");
        } else {
            return redirect()->back()->with("error",validation_list_errors());
        }
    }

    public function delete($id) {
        $delete = $this->menu->delete($id);
        return redirect()->back()->with("success","Data berhasil di hapus");
    }
}
