<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanAdminController extends Controller
{
    public function index()
    {
        return view('admin.halaman-admin.index');
    }
    public function add()
    {
        return view('admin.halaman-admin.add');
    }
}
