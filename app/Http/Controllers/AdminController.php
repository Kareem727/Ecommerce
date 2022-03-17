<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
class AdminController extends Controller
{
    public function product(){
        return view('admin.product');
    }
    public function uploadproduct(Request $request){

        try{


   //         $data = new product;

            $image=$request->file;

            $imagename =time().'.'.$image->getClientOriginalExtension();

            $request->file->move('productimage', $imagename);

            $product = new product([
                'title' => $request->title,
                'price' => $request->price,
                'description' => $request->description,
                'quantity' => $request->quantity,
                'image' => $imagename,
                
            ]);
            $product->save();
            
            // $data->image=$imagename;
            // $data->title=$request->title;
            // $data->price=$request->price;
            // $data->description=$request->des;
            // $data->quantity=$request->quantity;


            //$data->save();

            return redirect()->back();

        }catch(\EXeption $ex){
                return $ex;
        }
         

    }
}
