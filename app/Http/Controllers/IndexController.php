<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class IndexController extends Controller
{
    public function Index(){
        $output = array(
            "title" =>  "xxf",
            "keywords"=>"ssdfsd",
        );
        return view('Index.index',$output);
    }

    public function Store(){
        $category = new Category();
        $category->name = "读书";
        $category->save();
        echo 3;die;
    }
    
    public function Test(){
        echo 3;die;
    }
}
