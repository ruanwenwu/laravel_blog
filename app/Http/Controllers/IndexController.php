<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //��ҳ
    public function Index(){
        return view("Index.index");
    }
    
    public function Test(){
        echo $id;
        die;
    }
}
