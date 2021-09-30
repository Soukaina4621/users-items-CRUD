<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// class PostController extends Controller
// {
//     public function index()
//     {
//         $items= DB::table('items')->get();
//         return view('items.index',['items'=>$items]);
//     }
//     public function insert()
//     {
//       DB ::table('items')->insert([
//        ['title'=>'foot ball', 'description'=>'Neymar donated it :D']
//       ]);

//     }
// }
class PostController extends Controller
{
    public function index()
    {
        $items=Item::orderBy('created_at','DESC')->get(); 
        return view ('items.index', ['items'=> $items]);
    }

    // data stored in $items and passed to items-> name
    // this function brings  ALL items from db and redirect them to the index file in the views inside the items folder

    public function create(){
      return view('items.create');
    }
    public function store(Request $req)
    {
      $req->validate([
        'title'=> 'required',
        'description'=>'required'
      ]);
        $item=new Item();
        $item->title=$req->title;
        $item->description=$req->description;
        $item->save();
        session()-> flash('status','post was saved successfuly');
        return redirect('items_list');
    } 
    public function edit($id)
    {
      $item= Item::findOrFail($id);
      return view ('items.edit', ['item'=>$item]);
    }
    public function updateItem (Request $req, $id)
    {
      $item= Item::find($id);
      $item->title= $req-> title;
      $item->description= $req->description;
      $item->save();
        session()-> flash('status','post was successfuly updated ');
      
       return redirect('items_list');

    }
     public function add()
    {
        $item=new Item();
        $item->title='avocado';
        $item->description='fruit';
        $item->save();
        return redirect('items_list');
    }

    public function show($id)
    {
        $item=Item::findOrFail($id);
        
        return view('items.details',['item'=>$item]);
    }

    public function destroy($id)
    {
      Item::find($id)->delete();
       return redirect('items_list');

    }

    // public function update($id)
    // {
    //   $item= Item::find($id);
    //   $item->title="MILK";
    //   $item->description="Liquid";
    //   $item->save();

    //    return redirect('items_list');

    // }

}

   