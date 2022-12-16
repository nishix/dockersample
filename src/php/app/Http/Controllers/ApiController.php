<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Onigiri;


class ApiController extends Controller
{
    public function getAllOnigiris()
    {
        $Descriptions = Onigiri::get()->toJson(JSON_PRETTY_PRINT);
        return response($Descriptions, 200);
    }

    public function getOnigiri($id)
    {
        if (Onigiri::where('id', $id)->exists()) {
            $Description = Onigiri::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($Description, 200);
        } else {
            return response()->json([
                "message" => "Onigiri not found"
            ], 404);
        }
    }

}
