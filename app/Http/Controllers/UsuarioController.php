<?php

namespace App\Http\Controllers;

use App\Usuario;
use DB;
use Excel;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('carga');
    }

 

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function downloadExcel($type)

    {

        $data = Usuario::get()->toArray();

        return Excel::create('export', function($excel) use ($data) {

            $excel->sheet('DATOS', function($sheet) use ($data)

            {

                $sheet->fromArray($data);

            });

        })->download($type);

    }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function importExcel(Request $request)

    {

        $request->validate([

            'ruta' => 'required'

        ]);

 

        $path = $request->file('ruta')->getRealPath();

        $data = Excel::load($path)->get();

 

        if($data->count()){

            foreach ($data as $key => $value) {

                // echo "<pre>";print_r($data);die();
                $arr[] = [
                    'apellido' => $value->apellido,
                    'nombre' => $value->nombre,
                    'genero' => $value->genero,
                    'fecha_nacimiento' => $value->fecha_nacimiento,
                    'dni' => $value->dni,
                    'localidad' => $value->localidad,
                    'barrio' => $value->barrio,
                    'calle' => $value->calle,
                    'numero' => $value->numero,
                    'mail' => $value->mail,
                    'telefono' => $value->telefono,
                    'celular' => $value->celular,
                    'origen' => $value->origen,
                    'observaciones' => $value->observaciones,
                    'creado' => $value->creado,
                    'ultima_modificacion' => $value->ultima_modificacion,

                ];

            }

 

            if(!empty($arr)){

                Usuario::insert($arr);

            }

        }

 

        return back()->with('success', 'Datos ingresados correctamente.');

    }

    public function list()
    {
     
        $usuarios = Usuario::oldest(Usuario::CREATED_AT)->get();

        return view('list', compact('usuarios'));
    
    }

    public function create()
    {
        
        return view('usuarios.alta');
    
    }

    public function store()
    {
        
		$usuario = request()->validate([
			'nombre' => 'required',
			'apellido' => 'required',
			'genero' => 'required',
			'fecha_nacimiento' => 'required',
			'dni' => 'required',
			'localidad' => 'required',
			'barrio' => 'required',
			'calle' => 'required',
			'numero' => 'required',
			'mail' => 'required',
			'telefono' => 'required',
			'celular' => 'required',
			'origen' => 'required',
			'observaciones' => 'nullable'
		]);

		Usuario::create($usuario);

        return back()->with('success', 'Datos ingresados correctamente.');
    
    }    

}
