<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transaction;

class TransactionController extends Controller
{

    public function get($id)
    {
        $product = Transaction::with('details.product')->find($id);
        if($product)
        {
            return ResponseFormatter::success($product, 'Data product berhasil di ambil');
        }
        return ResponseFormatter::error(null, 'Data gagal di abmil', 404);
    }
}
