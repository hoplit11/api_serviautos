<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistroAutos;

class Controler_registroAutos extends Controller{
    public function verClientes(){
        $dataAutos = RegistroAutos::all();  // la var. $dataAutos guarda todo los datos de la tabla RegistroAutos
        return response()->json($dataAutos); // Retorna una respuesta en formato json de los datos de la variable "$dataAutos"
    }    

    public function insertar(Request $request){

        $dataAutos = new RegistroAutos; //Instanciar la variable dataAutos$dataAutos

        $dataAutos->marca = $request->marca; /*Requiere la informacion guardada en "marca" desde postman y los guarda en la varribal marca que es el campo que esta en la tablaRegistroAutos base de datos  */
        $dataAutos->modelo = $request->modelo;
        $dataAutos->valor = $request->valor;


        $dataAutos->save(); /*Permite guardar la informacion */

        return response()->json($dataAutos);
       //'Los datos fueron almacenados correctamente', 

    }

     //Consultar registro especifico de la tabla

     public function consulta($id){ /*la funcion consulta recibe el parametro $id desde postman */
        $dataAutos = new RegistroAutos; //Instanciar

        $datoEncontrado = $dataAutos->find($id); // Dentro de $dataCliente encontrar lo que este guardado dentro de "$id"y guarda esa informacion en $datoEncontrado
        return response()->json($datoEncontrado);//Retornar en json la informacionalmacenada en "$datoEncontrado"
    }
    
    //eliminar registro especifico de la tabla

    public function eliminar($id){ /*la funcion consulta recibe el parametro $id desde postman */
        $dataAutos = RegistroAutos::find($id); //Instanciar

        $dataAutos->delete();
        
        return response()->json("El ".$id. " fue eliminado corectamente");//Retornar en json la informacionalmacenada en "$datoEncontrado"
    }

    //actualizar registro especifico de la tabla

    public function actualizar(Request $request, $id){ /*la funcion consulta recibe el parametro $id desde postman */
        
        $dataAutos = RegistroAutos::find($id); //Instanciar la variable dataAutos$dataAutos y buscar el registro con $id 
        
        $dataAutos->marca = $request->input('marca'); //Requiere la informacion guardada en "nombres" desde postman y los guarda en la varribal nombres que es el campo que esta en la tablaRegistroAutos base de datos 
        $dataAutos->modelo = $request->input('modelo');
        $dataAutos->valor = $request->input('valor');

        $dataAutos->save();  /*Permite guardar la informacion */

        return response()->json("Informacion actualizada");
       //'Los datos fueron almacenados correctamente', $dataAutos
    }
   
}