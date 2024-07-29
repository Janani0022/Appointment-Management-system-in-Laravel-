<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Models\Sign;
use  App\Models\Appointments;
use  App\Models\feedback;
use  App\Models\Message;
use Hash;
use Session;
use Carbon\Carbon;


class PagesController extends Controller
{
    public function indexSign(Request $request){
      $request->validate([
      'name'=>'required',
      'email'=>'required|email|unique:signs',
      'password'=>'required|min:6'
      
      ]);

        $data=new Sign;
    $data->name=$request->name;
    $data->email=$request->email;
    $data->password= Hash::make($request->password);
    
    $done= $data->save();
    if($done){
      return redirect('Appointment')->with('success','Registered successfully');
    }
    else{
      return back()->with('fail', 'Registration failed');
    }

  }

  public function indexbook(Request $request){

    $data=new Appointments;
$data->NIC=$request->id;
$data->Name=$request->Fname;
$data->PhoneNumber=$request->phone;
$data->VehicleType=$request->type;
$data->VehicleNumber=$request->num;
$data->VehicleModel=$request->model;
$data->Services=$request->service;
$data->Date=$request->date;
$data->Time=$request->time;

$data->save();

return redirect('Appointment')->with('success','Appointment submitted successfully!');


}

public function indexFeed(Request $request){
  $data=new feedback;
$data->Name=$request->name;
$data->Email=$request->email;
$data->Subject=$request->subject;
$data->Feedback=$request->feedback;

$data->save();
return redirect('Contact')->with('success','Thank you for the feedback!');


}

public function feeds(){
  $feed= feedback::all();
      return view('Contact',compact('feed'));

}

public function indexmsg(Request $request){
  $request->validate([
    'name'=>'required',
    'email'=>'required|email',
    'message'=>'required',
    
    
    ]);

  $data=new Message;
$data->Name=$request->name;
$data->MobileNumber=$request->num;
$data->Email=$request->email;
$data->Subject=$request->sub;
$data->Message=$request->message;

$done= $data->save();
return redirect('Contact')->with('success1','Message submitted successfully');

  }



 public function indexlog(Request $request)
    {
       $request->validate([
      'email'=>'required|email',
      'password'=>'required|min:6'
      
      ]);

if($_POST['email']=='admin@gmail.com' && $_POST['password']=='admin123'){
  
      return redirect('Admin');
  }

  else{

      $user = Sign::where('email','=',$request->email)->first();
      if($user){
        if(Hash::check($request->password, $user->password)){
      
        return redirect('Appointment')->with('success','Login successful');
      }
        
      else{
        return back()->with('fail', 'Password not matches.');
      }
    }
      else{
        return back()->with('fail', 'This email is not registered.');
      }
    }
    
     
    }
   
    
   
  /*Admin*/
    public function show(){
      $appointments= Appointments::orderBy('date','desc')->get();
      $msg= Message::all();
      return view('Admin',compact('appointments','msg'));
    }

    
     
    public function indexfilter(Request $request)
    {
        $search=$request->input('search');
      $users = Appointments::where('NIC',$search)->get();
if($users->isEmpty()){
  return back()->with('error','User not found!');
  
}
else{
  return view('Admin',compact('users'));
  }

    }


public function deletemsg($id){
  $task=Message::findOrFail($id);
  $task->delete();
  return redirect('Admin');

}

public function deleterec($id){
  $task=Appointments::findOrFail($id);
  $task->delete();
  return redirect('Admin');

}

    }
    


