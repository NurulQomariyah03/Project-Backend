<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\biodata;
class BiodataController extends Controller
{
    //
    public function index(){
        # code...

        $biodata=biodata::all();

        $data=['biodata'=>$biodata];

        return $data;
    }

    public function create(Request $request){
        # code...
        $biodata=new biodata();
        $biodata->nama=$request->nama;
        $biodata->asal=$request->asal;
        $biodata->alamat=$request->alamat;
        $biodata->jabatan=$request->jabatan;
        $biodata->save();

        return " Data Tersimpan ";
    }

    public function update(Request $request, $id){
        # code...
        $biodata=biodata::find($id);
        $biodata->nama=$request->nama;
        $biodata->asal=$request->asal;
        $biodata->alamat=$request->alamat;
        $biodata->jabatan=$request->jabatan;
        $biodata->save();

        return " Data Terupdate";
    }

    public function delete($id){
        # code...
        $biodata=biodata::find($id);
        $biodata->delete();

        return " Data Terhapus ";
    }

    public function detail($id){
        # code...
        $biodata=biodata::find($id);

        return $biodata;
    }
}
