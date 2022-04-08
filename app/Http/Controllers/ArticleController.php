<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index($id=0){

        $title = "Ma formation - ". $id;

        return view("articles", [ "title"=>$title, "id"=>$id ]); 

    }
    
}
