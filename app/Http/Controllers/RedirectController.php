<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function showForm()
    {
        return view('forms.khusus');
    }

    public function submitForm(Request $request)
    {
        // Logika pemrosesan form
        return redirect()->back()->with('success', 'Form berhasil disubmit!');
    }
}
