<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TvController extends Controller
{
    public function listTvs() {
        $televisions= DB::table( "televisions" )
        ->join( "types", "types.id", "=", "televisions.type_id")->get();
    }

    public function newTv(Request $request) {
        
    }

    public function getPerfumes() {
        
    }

    public function getPerfumes() {
        
    }

    public function getPerfumes() {
        
    }
}

