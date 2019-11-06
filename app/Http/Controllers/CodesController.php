<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Code;
use Auth;

class CodesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request,[
            'body' => 'required' ,
        ]);

        // Create Post
        $code = new Code;
        $code->title = $request->input('title');
        $code->body = $request->input('body');
        $code->body = "\n" . $code->body;

        $available = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $randomS = "";

        for($i=0;$i<10;$i++)
        {
            $cur = rand(0,61);
            $randomS = $randomS.(string)$available[$cur];
        }
        $code->title = $randomS;
        $code->save();

        $data = [
            'title' => $code->title,
            'body' => $code->body
        ];

        return redirect('/'. $code->title);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        $code = Code::where('title',$title)->get();
        if(count($code))
            return view('pages.show')->with('code',$code[0]);
        return "Funny Bruhh!!!!!! :V :V :V";
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
