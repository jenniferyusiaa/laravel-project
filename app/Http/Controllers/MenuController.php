<?php

namespace App\Http\Controllers;

use App\Models\Menu; // Ensure your model namespace is correct
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::orderBy('id', 'ASC')->get(); // Fetch all menus
        return view('menu.index', compact('menus')); // Pass data to view
    }

    // Show the create menu form
    public function create()
    {
        return view('menu.create');
    }

    // Store the new menu
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'kode_makanan' => 'required|unique:menus|max:255',
            'nama_makanan' => 'required|max:255',
            'rincian' => 'nullable|max:500',
            'harga' => 'required|numeric|min:0',
        ]);

        // Create a new menu
        Menu::create([
            'kode_makanan' => $request->kode_makanan,
            'nama_makanan' => $request->nama_makanan,
            'rincian' => $request->rincian,
            'harga' => $request->harga,
        ]);

        // Redirect to the menu list with a success message
        return redirect()->route('menus.index')->with('success', 'Menu created successfully.');
    }
}
