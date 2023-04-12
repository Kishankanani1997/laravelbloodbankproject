<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddBloodBankModel; 

class AddBloodBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addbloodbank');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "bbname"=>'required',
            "bbaddress"=>'required',
            "bbnumber"=>'required',
            "bbemail"=>'required',
            "bbtype"=>'required'
        ]);

        $data=array(
            "name"=>$request->bbname,
            "address"=>$request->bbaddress,
            "number"=>$request->bbnumber,
            "email"=>$request->bbemail,
            "bbtype"=>$request->bbtype,
        );

        AddBloodBankModel::create($data);
        return redirect('/Addbloodbank')->with('bbsuccess','BloodBank Added Successfully.');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=AddBloodBankModel::all();
        Return view('managebloodbank',['data'=>$data]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
