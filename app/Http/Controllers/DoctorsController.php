<?php

namespace App\Http\Controllers;

use App\doctor;
use App\section;
use App\city;


class DoctorsController extends Controller
{



    public function Sections($id,$id2 = null)
    {

        $section = section::find($id);
        $city = city::find($id2);
        if(!$id2)
        {
            $doctors = $section->doctors()->paginate(8);
        } 
        else
        {
            $doctors = $section->doctors()->where('city','=',$id2)->paginate(8);
        }
        $cities = city::latest()->get();
        return view('doctors-section', 
        [
            'doctors'=>$doctors, 
            'cities'=>$cities , 
            'section' => $section, 
            'city' => $city
        ]); 
   }

    public function create(){

        $departments = section::latest()->get();
        $cities = city::latest()->get();
          return view('add-doctors',  ['departments'=>$departments],['cities'=>$cities]);
    }

    public function store(){

        request()->validate($this->rules());

        $old = doctor::latest()->get();
        $doctors = new doctor;
        $doctors->name =request('name');
        $doctors->name_ar =request('name_ar');
        $doctors->hospital =request('hospital');
        $doctors->hospital_ar =request('hospital_ar');
        $doctors->section =request('section');
        $doctors->city =request('city');
        $doctors->place =request('place');
        $doctors->place_ar =request('place_ar');
        $doctors->phone =request('phone');
        $doctors->description =request('description');
        $doctors->img = request()->file('img')->store('public');
        foreach($old as $olds){
            if($doctors->name == $olds->name || $doctors->name_ar == $olds->name_ar)
                  return redirect()->route('create-doctor');}

        $doctors->save();
        return redirect()->route('all',['id' => $doctors->section, 'id2' => '0']);
  }
  public function search()
  {

    request()->validate([
        'search' => 'required'
    ]);
      $search = request('search');
          $sections = section::latest(); 
          $sections_ar = section::latest();

          $sections->where('department', 'LIKE', '%' . $search . '%');
          $mySection = $sections->first();

          $sections_ar->where('department_ar', 'LIKE', '%' . $search . '%');
          $mysectionar = $sections_ar->first();

          if($mySection)
          {
               return redirect()->route('all',['id' => $mySection->id, 'id2' => '0']);
          }
          else if($mysectionar)
          {
                return redirect()->route('all',['id' => $mysectionar->id, 'id2' => '0']);
          }
          else{
              return redirect()->route('department');          
          }

 }

 public function edit($id){
    $departments = section::latest()->get();
    $cities = city::latest()->get();
    $doctors = doctor::find($id);

    return view('edit', [
        'departments' => $departments,
        'cities' => $cities,
        'doctor' => $doctors
        ]);
 }
 public function update($id){
    request()->validate($this->rules()); 
     
    $doctors = doctor::find($id);
    if(request()->file('img')){
        // remove prev img


        // and store new one 
        $newimagePath = request()->file('img')->store('public');

        $doctors->img = str_replace('public', '', $newimagePath);
    }


     $doctors->name =request('name');
     $doctors->name_ar =request('name_ar');
     $doctors->hospital =request('hospital');
     $doctors->hospital_ar =request('hospital_ar');
     $doctors->section =request('section');
     $doctors->city =request('city');
     $doctors->place =request('place');
     $doctors->place_ar =request('place_ar');
     $doctors->phone =request('phone');
     $doctors->description =request('description');
     $doctors->save();

     return redirect()->route('all',['id' => $doctors->section, 'id2' => '0']);

 } 
 private function rules()
 {
     return [
        'name' => 'required',
        'name_ar' => 'required',
        'hospital' => 'required',
        'hospital_ar' => 'required',
        'section' => 'required',
        'city' => 'required',
        'place' => 'required',
        'place_ar' => 'required',
        'img' => 'required|image'
     ];
 }

 public function destroy($id)
 {

    $doctors = doctor::find($id);
    $section = $doctors->section;
    doctor::find($id)->delete();

    return redirect()->route('all',['id' => $section, 'id2' => '0']);
 }

}
