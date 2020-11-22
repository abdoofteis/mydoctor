<?php

namespace App\Http\Controllers;

use App\section;

class SectionController extends Controller
{
    public function Home(){
        $departments = section::latest()->get();

        return view('Mydoctor', ['departments'=>$departments]);
    }
    public function create(){
        return view('Department-create');
  }

  public function store(){
    request()->validate($this->rule()); 

      $old = section::latest()->get();
      $departments = new section;
      $departments->department =request('department');
      $departments->department_ar =request('department_ar');
      $departments->img = request()->file('img')->store('public');
      $departments->img = str_replace('public', '', $departments->img);
      foreach($old as $olds){
           if($departments->department == $olds->department || $departments->department_ar == $olds->department_ar)
                 return redirect()->route('create-section');}
      $departments->save();
      return redirect()->route('department');

    }
    public function department(){
        return redirect('mydoctor#department');
    }

    public function edit($id){

        $departments = section::find($id);    
        return view('edit-section', [
            'departments' => $departments
            ]);
     }

     public function update($id){
        request()->validate($this->rule()); 
         
        $departments = section::find($id);
        if(request()->file('img')){
            // remove prev img
    
    
            // and store new one 
            $newimagePath = request()->file('img')->store('public');
    
            $departments->img = str_replace('public', '', $newimagePath);
        }
    
         $departments->department =request('department');
         $departments->department_ar =request('department_ar');
         $departments->save();
    
         return redirect()->route('department');
    
     } 

     public function destroy($id)
    {
         section::find($id)->delete();

         return redirect()->route('department');
     }

     private function rule()
     {
         return [
            'department' => 'required',
            'department_ar' => 'required',
            'img' => 'required|image'
         ];
     }


}
