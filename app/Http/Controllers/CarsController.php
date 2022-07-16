<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use App\Models\Cars;

class CarsController extends Controller
{

    public function index(){
        return view('index', [
         'cars' => Cars::simplePaginate(5)
     ]);
     }

     public function show($id){
     return view('show', [  'cars' => Cars::find($id)   ]);
   }

     public function indexdashboard(){
      return view('dashboard', [
         'cars' => Cars::orderBy('id')->get()
     ]);
   }
  
     public function create(){
        return view('dashboard.create');
     }
  
     public function store(Request $request){
        $data = $request->except('_method','_token','submit');
  
        $validator = Validator::make($request->all(), [
           'model' => 'required|string|min:1',
           'brand' => 'required|string|min:1',
           'power' => 'required|string|min:1',
           'year' => 'required|string|min:4',
           'finishing' => 'required|string|min:1',
           'short_description' => 'required|string|min:1',
           'main_photo' => 'required|string|min:1',
           'sale_price' => 'required|string|min:1',
        ]);
  
        if ($validator->fails()) {
           return redirect()->Back()->withInput()->withErrors($validator);
        }
  
        if($record = Cars::firstOrCreate($data)){
           Session::flash('message', 'Added Successfully!');
           Session::flash('alert-class', 'alert-success');
           return redirect()->route('dashboard');
        }else{
           Session::flash('message', 'Data not saved!');
           Session::flash('alert-class', 'alert-danger');
        }
  
        return Back();
     }
  
     public function edit($id){
        $cars = Cars::find($id);
  
        return view('dashboard.edit')->with('cars',$cars);
     }
  
     public function update(Request $request,$id){
        $data = $request->except('_method','_token','submit');
  
        $validator = Validator::make($request->all(), [
            'model' => 'required|string|min:1',
            'brand' => 'required|string|min:1',
            'power' => 'required|string|min:1',
            'year' => 'required|string|min:4',
            'finishing' => 'required|string|min:1',
            'short_description' => 'required|string|min:1',
            'main_photo' => 'required|string|min:1',
            'sale_price' => 'required|string|min:1',
        ]);
  
        if ($validator->fails()) {
           return redirect()->Back()->withInput()->withErrors($validator);
        }
        $cars = Cars::find($id);
  
        if($cars->update($data)){
  
           Session::flash('message', 'Update successfully!');
           Session::flash('alert-class', 'alert-success');
           return redirect()->route('dashboard');
        }else{
           Session::flash('message', 'Data not updated!');
           Session::flash('alert-class', 'alert-danger');
        }
  
        return Back()->withInput();
     }
  
     // Delete
     public function destroy($id){
        Cars::destroy($id);
  
        Session::flash('message', 'Delete successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('dashboard');
     }
}
