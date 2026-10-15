<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'username' => 'Heroku',
            'last_login' => date('Y-m-d H:i:s'),
            // Data tambahan untuk simulasi perulangan dan kondisi Blade Directive
            'users' => [
                (object)['id' => 1, 'name' => 'Budi'],
                (object)['id' => 2, 'name' => 'Ani'],
                (object)['id' => 3, 'name' => 'Siti'],
            ],
            'records' => [1] // Digunakan untuk uji kondisi if-else
        ];

        return view('home', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
