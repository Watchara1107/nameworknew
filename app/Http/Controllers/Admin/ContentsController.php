<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentsController extends Controller
{
    public function index(){
        return view('admin.contents.index');
    }
    public function addcontents(){
        return view('admin.contents.add');
    }
    public function editcontents(){
        return view('admin.contents.edit');
    }
    
}
