<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Poli; // INGET DIGANTI

class PoliController extends Controller // INGET DIGANTI
{
  public function index()
  {
    $poliklinik = Poli::all();

    return view('poli/index', ['poliklinik' => $poliklinik]);
  }

  public function create()
  {
    return view('poli/create');
  }

  public function store(Request $request)
  {
    $this -> validate($request, [
      'nm_poli' => 'required',
      'lantai' => 'required|numeric',
    ],[
      'nm_poli.required' => 'Nama Poliklinik diperlukan.',
      'lantai.required' => 'Nomor lantai diperlukan.',
      'lantai.numeric' => 'Harus berupa angka.',
    ]);

    // $validate = $request -> validate();

    $poliklinik = new Poli;
    $poliklinik -> nm_poli = $request -> nm_poli;
    $poliklinik -> lantai = $request -> lantai;
    $poliklinik -> save();

    return redirect('/poli');
  }

  public function show($kd_poli)
  {
    $poliklinik = Poli::find($kd_poli);

    if(!$poliklinik)
      abort(404);

    return view('poli/single', ['poliklinik' => $poliklinik]);
  }

  public function edit($kd_poli)
  {
    $poliklinik = Poli::find($kd_poli);

    if(!$poliklinik)
      abort(404);

    return view('poli/update', ['poliklinik' => $poliklinik]);
  }

  public function update(Request $request, $kd_poli)
  {
    $this->validate($request, [
      'nm_poli' => 'required',
      'lantai' => 'required',
    ]);

    $poliklinik = Poli::find($kd_poli);

    $poliklinik -> nm_poli = $request -> nm_poli;
    $poliklinik -> lantai = $request -> lantai;
    $poliklinik -> save();

    return redirect('poli/');
  }

  public function delete($kd_poli)
  {
    $poliklinik = Poli::find($kd_poli);
    $poliklinik -> delete();
    return redirect('poli/');
  }
}
