<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;

class todoscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $todo = todo::all();
        return view('index')->with('test',$todo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'text' => 'required',
            'body' => 'required',
            'due' => 'required',
        ]);

            // create to do .. save it to data base
            $todo = new todo;
            $todo->text = $request->input('text');
            $todo->body = $request->input('body');
            $todo->due = $request->input('due');
            $todo->save();
            return redirect ('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = todo::find($id);
        return view('show')->with('show',$todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = todo::find($id);
        return view('edit')->with('show',$todo);
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
        $this->validate($request,[
            'text' => 'required',
            'body' => 'required',
            'due' => 'required',
        ]);

            // create to do .. save it to data base
            $todo = todo::find($id);
            $todo->text = $request->input('text');
            $todo->body = $request->input('body');
            $todo->due = $request->input('due');
            $todo->save();
            return redirect ('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = todo::find($id);
        $todo->delete();
        return redirect('/');
    }
}
