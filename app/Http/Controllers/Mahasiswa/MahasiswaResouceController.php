<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaResouceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Cara 1 mencari data
        // select * from mahasiswa where id 1
        $mahasiswa = Mahasiswa::where('id',1)->first();
        
        //Cara 2
        // $mahasiswa = Mahasiswa::find(1);
        $dosen = Dosen::where('id',1)->first();;
        dd($dosen); //Pengecekan apakah data nya masuk

        $mahasiswaCollection = Mahasiswa::get();

        return view('admin.pages.user.index', compact('mahasiswaCollection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.user.store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        // dump and die
        dd($requestData);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
