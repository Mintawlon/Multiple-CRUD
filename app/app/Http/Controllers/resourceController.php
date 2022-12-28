<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class resourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table("tests")->paginate(5);
        $drug = DB::table('drugs')->paginate(5);
        $shops = DB::table('shops')->paginate(5);
        $brand = DB::table('brands')->paginate(5);
        //dd($user);
        return view('Hospital.list', ["users" => $user, "drugs" => $drug, "shops" => $shops, "brands" => $brand]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Hospital.add');
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
        DB::table("tests")->insert([
            'username' => $request->username,
            'age' => $request->age,
            'email' => $request->email,
            'address' => $request->address,
            'created_at' => date('Y/m/d'),
        ]);
        return redirect("/test");
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $user = DB::table('tests')->where("id", $id)->first();
        //dd($user);
        return view('Hospital.edit', ["user" => $user]);
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
        DB::table('tests')->where('id', $id)->update([
            'username' => $request->username,
            'age' => $request->age,
            'email' => $request->email,
            'address' => $request->address
        ]);
        return redirect('/test');
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
        DB::table('tests')->where('id', $id)->delete();
        return redirect('/test');
    }
}
