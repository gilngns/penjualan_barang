<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataproduk = Dashboard::paginate(5);
        return view('dashboard.dashboard', compact('dataproduk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:produk,nama|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
        ]);

        // Mengambil objek file foto dari request
        $foto = $request->file('foto');

        // Menyimpan nama file
        $namafile = time() . rand(100, 999) . "." . $foto->getClientOriginalExtension();

        // Memindahkan file yang diunggah ke direktori penyimpanan yang ditentukan
        $foto->move(public_path() . '/image/upload', $namafile);

        // Menyimpan data ke database dengan nama file yang baru dibuat
        Dashboard::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'foto' => $namafile, // Menyimpan nama file, bukan objek file itu sendiri
            'jumlah_tersedia' => $request->jumlah_tersedia
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Data Berhasil Ditambah');
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
        $dataproduk = Dashboard::where('id', $id)->first();
        return view('dashboard.edit', compact('dataproduk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataproduk = Dashboard::find($id);

        // Mengupdate atribut lainnya
        $dataproduk->nama = $request->nama;
        $dataproduk->deskripsi = $request->deskripsi;
        $dataproduk->harga = $request->harga;
        $dataproduk->jumlah_tersedia = $request->jumlah_tersedia;

        // Memeriksa apakah ada file foto yang diunggah
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');

            // Memastikan file adalah gambar yang valid
            if ($foto->isValid()) {
                // Mengambil nama file
                $namafile = time() . rand(100, 999) . '.' . $foto->getClientOriginalExtension();

                // Memindahkan file ke direktori penyimpanan yang ditentukan
                $foto->move(public_path() . '/image/upload', $namafile);

                // Hapus foto lama (jika ada)
                if ($dataproduk->foto) {
                    $oldFotoPath = public_path() . '/image/upload/' . $dataproduk->foto;
                    if (file_exists($oldFotoPath)) {
                        unlink($oldFotoPath);
                    }
                }

                // Mengupdate nama file pada atribut foto
                $dataproduk->foto = $namafile;
            }
        }
        
        // Simpan perubahan ke dalam database
        $dataproduk->save();

        // Redirect setelah menyimpan perubahan data
        return redirect()->route('dashboard.index');
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataproduk = Dashboard::find($id);
        $dataproduk->delete();

        return redirect()->route('dashboard.index');
    }
}
