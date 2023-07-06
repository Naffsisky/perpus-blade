<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Auth;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $batas = 10;
        $jumlah_user = User::orderBy('id', 'desc')->paginate($batas);
        $no = $batas * ($jumlah_user->currentPage() - 1);
        return view('page.anggota', compact('jumlah_user', 'no'));
    }
}
