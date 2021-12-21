<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index(){
        return view('admin.price.index');
    }
    public function addprice(){
        return view('admin.price.add');
    }
    public function editprice(){
        return view('admin.price.edit');
    }
}
