<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
use DB;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all Newsletters
        // return Newsletter::orderBy('created_at', 'desc')->get();
        // return Newsletter::all()->take(1)->get();
        // return DB::select('SELECT * FROM newsletters');
        // return Newsletter::where('id', 2)->get();
        return Newsletter::orderBy('id', 'desc')->paginate(1);

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
        // Save a Newsletter
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required'
        ]);

        $newsletter = new Newsletter();
        $newsletter->full_name = $request->input('full_name');
        $newsletter->email = $request->input('email');
        $newsletter->phone_number = $request->input('phone_number');
        $newsletter->save();
        return redirect('successful')->with('success', 'Congratulations!!!');
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
        return Newsletter::where('id', $id)->get();
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
