<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Http\Requests\CrearProductoRequest;
use App\Http\Requests\ActualizarProductoRequest;

use DB;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearProductoRequest $request)
    {

        Producto::create($request->all());

        return view('registro')->with('Mensaje', 'Producto Registrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if($request->ajax()){
            $query = $request->get('query');
            if($query != ''){
                $data = DB::table('productos')
                        ->where('id', 'like', '%'.$query.'%')
                        ->orwhere('nombre', 'like', '%'.$query.'%')
                        ->orwhere('dato3', 'like', '%'.$query.'%')
                        ->orwhere('dato4', 'like', '%'.$query.'%')
                        ->orwhere('dato5', 'like', '%'.$query.'%')
                        ->orwhere('dato6', 'like', '%'.$query.'%')
                        ->orwhere('dato7', 'like', '%'.$query.'%')
                        ->orwhere('dato8', 'like', '%'.$query.'%')
                        ->get();
            }
            else{
                $data = DB::table('productos')
                        ->orderBy('id')->get();
            }
            $total_row = $data->count();
            $output = '';
            if($total_row > 0){
                foreach($data as $row){
                    $output .= '
                    <tr>
                    <td>'.$row->id.'</td>
                    <td>'.$row->nombre.'</td>
                    <td>'.$row->dato3.'</td>
                    <td>'.$row->dato4.'</td>
                    <td>'.$row->dato5.'</td>
                    <td>'.$row->dato6.'</td>
                    <td>'.$row->dato7.'</td>
                    <td>'.$row->dato8.'</td>
                    <td>
                    <a href="/update'.$row->id.'" class="btn btn-primary" onclick="return confirm(\'Editar: '.$row->nombre.'\')"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="/datos/'.$row->id.'/destroy" class="btn btn-danger" onclick="return confirm(\'¿Seguro que deseas eliminar: '.$row->nombre.'\')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>


                    </td>

                    </tr>';
                }
            }
            else{
                $output = '<tr><td align="center" colspan="8">No Hay Resultados</td></tr>';
            }
            $data = array('table_data' => $output, 'total_data' => $total_row);
            echo json_encode($data);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function inicio()
    {
        return view('welcome');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    public function editar($id){
        $datosEdit = Producto::find($id);
        return view('editar')->with('datos', $datosEdit);
    }

    public function actualizar(ActualizarProductoRequest $request, $id){
        $editar = Producto::find($id);
        if ($editar->nombre == $request->nombre) {
            $editar->dato3 = $request->dato3;
            $editar->dato4 = $request->dato4;
            $editar->dato5 = $request->dato5;
            $editar->dato6 = $request->dato6;
            $editar->dato7 = $request->dato7;
            $editar->dato8 = $request->dato8;
            $editar->save();
            return redirect()->route('principal');
        }else{
            $registro = Producto::where('nombre',$request->nombre)->get();
            $row =$registro->count();

            if ($row) {

                return 'ya existe : '.$row;

            }else{
                $editar->nombre = $request->nombre;
                $editar->dato3 = $request->dato3;
                $editar->dato4 = $request->dato4;
                $editar->dato5 = $request->dato5;
                $editar->dato6 = $request->dato6;
                $editar->dato7 = $request->dato7;
                $editar->dato8 = $request->dato8;
                $editar->save();
                return redirect()->route('principal');
            }

        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Producto::find($id);
        $articulo->delete();
        return redirect()->route('principal');
    }
    public function imprimir(){
        return view('imprimir');
    }
}
