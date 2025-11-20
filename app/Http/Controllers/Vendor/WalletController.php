<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index(){
        $wallet = auth()->user()->wallet;
        return view('user.wallet.index',compact('wallet'));
    }
}
