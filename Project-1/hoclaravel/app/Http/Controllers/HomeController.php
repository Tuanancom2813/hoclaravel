<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public $data = [];
    public function index() {
        $this->data['title'] = 'Đào tạo lập trình web';

        // $users = DB::select('SELECT * FROM users WHERE email=:email', [
        //     'email' => 'tunanca@gmail.com'
        // ]);
        // dd($users);
        return view('clients.home', $this->data);
    }

    public function products() {
        $this->data['title'] = 'Sản phẩm';
        return view('clients.products', $this->data);
    }

    public function getAdd() {
        $this->data['title'] = 'Thêm Sản phẩm';
        return view('clients.add', $this->data);
    }

    public function postAdd(Request $request) {
        dd($request);
    }
}