<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Tbluser;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    function formView(){
        return view('welcome');
    }
    function dashboard(){
        return view('dashboard');
    }
    function createData(Request $request)
    {
        Tbluser::updateorcreate([
            'id'=>$request->id,
        ],[
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect() -> back();
    }
    function viewData(){
        $data = Tbluser::all();
        // dd($data);
        return view('viewData',compact('data'));
    }
    function deleteData($id){
        $deleteRecord = Tbluser::find($id);
        // dd($deleteRecord);
        $deleteRecord->delete();
        return redirect() -> route('viewData');
    }
    function editData($id){
        $editDataRecord = Tbluser::find($id);
        return view('welcome',data: compact('editDataRecord'));
    }
}
