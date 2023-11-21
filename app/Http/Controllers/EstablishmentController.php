<?php

namespace App\Http\Controllers;

use App\Models\Establishment;
use Illuminate\Http\Request;

class EstablishmentController extends Controller
{
    public function index() {
        $establishments = Establishment::all();
        return view('establishments.index', compact('establishments'));
    }
    public function view($id) {
        $establishments = Establishment::findOrFail($id);
        return view('establishments.view', compact('establishments'));
    }
}
