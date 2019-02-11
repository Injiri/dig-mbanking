<?php

namespace App\Http\Controllers;
use App\Deposite;
use App\Deposite\mbanking;
use Illuminate\Http\Request;

class DepositesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deposites=Deposite::orderBy('account_number','asc')->paginate(5);
        return view('mbanking.index')->with('deposites', $deposites);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mbanking.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $deposites=deposite::find($id);
 return view('mbanking.deposite')->with('deposite',$deposites); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $account_number
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $account_number)
    {
        $deposites=Deposite::find($account_number);
      
        $topup=Deposite::where('account_number',$deposites->account_number)
        ->update(['deposted_amount'=>$request->input('topupAmount')]);
        if(topup){
            return ('mbanking.deposite')->with('deposted_amount',$topup); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
