<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{


    public $defautStagiaires = [ "Emeric",

                                "Veronique",

                                "Kaita",

                                "Stephen",

                                "redaud" ] ;


    //
    public function index(){

      
       $stagiaires = $this->defautStagiaires;

       
        /* return view("articles", compact("prenom","nom")); */ 

        /* return view("articles", ["pre"=>$prenom, "nom"=>$nom, "age"=>$age]); */

        return view("articles", compact("stagiaires"));
    }

    public function detail($id=''){

        $stagiaire = $this->defautStagiaires[$id] ;

        return view("detail", compact("stagiaire"));
           
    }
}


    