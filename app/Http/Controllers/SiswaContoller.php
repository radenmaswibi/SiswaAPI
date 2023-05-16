<?php

namespace App\Http\Controllers;

use App\Helpers\formatAPI;
use App\Models\Siswa;
use Exception;
use Illuminate\Http\Request;

class SiswaContoller extends Controller
{
    public function index()
    {
        $data = Siswa::all();

        if($data){
            return formatAPI::createAPI(200, 'Succes', $data);
        }else{
            return formatAPI::createAPI(400, 'Failed');
        }
    }


    public function store(request $request)
    {
        try{
            $siswa = Siswa::create($request->all());
            $data = Siswa::where('id_siswa','=', $siswa->id_siswa)->get();

            if($data){
                return formatAPI::createAPI(200, 'Succes', $data);
            }else{
                return formatAPI::createAPI(400, 'Failed');
            }

        }catch(Exception $error){
            return formatAPI::createAPI(400, 'Failed', $error);
        }
    }

    public function show($id_siswa)
    {
        try{
            $data = Siswa::where('id_siswa','=', $id_siswa)->first();
            if($data){
                return formatAPI::createAPI(200, 'Succes', $data);
            }else{
                return formatAPI::createAPI(400, 'Failed');
            }
        }catch(Exception $error){
            return formatAPI::createAPI(400, 'Failed', $error);
        }
    }
}
