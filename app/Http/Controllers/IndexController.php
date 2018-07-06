<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Recommends;

class IndexController extends Controller
{
    public function Index(){
        $seo = array(
            "title" =>  "阮文武的官方网站",
            "keywords"=>"阮文武，阮文武网站，阮文武的新站",
        );
        //推荐位
        $recommends = Recommends::query()->orderBy("order","desc")->get();
        $output = [
            "seo"           =>  $seo,
            "recommends"    =>  $recommends,
        ];
        return view('Index.index',$output);
    }
}
