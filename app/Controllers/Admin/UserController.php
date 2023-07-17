<?php

namespace App\Controllers\Admin;

use App\Models\User;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    protected $user;
    public function __construct() {
        $this->user = new User;
    }
    public function index()
    {
        $data = [
            "title" => "User Page",
            "list" => $this->user->paginate(5,"user"),
            'list_pager' => $this->user->pager
        ];
        return view("admin/user/index",$data);
    }
}
