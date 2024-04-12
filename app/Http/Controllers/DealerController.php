<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dealers', [
            'item' => Dealer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('add');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi
        $validatedData = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:dealers',
            'location' => 'required',
            'body' => 'required',
            'author' => 'required',
            'published_at' => 'required'
        ]);
    
        // Simpan data ke dalam database
        Dealer::create($validatedData);
    
        // Kembali ke halaman dealers
        return redirect('/dealer');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */  public function show(Dealer $dealer)
    {
        //
        return view('detail_dealer', [
            'item' => $dealer
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dealer $dealer)
    {
        //
        return view('edit', [
            'edit' => $dealer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dealer $dealer)
    {
        //validasi
        $validateData = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:dealers',
            'location' => 'required',
            'body' => 'required',
            'author' => 'required',
            'published_at' => 'required'
        ]);

        $dealer->update($validateData);

        return redirect('/dealer');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dealer $dealer)
    {
        $dealer->delete();

        return redirect('/dealer')->with('pesan', 'Data  dihapus');
    }
}
