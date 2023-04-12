<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserFindDonorModel;
use DB;

class UserFindDonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $data = DB::table('blood')->get();
        $data1 = DB::table('state')->get();
        $data2 = DB::table('city')->get();
        return view('user.finddonor',['data'=>$data],['data1'=>$data1],['data2'=>$data2]);

        
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
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required',
            'verifyemail'=>'required',
            'phone'=>'required',
            'occupation'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'blood'=>'required',
            'statelist'=>'required',
            'donate'=>'required',
            'disease'=>'required',
            'allergy'=>'required',
            'date'=>'required'
        ]);

        $data=array(
            "name"=>$request->name,
            "surname"=>$request->surname,
            "email"=>$request->email,
            "verifyemail"=>$request->verifyemail,
            "number"=>$request->phone,
            "occupation"=>$request->occupation,
            "address"=>$request->address,
            "gender"=>$request->gender,
            "bloodtype"=>$request->blood,
            "statelist"=>$request->statelist,
            'donate'=>$request->donate,
            'disease'=>$request->disease,
            'allergy'=>$request->allergy,
            'date'=>$request->date
        );
    
        UserFindDonorModel::create($data);
        return redirect('/RegisterAs-ADonor')->with('success','Donor Data Submitted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        

        // $data=DB::table('addbloodcamp_tbl')
        // ->join('state','state.id','=','addbloodcamp_tbl.id')
        // ->join('city','city.stateid','=','addbloodcamp_tbl.id')
        // ->select('addbloodcamp_tbl.*','state.statename','city.cityname')->get();

        $data=DB::table('find_donor')
        ->join('blood','blood.id','=','find_donor.id')
        ->join('state','state.id','=','find_donor.id')
        ->select('find_donor.*','blood.blood_type','state.statename')->get();


        return view('managedonor',['data'=>$data]);
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
        UserFindDonorModel::where('id',$id)->delete();
        return redirect('/managedonor')->with('deletesucc','Donor Deleted Successfully');
    }
}
