<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\items;

class productcontroller extends Controller
{
     
    //[ShowItems] Read items From DB
    public function ShowItems()
    {
        $items= items::all();
        return view('items', ['items'=>$items]);
    }
    
    //[CreateProduct] Create a new product and insert into DB
    public function CreateProduct(Request $request)
    {
        $items= items::create([
            'productname'=>$request->productname,
            'price'=>$request->price,
        ]);
        $items->save();
        return redirect('showitems');
    }
    
    //[DeleteProduct] Delete Product Where (id) 
    public function DeleteProduct($id)
    {
        $items= items::where('id',$id); //search
        $items->delete();               //delete
        return redirect('showitems');
    }
    
    
    
    public function EditProduct($id)
    {
        $items = items::find($id);
        return view('edit',['items'=>$items]);
    }
    
    public function UpdateProduct(Request $request)
    {
        $items= items::Where('id',$request->id)->update(
            ['productname'=>$request->productname,
            'price'=>$request->price]
        );
        
        return redirect('showitems');
    }
    
}
