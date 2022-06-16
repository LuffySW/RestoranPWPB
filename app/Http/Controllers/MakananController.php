<?php

namespace App\Http\Controllers;

use App\Models\makanan;
use App\Http\Requests\StoremakananRequest;
use App\Http\Requests\UpdatemakananRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\all;

use function GuzzleHttp\Promise\all;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $makanan = DB::table('makanan')->where('nama','like',"%".$search."%")->paginate();

        return view('/list',['makanan' => $makanan]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremakananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $makanan= $request->all();
        makanan::create([
            'nama'=>request('nama'),
            'image'=>$request->file('image')->store('post-image'),
            'harga'=>request('harga')
        ]);
//         if (request()->imagefile->move(public_path('../../public_html/destination'), $makanan))
//      echo "Yap";
// else echo "Nop";

        return redirect('/list')->with('success','berhasil input menu baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function show(makanan $id)
    {
        $makanan=makanan::find($id);

        return view('detail',['makanan'=>$makanan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function edit(makanan $id)
    {
        $makanan=makanan::find($id);
        return view('edit',['makanan'=>$makanan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemakananRequest  $request
     * @param  \App\Models\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        makanan::find($id)->update( [
            'nama'=>request('nama'),
            // "image"=>$request->file('image')->store('post-image'),
            "harga"=>request('harga'),
            ]);

        return redirect('/list')->with("success","berhasil memperbaharui data");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(makanan $id)
    {
        $makanan = makanan::find($id);
        $makanan->each->delete();
        return redirect("/list");
    }
}
