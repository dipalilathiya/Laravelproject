<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Tbladmin;
use Illuminate\Http\Request;
class admincontroller extends Controller
{
    public function view()
    {
        return view('form');
    }
   public function create(Request $req)
   {     
       if(isset($req->submit))
       {
          Tbladmin::updateOrCreate([
                "id"=>$req->id,
            ],
            [
            "name"=> $req->name,
            "email"=> $req->email,
            "password"=> $req->password
           ]);
       }
       return redirect()->back();
   }
   public function view1(Request $req)
   {
       $data =Tbladmin::all();
       return view('view1' ,compact('data'));
   }
   public function delete(Request $req ,$id)
   {
      $deletedata= Tbladmin::find($id);
      $deletedata->delete();
      return redirect() -> route('view1');
   }
   public function edit($id)
   {
        $edit=Tbladmin::find($id);
        return view('form', compact('edit'));
   }

public function search(Request $req)
{
   
     $search = $req->search;
     $data = Tbladmin::where('name', 'like', "%$search%")->get();
     return view('view1' ,compact('data'));  
}
public function back(Request $req)
{
    $data =Tbladmin::all();
    return view('view1' ,compact('data'));
}
}
