<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\GetInTouchModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class GetInTouchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.getintouch');
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
            "name"=>'required',
            "number"=>'required',
            "email"=>'required',
            "subject"=>'required',
            "message"=>'required'
        ]);

        $data=array(
            "name"=>$request->name,
            "phone"=>$request->number,
            "email"=>$request->email,
            "subject"=>$request->subject,
            "message"=>$request->message,
        );

        GetInTouchModel::create($data);
        Mail::to('kpkishanpatel990@gmail.com')->send(new SendEmail($data));
        return redirect('/Getin-Touch')->with('bloodsucc','Thank You for Contacting Us Our Organisation Will contact You Soon.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=GetInTouchModel::all();
        return view('manageuser',['data'=>$data]);
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
        GetInTouchModel::where('id',$id)->delete();
        return redirect('/manageuser')->with('deles','Data Deleted Successfully');
    }
}
