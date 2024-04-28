<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Exception;

class PageController extends Controller
{
    public function home()
    {
   
        return view('home');
    }

    public function form()
    {
  
        return view('form');
    }

 


   public function display(Request $request)
    {

      // Validate the request data
      $request->validate([
          'nombre' => 'required',
          'primer_apellido' => 'required',
          'segundo_apellido' => 'required',
          'num_identificacion' => 'required',
          'pais_empleo' => 'required',
          'tipo_identificacion' => 'required',
          'area' => 'required',
      ]);

      // Extract the data from the request
      $nombre = $request->input('nombre');
      $primer_apellido = $request->input('primer_apellido');
      $segundo_apellido = $request->input('segundo_apellido');
      $num_identificacion = $request->input('num_identificacion');
      $pais_empleo = $request->input('pais_empleo');
      $tipo_identificacion = $request->input('tipo_identificacion');
      $area = $request->input('area');

      //compose mail
      $domain = "global.com.us";
      if ($pais_empleo == "Colombia") { $domain = "global.com.co"; }
      $correo = $nombre . $primer_apellido . "@" . $domain;

     
      //sucess valitation and prepate data
      $payload = [
          "primer_apellido" =>  $primer_apellido,
          "segundo_apellido" => $segundo_apellido,
          "nombre" => $nombre,
          "otros_nombres" => "1",
          "pais_empleo" => $pais_empleo,
          "tipo_identificacion" => $tipo_identificacion,
          "num_identificacion" => $num_identificacion,
          "correo" => str_replace(' ', '', $correo),
          "fecha_ingreso" => date('d/m/Y H:i:s', time()),
          "area" => $area,
          "estado" => "ACTIVO",
          "fecha_registro" => date('d/m/Y H:i:s', time())
      ];


      //SEND DATA TO API
      try {
      $url = 'https://dbemployes-54f9.restdb.io/rest/db-employes-registry';
      $response = Http::withHeaders(['Content-Type' => 'application/json', 'x-apikey' => '032e4124d23aa6ef0568145ebbd3aefc1bff9'])->post($url, $payload);



      

      // Check the response
      if ($response->successful()) {
          // The request was successful
          $responseData = $response->json();

         echo date('d/m/Y H:i:s', time());
         echo "<br/>Registro guardado OK";
          // Process the response data as needed
      } else {
          // Handle the error
          $errorMessage = $response->body();
        echo "Error: " . $errorMessage;
         
      }
        } catch (Exception $e) {
            if ($e->getCode() == 001) {
                // Handle the exception with code 001 here
                echo "An error occurred: " . $e->getMessage();
            }
        }

      //confirmation
        return view('display', ['data' => $request->all()]);
         
    }
}
