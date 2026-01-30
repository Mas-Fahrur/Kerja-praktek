<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{

    public function showDashboard()
    {
        // ambil seluruh data menu
        $jumlahSemuaMenu = Menu::count();

        $menuMakanan = Menu::where('menu_id', 'like', 'MK%')->count();
        $menuMinuman = Menu::where('menu_id', 'like', 'MN%')->count();
        $menuLainnya = Menu::where('menu_id', 'like', 'ML%')->count();

        return view('admin.dashboard', compact('jumlahSemuaMenu', 'menuMakanan', 'menuMinuman', 'menuLainnya'));
    }

    // nampilin halaman daftar makanan
    public function showHalamanMakanan()
    {
        // ambil seluruh data makanan
        $daftarMakanan = Menu::where('menu_id', 'like', 'MK%')
            ->get();

        return view('admin.daftar-makanan',  compact('daftarMakanan'));
    }

    // nampilin halaman daftar minuman
    public function showHalamanMinuman()
    {
        // ambil seluruh data makanan
        $daftarMinuman = Menu::where('menu_id', 'like', 'MN%')
            ->get();

        return view('admin.daftar-minuman',  compact('daftarMinuman'));
    }

    // nampilin halaman daftar lain-lain
    public function showHalamanLainnya()
    {
        // ambil seluruh data makanan
        $daftarLain = Menu::where('menu_id', 'like', 'ML%')
            ->get();

        return view('admin.daftar-lain',  compact('daftarLain'));
    }

    public function ShowHalamanTambahMenu()
    {
        return view('admin.form-menu');
    }

    // add menu makan/minum baru
    public function addMenu(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'id-menu' => [
                'required',
                'string',
                'regex:/^(MK|MN|ML)[0-9]+$/',
                'unique:menu,menu_id'
            ],
            'nama-menu' => 'required|string|unique:menu,nama_menu',
            'harga-menu' => 'numeric|required',
            'gambar-menu' => 'file|mimes:jpg,jpeg,png|max:3072|required'
        ], [
            'id-menu.regex' => 'ID Menu harus diawali MK, MN, atau ML dan diikuti angka. Contoh: MK01'
        ]);

        // upload gambar
        $namaGambar = $validated['gambar-menu']->getClientOriginalName();
        $validated['gambar-menu']->move(public_path('images'), $namaGambar);

        Menu::create([
            'menu_id' => $validated['id-menu'],
            'nama_menu' => $validated['nama-menu'],
            'harga' => $validated['harga-menu'],
            'gambar' => $namaGambar
        ]);

        return back()->with('success', 'Menu Berhasil DItambahkan');
    }

    // nampilin daftar menu ke katalog
    public function showMenuKatalog()
    {
        $menuMakanan = Menu::where('menu_id', 'like', 'MK%')->get();
        $menuMinuman = Menu::where('menu_id', 'like', 'MN%')->get();
        $menuLainnya = Menu::where('menu_id', 'like', 'ML%')->get();

        return view('menu', compact('menuMakanan', 'menuMinuman', 'menuLainnya'));
    }

    // hapus data
    public function deleteMenuMakanan($menuId){
        // cek
        $menuMakanan = Menu::findOrFail($menuId);
        $menuMakanan->delete();

        return back()->with('success', "Menu berhasil dihapus!");
    }
    
     public function deleteMenuMinuman($menuId){
        // cek
        $menuMinuman = Menu::findOrFail($menuId);
        $menuMinuman->delete();

        return back()->with('success', "Menu berhasil dihapus!");
    }

     public function deletelainnya($menuId){
        // cek
        $lainnya = Menu::findOrFail($menuId);
        $lainnya->delete();

        return back()->with('success', "Menu berhasil dihapus!");
    }

}
