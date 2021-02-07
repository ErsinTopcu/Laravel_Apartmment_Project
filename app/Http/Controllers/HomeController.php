<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.index');
    }
    public function aboutus()
    {
        return view('home.about');
    }

    public function test($id,$name)
    {
        echo "ID Number:", $id;
        echo "<br>Name:", $name;
        for ($i=1;$i<=$id;$i++)
        {
            echo "<br> $i - $name";
        }
    }


}
