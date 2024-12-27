<?php

namespace App\Http\Controllers;

use App\Models\Rendeles;
use Illuminate\Http\Request;

class RendelesController extends Controller
{
    public function show($pohar_id, $termek_id)
    {
        $rendeles = Rendeles::where('pohar_id', $pohar_id)
        ->where('termek_id', $termek_id)
        ->get();
        return $rendeles[0];
    }

    public function store(Request $request)
    {
        $record = new Rendeles();
        $record->fill($request->all());
        $record->save();
    }

    public function update(Request $request, $pohar_id, $termek_id)
    {
        $record = $this->show($pohar_id, $termek_id);
        $record->fill($request->all());
        $record->save();
    }

    public function destroy($pohar_id, $termek_id)
    {
        $this->show($pohar_id, $termek_id)->delete();
    }


}
