<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddBloodCampModel;
use DB;

class AddBloodCampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data1 = DB::table('state')->get();
        $data2 = DB::table('city')->get();
        return view('addbloodcamp',['data1'=>$data1],['data2'=>$data2]);
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
            "cname"=>'required',
            "cdate"=>'required',
            "ctime"=>'required',
            "caddress"=>'required',
            "statelist"=>'required',
            "city"=>'required',
            "cnumber"=>'required',
            "cconductedby"=>'required',
            "corganizedby"=>'required'
        ]);

        $data=array(
            "cname"=>$request->cname,
            "cdate"=>$request->cdate,
            "ctime"=>$request->ctime,
            "address"=>$request->caddress,
            "statelist"=>$request->statelist,
            "city"=>$request->city,
            "number"=>$request->cnumber,
            "conductedby"=>$request->cconductedby,
            "organizedby"=>$request->corganizedby
        );

        AddBloodCampModel::create($data);
        return redirect('/Addbloodcamp')->with('bcsuccess','Blood donation Camp Successfully Registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {    
        $data=DB::table('addbloodcamp_tbl')
        ->join('state','state.id','=','addbloodcamp_tbl.id')
        ->join('city','city.stateid','=','addbloodcamp_tbl.id')
        ->select('addbloodcamp_tbl.*','state.statename','city.cityname')->get();

        return view('/managebloodcamp',['data'=>$data]);
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
