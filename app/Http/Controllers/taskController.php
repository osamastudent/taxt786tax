<?php

namespace App\Http\Controllers;

use App\Models\alert;
use App\Models\event;
use App\Models\task;
use Illuminate\Http\Request;


class taskController extends Controller
{


    // tasks
 public function Tasks(){
    return view('admin.usersite.tasks');
 }

    // tasks store into database
 public function TasksStore(Request $request){
   $data=$request->all();

   $fileFields=['file'];
   foreach($fileFields as $fields){
   $file=$request->file($fields);
   if($file){
   $originalName=$file->getClientOriginalName();
   $hashedName=md5(time().$originalName). '.' . $file->getClientOriginalExtension();
   $file->move('tasksalertsevents/',$hashedName);
   $data[$fields]=$hashedName;
      }
      
      task::Create($data);
      return back()->with('success','Added Successfully');
   }

 }
 
 


    // alerts
 public function TaskAlerts(){
    return view('admin.usersite.taskalerts');
 }


    // alerts store into databse
 public function TaskalertsStore(Request $request){
    $data=$request->all();
$fileFields=['file'];
foreach($fileFields as $fields){
$file=$request->file("file");
$originalName=$file->getClientOriginalName();
$hashedName=md5(time().$originalName). '.' .$file->getClientOriginalExtension();
$file->move('tasksalertsevents/',$hashedName);
$data[$fields]=$hashedName;
}
alert::create($data);
return back()->with('success','Added Successfully');
 }



    // Events
 public function Events(){
    return view('admin.usersite.events');
 }
    // Events
 public function EventsStore(Request $request){
   $data=$request->all();
   $fileFields=['file'];
   foreach($fileFields as $fields){
      
   $file=$request->file("file");
   $originalName=$file->getClientOriginalName();
   $hashedName=md5(time().$originalName). '.' .$file->getClientOriginalExtension();
   $file->move('tasksalertsevents/',$hashedName);
   $data[$fields]=$hashedName;
   }
   event::create($data);
   return back()->with('success','Added Successfully');
 }


 
}
