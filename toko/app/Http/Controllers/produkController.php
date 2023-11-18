<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexKatalog()
    {
     $datas = produk::all();
    //  dd($datas);
        return view('welcome', compact(
            'datas'
        ));
    }
    public function index()
    {
     $datas = produk::all();
    //  dd($datas);
        return view('produk.index', compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new produk;
        return view('produk.create',compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asu = $request->file('gambar');
        $fileasu = date('y-m-d'). $asu->getClientOriginalName();
        $path = 'image/'.$fileasu;

        Storage::disk('public')->put($path, file_get_contents($asu));

        $model = new produk;
        $model->nama = $request->name;
        $model->stock = $request->stock;
        $model->harga = $request->harga;
        $model->gambar = $path;
        $model->save();
        return redirect()->route('produk.index');
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
        $model = produk::find($id);
        return view('produk.edit',compact(
            'model'
        ));
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
        $model = produk::find($id);
        $model->nama = $request->nama;
        $model->stock = $request->stock;
        $model->harga = $request->harga;
        $model->save();

        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.index');   
    }
}
