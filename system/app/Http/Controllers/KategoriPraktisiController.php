<?php

namespace App\Http\Controllers;

use App\Models\KategoriPraktisi;
use Illuminate\Http\Request;

class KategoriPraktisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list_kategori'] = KategoriPraktisi::all();
        return view('kategori-praktisi.index', $data);
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
     * @param  \App\Models\KategoriPraktisi  $kategoriPraktisi
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriPraktisi $kategoriPraktisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriPraktisi  $kategoriPraktisi
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriPraktisi $kategoriPraktisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriPraktisi  $kategoriPraktisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriPraktisi $kategoriPraktisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriPraktisi  $kategoriPraktisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriPraktisi $kategoriPraktisi)
    {
        //
    }
}
