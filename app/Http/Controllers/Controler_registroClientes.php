<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registroclientes;

class Controler_registroClientes extends Controller{
    public function verClientes(){
        $dataClientes = registroClientes::all();  // la var. $dataClientesguarda todo los datos de la tabla registroClientes
        return response()->json($dataClientes); // Retorna una respuesta en formato json de los datos de la variable "$dataClientes"
    }    

    public function insertar(Request $request){

        $dataClientes = new registroClientes; //Instanciar la variable dataClientes

        $dataClientes->correo = $request->correo; /*Requiere la informacion guardada en "correo" desde postman y los guarda en la varribal correo que es el campo que esta en la tablaregistroClientes base de datos  */
        $dataClientes->contraseña = $request->contraseña;
        $dataClientes->contraseña2 = $request->contraseña2;


        $dataClientes->save(); /*Permite guardar la informacion */

        return response()->json($dataClientes);
       //'Los datos fueron almacenados correctamente', 

    }

     //Consultar registro especifico de la tabla

     public function consulta($id){ /*la funcion consulta recibe el parametro $id desde postman */
        $dataClientes = new registroClientes; //Instanciar

        $datoEncontrado = $dataClientes->find($id); // Dentro de $dataCliente encontrar lo que este guardado dentro de "$id"y guarda esa informacion en $datoEncontrado
        return response()->json($datoEncontrado);//Retornar en json la informacionalmacenada en "$datoEncontrado"
    }
    
    //eliminar registro especifico de la tabla

    public function eliminar($id){ /*la funcion consulta recibe el parametro $id desde postman */
        $dataClientes = registroClientes::find($id); //Instanciar

        $dataClientes->delete();
        
        return response()->json("El ".$id. " fue eliminado corectamente");//Retornar en json la informacionalmacenada en "$datoEncontrado"
    }

    //actualizar registro especifico de la tabla

    public function actualizar(Request $request, $id){ /*la funcion consulta recibe el parametro $id desde postman */
        $dataClientes = new registroClientes; //Instanciar la variable dataClientes

        
        $dataClientes->nombres = $request->input('nombre'); //Requiere la informacion guardada en "nombres" desde postman y los guarda en la varribal nombres que es el campo que esta en la tablaregistroClientes base de datos 
        $dataClientes->apellidos = $request->input('apellidos');
        $dataClientes->telefono = $request->input('telefono');
        $dataClientes->correo = $request->input('correo');
        $dataClientes->foto = $request->input('foto');

        $dataClientes->save();  /*Permite guardar la informacion */

        return response()->json("Informacion actualizada");
       //'Los datos fueron almacenados correctamente', $dataClientes
    }
   

}