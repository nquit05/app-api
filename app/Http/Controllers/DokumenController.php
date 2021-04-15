<?php

namespace App\Http\Controllers;

use App\Models\DokumenModel;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class DokumenController extends Controller
{
    public function getDokumen()
    {
        $dokumen = DokumenModel::get();
        $response = [
            'message' => 'Data Dokumen Berhasil Di GET',
            'data' => $dokumen
        ];

        return response()->json($response, Response::HTTP_OK);
    }
}
