<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function show (){
        $all =Client::all();
        return view('admin.client.show',compact('all'));
    }
    public function index (){
            
        return view('admin.client.add');
    }

    public function edit($id){


        $record = Client::findOrFail($id);
            
        return view('admin.client.edit',compact('record'));
    }
    
    public function create(Request $request){


        $request->validate([
            'studentname' => 'required|max:45',
            'fathername' => 'required|max:45',
            'fathername' => 'required|max:45',
            'email' => 'required',  
            'mobile' => 'required',
            'address' => 'required',
            'pic'=>'required|mimes:jpeg,jpg,png,gif|required|max:10000',  
        ]);

        $image_rename='';
        if ($request->hasFile('pic')){
            $image = $request->file('pic');
            $ext=$image->getClientOriginalExtension();
            $image_rename=time() . '_' . rand(100000, 10000000) . '.' .$ext; 
            $image->move(public_path('images'), $image_rename);
        }

        $insert=Client::insertGetId([
            'studentname'=>$request['studentname'],
            'fathername'=>$request['fathername'],
            'mothername'=>$request['mothername'],
            'email'=>$request['email'],
            'mobile'=>$request['mobile'],
            'address'=>$request['address'],
            'pic' => $image_rename,

        ]);

        if($insert){
            return back()->with('success', 'Data inserted Successfully');
        
        }
        
        else{
            return back()->with('error', 'Query Failed');   
        }
        
    }

    public function update(Request $request){
       
        // dd($request->all());

        $id=$request->id;
        $request->validate([
            'studentname' => 'required|max:45',
            'fathername' => 'required|max:45',
            'fathername' => 'required|max:45',
            'email' => 'required',  
            'mobile' => 'required',
            'address' => 'required',
            'pic'=>'required|mimes:jpeg,jpg,png,gif|required|max:10000',
        ]);

        
        $oldimg=Client::findOrFail($id);
        $deleteimg=public_path('images/'.$oldimg['pic']);
        $image_rename='';

        if ($request->hasFile('pic')){
            $image = $request->file('pic');
            $ext=$image->getClientOriginalExtension();

            if(file_exists($deleteimg)){
              unlink($deleteimg);
            }


            $image_rename=time() . '_' . rand(100000, 10000000) . '.' .$ext; 
            $image->move(public_path('images'), $image_rename);
        }
        else{
            $image_rename=$oldimg['pic'];  
        }

    
        
        $update = Client::where('id',$id)->update([
            'studentname'=>$request['studentname'],
            'fathername'=>$request['fathername'],
            'mothername'=>$request['mothername'],
            'email'=>$request['email'],
            'mobile'=>$request['mobile'],
            'address'=>$request['address'],
            'pic' => $image_rename,
        ]);
    
        // Check if the insertion was successful
        if($update){
            return back()->with('success', 'Data updated Successfully');
        } else {
            return back()->with('error', 'Query Failed');   
        }
    }



    public function destroy($id){
        $id=intval($id);
        $client=Client::find($id);

        if($client){

            $imagePath=public_path('images/'.$client->pic);
            if(file_exists($imagePath)){
                unlink($imagePath);

            }

       $client->delete();
       return back()->with('success', 'Data deleted Successfully');


        }


    }

    public function logout () {
    //logout user
    auth()->logout();
    // redirect to homepage
    return redirect('/');
}

   
}
