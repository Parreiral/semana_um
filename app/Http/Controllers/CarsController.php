<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;
use App\Models\User;
use Session;


class CarsController extends Controller
{
   public function dashboard()
   {
        $cars = Cars::get();
        $data=array();
        if(Session::has('loginId'))
        {
            $data = User::where('id','=', Session::get('loginId'))->first();
        }

        return view('/dashboard',compact("cars","data"));
   }    


   public function create(){
   
      return view('/new');

   }

   public function store(Request $request){
      
    $cars= new Cars;
    $cars->Marca = $request->Marca;
    $cars->Modelo = $request->Modelo;
    $cars->lugares = $request->lugares;
    $cars->potencia = $request->potencia;
    $cars->save();

    return redirect('/dashboard');
   }

   public function edit($id){

      $car= Cars::find($id);
      return view('editCar',compact("car"));
   }

   public function update(Request $request, $id){
      $car = Cars::where('id',$id)->first();
      $car->Marca = $request->Marca;
      $car->Modelo = $request->Modelo;
      $car->lugares = $request->lugares;
      $car->potencia = $request->potencia;
      $car->save();

      return redirect('/dashboard');

   }
   public function destroy($id){
      $cars= Cars::whereId($id)->first();
      $cars->delete();
      return redirect('/dashboard');
   }
}
