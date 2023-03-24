<?php

namespace App\Http\Controllers;

use App\Models\MainModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function homepage(){
        return view('welcome', ['collection'=>MainModel::all()]);
    }

    public function AddData(Request $request){
        $validated=$request->validate([
            'Name'=> ['Required'],
            'Email'=> ['Required'],
            'Address'=> ['Required'],
            'Phone'=> ['Required'],
        ]);

        MainModel::create($validated);

        return redirect ('/')->with('message', 'created successfully!');


    }

    public function UpdatePage($id){
        return view('UpdatePage', ['collection'=>MainModel::findorfail($id)]);


    }


    public function UpdateData(Request $request,$id){
        $validated=$request->validate([
            'Name'=> ['Required'],
            'Email'=> ['Required'],
            'Address'=> ['Required'],
            'Phone'=> ['Required'],
        ]);

        $Row=MainModel::find($id);
        $Row->Name=$validated['Name'];
        $Row->Email=$validated['Email'];
        $Row->Address=$validated['Address'];
        $Row->Phone=$validated['Phone'];
        $Row->update();
        return redirect('/')->with('message', 'Updated Successfully');
    }


    public function DeleteData(Request $request,$id) {
        $collection=MainModel::findorfail($id);
        $collection->delete();

        return redirect('/')->with('message', 'Deleted Successfully!');

    }
}
