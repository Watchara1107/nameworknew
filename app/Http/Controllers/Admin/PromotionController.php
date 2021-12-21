<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function index(){
        return view('admin.promotion.index');
    }
    public function addpromotion(){
        return view('admin.promotion.add');
    }
    public function editpromotion(){
        return view('admin.promotion.edit');
    }
}
