<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUsers() {
        $users=[
        ['name'=>'mouad',
         'email'=>'mouad@gmail.com',
         'phone'=>"098765"

        ],[
          'name'=>'NAWFAL',
          'email'=>'nawfal@gmail.com',
          'phone'=>"09876578"

        ],[
          'name'=>'yahya',
          'email'=>'yahya@gmail.com',
          'phone'=>"09876534"
        ],
    ];
    return view('user',['users'=> $users]);
}
    

   public function details($id){
       $users=[
        ['name'=>'mouad',
         'email'=>'mouad@gmail.com',
         'phone'=>"098765"

        ],[
          'name'=>'NAWFAL',
          'email'=>'nawfal@gmail.com',
          'phone'=>"09876578"

        ],[
          'name'=>'yahya',
          'email'=>'yahya@gmail.com',
          'phone'=>"09876534"
        ],
    ];
    
       return view('details', ['user'=>$users[$id]]);
   }
    }

