<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Exception;

class EmployeeRegistryController extends Controller
{
  public function fetchData()
  {
      $url = 'https://dbemployes-54f9.restdb.io/rest/db-employes-registry';
     // $response = Http::get($url);

    $response = Http::withHeaders([
        'x-api-key' => '032e4124d23aa6ef0568145ebbd3aefc1bff9'
    ])->get($url);

      if ($response->successful()) {
          $data = $response->json();

        echo date('d/m/Y H:i:s', time());
        echo "<br/>Registros: " . count($data);
        
          return view('display-registry', ['data' => $data]);
      } else {
          // Handle the error
          return back()->withErrors('Failed to fetch data from the API.');
      }
  }


  public function update(Request $request)
  {
    $data = $request->all();


    // Extract the data from the request
    $_id = $request->input('_id');
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

 
    
      $url = 'https://dbemployes-54f9.restdb.io/rest/db-employes-registry/' . $_id;
      $response = Http::withHeaders(['Content-Type' => 'application/json',
          'x-api-key' => '032e4124d23aa6ef0568145ebbd3aefc1bff9'
      ])->put($url, $payload);

      if ($response->successful()) {
          // Handle successful update
        //return view('display-registry'); //fallo porque esta variable data es otra
      
        return $this->fetchData();
        //return view('display-registry', ['data' => $data]);
      } else {
          // Handle error
          return back()->withErrors('Failed to update employee.');
      }
  }
}
