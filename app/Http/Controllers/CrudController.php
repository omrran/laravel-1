<?php

namespace App\Http\Controllers;

use App\Models\Offer;
//use Dotenv\Validator;
use \Validator;
use Illuminate\Http\Request;

class CrudController extends Controller
{

    /*public function store(){
         Offer::create([
             'name'=>'omran',
             'price'=>'100',
             'details'=>'aaaaaaaaaaaaaaa'
         ]);
    }*/
    public function create(){
    return view('create');
    }

    public function store(Request $request){

        $validat = Validator::make($request->all(),[
            'name'=>'required | unique:offers,name',
            'price'=>'required | numeric',
            'details'=>'required '
        ]);
        if($validat->fails()){
            //return $validat->errors();
            return redirect()->back()->withErrors($validat);
        }
        Offer::create([

            'name'   => $request->name,
            'price'  => $request->price,
            'details'=> $request->details
        ]);

        /*Offer::create([
            'name'=>'omran',
            'price'=>'100',
            'details'=>'aaaaaaaaaaaaaaa'
        ]);*/
        return 'okkkkkkkkkk';
    }
}
