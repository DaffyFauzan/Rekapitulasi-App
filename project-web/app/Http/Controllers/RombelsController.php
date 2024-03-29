<?php

namespace App\Http\Controllers;

use App\Models\Rombels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RombelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        $rombel = Rombels::all();
        return view('rombel.index', compact('rombel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //menampilkan layouting html pada folder resources-views
        return view('rombel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rombel' => 'required',
        ]);

        Rombels::create([
            'rombel' => $request->rombel,
            // 'password' => bcrypt(substr('name', 0, 3) . substr('email', 0, 3)),

        ]);

        // atau jika seluruh data input akan dimasukkan langsung ke db bisa dengan perintah Rombels::create($request->all());

        return redirect()->back()->with('success', 'Berhasil menambahkan data Rombels!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rombels $rombel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $rombel = Rombels::find($id);

        //atau $rombel = Rombels::where('id', $id)->first()

        return view('rombel.edit', compact('rombel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {

        if ($request->password == '') {
            Rombels::where('id', $id)->update([
                'rombel' => $request->rombel,
            ]);
        } else {
            Rombels::where('id', $id)->update([
                'rombel' => $request->rombel,
            ]);
        }

        return redirect()->route('rombel.home')->with('success', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Rombels::where('id', $id)->delete();

        return redirect()->back()->with('deleted', 'Berhasil menghapus data!');
    }

}
