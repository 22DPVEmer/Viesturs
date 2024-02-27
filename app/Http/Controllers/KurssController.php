<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurss;

class KurssController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nosaukums' => 'required|string',
            'teksts' => 'required|string',
            'banner_url' => 'required|string',
            'cilveku_skaits' => 'required|integer',
        ]);

        $kurss = Kurss::create($validatedData);

        return response()->json($kurss, 201);
    }

    public function index()
    {
        $kursses = Kurss::all();

        return response()->json($kursses, 200);
    }
}
