<?php

namespace App\Http\Controllers;

use App\Models\Rendeles_tetelek;
use Illuminate\Http\Request;

class RendelesTetelekController extends Controller
{
    public function show($pohar_id, $rendeles_azon)
    {
        return Rendeles_tetelek::where('pohar_id', $pohar_id)
            ->where('rendeles_azon', $rendeles_azon)
            ->first();
    }

    public function store(Request $request)
    {
        $record = new Rendeles_tetelek();
        $record->rendeles_azon = $request->rendeles_azon;
        $record->tetel_osszeg = $request->tetel_osszeg;
        $record->save();
    }

    public function update(Request $request, $pohar_id, $rendeles_azon)
    {
        $record = Rendeles_tetelek::where('pohar_id', $pohar_id)
            ->where('rendeles_azon', $rendeles_azon)
            ->first();

        $record->tetel_osszeg = $request->tetel_osszeg;
        $record->save();
    }

    public function destroy($pohar_id, $rendeles_azon)
    {
        Rendeles_tetelek::where('pohar_id', $pohar_id)
            ->where('rendeles_azon', $rendeles_azon)
            ->delete();
    }
}
