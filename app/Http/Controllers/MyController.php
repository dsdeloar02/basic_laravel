<?php

namespace App\Http\Controllers;

use stdClass;

class MyController extends Controller
{
    // void mean = it means I cannot return anything,
    public function index()
    {
        $name = "Deluar Hossain";
        $age = 16 ;
        $datas = [
            'Deluar',
            'Shovon',
            'Tuhin',
            'Rahad',
        ];

        $user1 = new stdClass();
        $user1->name = "Deluar";
        $user1->age = 22 ;
        

        $user2 = new stdClass();
        $user2->name = "Shovon";
        $user2->age = 21 ;


        $user3 = new stdClass();
        $user3->name = "Rahad";
        $user3->age = 20 ;

        $users_obj = [
            $user1, $user2, $user3
        ];


        return view('home', compact('name', 'age', 'datas', 'users_obj')) ;
        // return view('home', compact('name', 'age')) ;
    }

    public function about()
    {
        return view('about') ;
    }

    public function contact()
    {
        return view('contact') ;
    }

    public function blog()
    {
        return view('blog') ;
    }

    public function show($id = null )
    {
        return $id ;
    }
}
