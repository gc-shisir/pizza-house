<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index(){
        // $pizzas=Pizza::all();
        // echo($pizzas);
        // $pizzas=Pizza::orderBy('name')->get();
        // $pizzas=Pizza::orderBy('name','desc')->get();
        // $pizzas=Pizza::where('type','hawaiian')->get();
        $pizzas=Pizza::latest()->get();

        return view('pizzas.index',['pizzas'=>$pizzas]);

        // $name=request('name');
        // $pizza=['type'=>"chicken" , 'base'=>'crispy flour','price'=>10];
        // return view('pizzas',$pizza,['name'=>$name]);
    }

    public function show($id){
        $pizza=Pizza::findOrFail($id);
        // print_r($pizza);
        return view('pizzas.show',['pizza'=>$pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        // error_log(request('name'));
        // error_log(request('type'));
        // error_log(request('base'));
        $pizza=new Pizza();
        $pizza->name=request('name');
        $pizza->base=request('base');
        $pizza->type=request('type');
        $pizza->toppings=request('toppings');
        error_log($pizza);
        $pizza->save();
        return redirect('/')->with('msg', 'Thanks for your order');
    }

    public function destroy($id){
        $pizza=Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas');
    }
}
