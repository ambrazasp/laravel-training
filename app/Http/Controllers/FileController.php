<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    private $_files = [
        [
            'id' => 1,
            'filename' => 'Failas 1',
            'created_at' => '2019-03-26 16:21',
            'size' => 120
        ],
        [
            'id' => 2,
            'filename' => 'Failas 2',
            'created_at' => '2019-03-26 16:22',
            'size' => 240
        ],
        [
            'id' => 3,
            'filename' => 'Failas 3',
            'created_at' => '2019-03-26 16:23',
            'size' => 360
        ]
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = [
            'files' => $this->_files
        ];

        return view('files.index', $data);
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
        $file = array_filter($this->_files, function ($file) use ($id) {
            return ($file['id'] === (int)$id);
        });

        return view('files.show', ['file' => array_shift($file)]);
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
