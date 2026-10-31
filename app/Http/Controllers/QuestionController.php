<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // 1. Validasi Data
        $request->validate([
            'nama'       => 'required|min:5',
            'email'      => ['required', 'email'],
            'pertanyaan' => 'required|min:10|max:300',
        ], [
            'nama.required'       => 'Nama tidak boleh kosong',
            'email.email'         => 'Email Tidak valid',
            'pertanyaan.required' => 'Pertanyaan tidak boleh kosong',
        ]);

        // 2. Simpan Data ke Array
        $data = [
            'nama'       => $request->nama,
            'email'      => $request->email,
            'pertanyaan' => $request->pertanyaan,
        ];

        // 3. Redirect ke halaman respon membawa session (mencegah form resubmission)
        return redirect()->route('question.respon')->with('dataRespon', $data);
    }
    public function respon()
    {
        // Ambil data dari session 'dataRespon'
        $dataRespon = session('dataRespon');

        // Jika halaman di-refresh langsung tanpa submit form, kembalikan ke home
        if (!$dataRespon) {
            return redirect()->route('question.create');
        }

        return view('home-question-respon', $dataRespon);
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
