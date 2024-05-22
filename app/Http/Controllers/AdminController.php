<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function poling()
    {
        // Logika untuk menangani halaman polling
        // Misalnya, mengambil data polling dari database
        // $pollings = Polling::all();
        
        // Mengembalikan tampilan dengan data polling
        // return view('admin.polling', compact('pollings'));

        // Untuk contoh ini, kita akan kembalikan tampilan sederhana
        return view('admin.polling');
    }
    public function survei()
    {
        // Logika untuk menangani halaman polling
        // Misalnya, mengambil data polling dari database
        // $pollings = Polling::all();
        
        // Mengembalikan tampilan dengan data polling
        // return view('admin.polling', compact('pollings'));

        // Untuk contoh ini, kita akan kembalikan tampilan sederhana
        return view('admin.survei');
    }
    public function data_warga()
    {
        // Logika untuk menangani halaman polling
        // Misalnya, mengambil data polling dari database
        // $pollings = Polling::all();
        
        // Mengembalikan tampilan dengan data polling
        // return view('admin.polling', compact('pollings'));

        // Untuk contoh ini, kita akan kembalikan tampilan sederhana
        return view('admin.data_warga');
    }

    public function jadwal()
    {
        // Logika untuk menangani halaman polling
        // Misalnya, mengambil data polling dari database
        // $pollings = Polling::all();
        
        // Mengembalikan tampilan dengan data polling
        // return view('admin.polling', compact('pollings'));

        // Untuk contoh ini, kita akan kembalikan tampilan sederhana
        return view('admin.jadwal');
    }

    public function login()
    {
        // Logika untuk menangani halaman polling
        // Misalnya, mengambil data polling dari database
        // $pollings = Polling::all();
        
        // Mengembalikan tampilan dengan data polling
        // return view('admin.polling', compact('pollings'));

        // Untuk contoh ini, kita akan kembalikan tampilan sederhana
        return view('login');
    }
    public function register()
    {
        // Logika untuk menangani halaman polling
        // Misalnya, mengambil data polling dari database
        // $pollings = Polling::all();
        
        // Mengembalikan tampilan dengan data polling
        // return view('admin.polling', compact('pollings'));

        // Untuk contoh ini, kita akan kembalikan tampilan sederhana
        return view('register');
    }
}
