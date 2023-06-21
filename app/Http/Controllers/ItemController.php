<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function index(){
        $items = item::all();
        return view('item.index', ['items'=>$items]);
       
    }
    public function create(){
        return view('item.create');
    }
    public function store(Request $request){
        
        $agency_name = $request->input('agency_name');
        $address = $request->input('address');
        $item_code = $request->input('item_code');
        $qty = $request->input('qty');
        $data=array('agency_name'=>$agency_name,'address'=>$address, 'item_code'=>$item_code, 'qty'=>$qty, 'item_name'=>"");
        DB::table('items')->insert($data);
        return redirect(route('item.index'));

    }

    public function edit(Item $item){
        return view ('item.edit', ['item'=> $item]);
    }


    public function update(Item $item, Request $request){

        $id = $request->input('id');
        $agency_name = $request->input('agency_name');
        $address = $request->input('address');
        $item_code = $request->input('item_code');
        $qty = $request->input('qty');
        $data=array('id'=>$id, 'agency_name'=>$agency_name,'address'=>$address, 'item_code'=>$item_code, 'qty'=>$qty, 'item_name'=>"");
       
        DB::table('items')
            ->where('id',$id)
            ->update(array());

        

    }
}
