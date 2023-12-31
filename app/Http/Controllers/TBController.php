<?php

namespace App\Http\Controllers;

use App\Models\Tokobunga;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class TBController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $bunga = Tokobunga::get();
        return view("admin.dashmin", compact("bunga"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.store');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'namabunga' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required'
        ]);

        $gbr = $request->file('gambar');
        $filename = date('Y-m-d') . $gbr->getClientOriginalName();
        $path = 'image/' . $filename;

        Storage::disk('public')->put($path, file_get_contents($gbr));


        Tokobunga::create([
            'namabunga' => $request->namabunga,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar' => $filename,
        ]);
        return redirect()->route('tambah')->with(['success', 'Berhasil Ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function edit($id): View
    {
        $bunga = Tokobunga::findOrFail($id);
        return view('admin.edit', compact('bunga'));
    }

    public function update(Request $request, $id): RedirectResponse
    {

        $this->validate($request, [
            'namabunga' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $bunga = Tokobunga::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gbr = $request->file('gambar');
            $filename = date('Y-m-d') . $gbr->getClientOriginalName();
            $path = 'image/' . $filename;

            Storage::disk('public')->put($path, file_get_contents($gbr));
            Storage::disk('public')->delete('image/' . $bunga->gambar);

            $bunga->update([
                'namabunga' => $request->namabunga,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'gambar' => $filename,
            ]);
        }
        $bunga->update([
            'namabunga' => $request->namabunga,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('tambah')->with('success', 'Berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $data = Tokobunga::findOrFail($id);
        $data->delete();
        return redirect()->route('tambah')->with('success', 'Berhasil dihapus');
    }

    public function home(): View
    {
        $bunga = Tokobunga::all();
        return view("home", compact("bunga"));
    }


    public function product(): View
    {
        $bunga = Tokobunga::get();
        return view("produk", compact("bunga"));
    }
}
