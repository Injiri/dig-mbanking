<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;//allows request handling

class PagesController extends Controller
{
public function index(){
$title='wellcome to digiMbanking!';
    return view('pages.index',compact('title'));
   //return view('pages.index')->with('title',$title);     
}
public function depositcash(){
    return view('pages.depositcash');
}
public function services(){
    
    $data=array(
        'title'=>'Services',
        'services'=>['Banking','money tranfers','deposite','Balance enquiries']

    );

    return view('pages.services')->with($data);
}
}
