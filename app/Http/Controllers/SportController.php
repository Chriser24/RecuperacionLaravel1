<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
    public function index()
    {
        return Sport::get();

    }
    public function create(Request $request)
    {
        try{
            $request->validate([
                'name'=> 'required|string',
                'description' => 'required|string'
            ]);
        }catch(\Illuminate\Validation\ValidationException $e){
            return response()->json(['error' => $e->getMessage()], 400);
        }

        $sport = Sport::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return $sport;
    }

    public function show(Int $id)
    {
        
        $sport=Sport::find($id);
        return response()->json($sport);
    }

    public function update(Request $request, Int $id)
    {
        try{
            $request->validate([
                'name'=> 'string',
                'description' => 'required|string'
            ]);
            $sport=Sport::findOrFail($id);
            $sport->name=$request->name;
            $sport->description=$request->description;
            $sport->save();
        }catch(\Illuminate\Validation\ValidationException $e){
            return response()->json(['error' => $e->getMessage()], 400);
        }

        return $sport;
    }
    public function destroy(Int $id)
    {
        $sport = Sport::findOrFail($id);
        $sport->delete();

        return 'eliminado con exito';
    }
}
