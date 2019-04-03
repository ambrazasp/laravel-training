<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $files = DB::table('files')->get();

        return view('files.index', ['files' => $files]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('files.create');
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
            'filename' => 'required|min:5',
            'size' => 'required',
            'content' => 'required|min:10'
        ]);

        DB::table('files')->insert([
            'filename' => $request->input('filename'),
            'size' => $request->input('size'),
            'content' => $request->input('content')
        ]);

        $message = 'File was created';
        return redirect()->route('files.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file = DB::table('files')->where('id', $id)->first();
        return view('files.show', compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $file = DB::table('files')->where('id', $id)->first();
        return view('files.edit', compact('file'));
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
        $request->validate([
            'filename' => 'required|min:5',
            'size' => 'required',
            'content' => 'required|min:10'
        ]);

        DB::table('files')->where('id', $id)->update([
            'filename' => $request->input('filename'),
            'size' => $request->input('size'),
            'content' => $request->input('content')
        ]);

        $message = 'File was updated';
        return redirect()->route('files.show', [ 'id' => $id ])->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('files')->delete($id);

        $message = 'File was deleted';
        return redirect()->route('files.index')->with('message', $message);
    }
}
