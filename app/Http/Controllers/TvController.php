<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Television;
use App\Models\Type;
use Illuminate\Support\Facades\DB;

class TvController extends Controller
{
    public function addTv() {


        $televisions = DB::table( "televisions" )
        ->join( "types", "types.id", "=", "televisions.type_id")->get();

        return view( "/addTv" );
    }

    public function store(Request $request){
        $television = new Television;
        $type = new Type;

        $television->name = $request->name;
        $television->size = $request->size;
        $type->type = $request->type;

        $television->save();
        $type->save();

        return redirect( "/" );
    }

}

