<!DOCTYPE html>
<html>
  <head>
      <title>Consultar y actualizar</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
      
        body * {
            font-size: 0.6rem;
        }
    </style>

    <style>
      input[readonly] {
          background-color: #f0f0f0; /* Light gray background */
          color: #666; /* Darker text color */
          border: 1px solid #ccc; /* Light border */
      }
      </style>

 

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Koulen&family=Lato&family=Nunito&family=Playfair+Display:ital@1&family=Prata&family=Raleway:ital,wght@1,100&family=Roboto&family=Roboto+Condensed&family=Teko&display=swap');

    .btn{

    font-family: Roboto, sans-serif;
    font-weight: 0;
    font-size: 10px;
    color: #0d0d0d;
    background-color: #6DA564;
    padding: 8px 8px;
    border: none;
    box-shadow: rgba(0, 0, 0, 0.2) 0px 20px 30px;
    border-radius: 4px;
    transition : 1000ms;
    
    flex-direction: row;
    align-items: center;
    cursor: pointer;
    }

    .btn:hover{

    
   
    background-color: #fff;
    color: #0c0c0d;
    border: none;
    }






      table.comicGreen {
        font-family: Verdana, Geneva, sans-serif;
        border: 2px solid #4F7849;
        background-color: #EEEEEE;
        width: 100%;
        text-align: left;
        border-collapse: collapse;
      }
      table.comicGreen td, table.comicGreen th {
        border: 1px solid #4F7849;
        padding: 1px 6px;
      }
      table.comicGreen tbody td {
        font-size: 10px;
        color: #4F7849;
      }
      table.comicGreen tr:nth-child(even) {
        background: #CEE0CC;
      }
      table.comicGreen thead {
        background: #4F7849;
        background: -moz-linear-gradient(top, #7b9a76 0%, #60855b 66%, #4F7849 100%);
        background: -webkit-linear-gradient(top, #7b9a76 0%, #60855b 66%, #4F7849 100%);
        background: linear-gradient(to bottom, #7b9a76 0%, #60855b 66%, #4F7849 100%);
        border-bottom: 1px solid #444444;
      }
      table.comicGreen thead th {
        font-size: 12px;
        font-weight: bold;
        color: #FFFFFF;
        text-align: left;
        border-left: 2px solid #D0E4F5;
      }
      table.comicGreen thead th:first-child {
        border-left: none;
      }

      table.comicGreen tfoot td {
        font-size: 21px;
      }
    </style>  

 
  </head>
<body>
  <div>
  <div>

    <div>
      
    <table border="1" class="comicGreen">
        <thead>
            <tr>
                <th>Accion<br/></th>
                <th>ID</th>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                
             
                <th>Pais Empleo</th>
                <th>Tipo Ident.</th>
                <th>Num Ident.</th>
                <th>Correo</th>
                <th>Fecha Ingreso</th>
                <th>Area</th>
                <th>Estado</th>
                <th>Fecha Registro</th>
            </tr>
        </thead> 
      
      
        <tbody>
            @foreach($data as $item)
                <tr>
                  <td>
                    <form action="/display-registry" method="post">
                        @csrf
                        <button type="submit" class="btn">Cambiar</button>

                  </td>
                    <td>
                   
                    <input type="hidden" name="_id" value="{{ $item['_id'] }}">
                    <input type="text" name="id" value="{{ $item['id'] }}" size=5 readonly>
                    </td>
                    <td><input type="text" name="nombre"  value="{{ $item['nombre'] }}" required="" maxlength="20" title="Por favor introducir solo letras mayusculas y maximo 20 caracteres" pattern="[A-Z]{1,20}"></td>
                    <td><input type="text" name="primer_apellido" value="{{ $item['primer_apellido'] }}" required="" maxlength="20" title="Por favor introducir solo letras mayusculas y maximo 20 caracteres" pattern="[A-Z]{1,20}"></td>
                    <td><input type="text" name="segundo_apellido" value="{{ $item['segundo_apellido'] }}" required="" maxlength="20" title="Por favor introducir solo letras mayusculas y maximo 20 caracteres" pattern="[A-Z]{1,20}"></td>
                    
                 
                    <td><input type="text" name="pais_empleo" value="{{ $item['pais_empleo'] }}" size=9></td>
                    <td><input type="text" name="tipo_identificacion" value="{{ $item['tipo_identificacion'] }}" size=9></td>
                    <td><input type="text" name="num_identificacion" value="{{ $item['num_identificacion'] }}"></td>
                    <td><input type="text" name="correo" value="{{ $item['correo'] }}"  readonly></td>
                    <td><input type="text" name="fecha_ingreso" value="{{ $item['fecha_ingreso'] }}" size=19 readonly></td>
                    <td><input type="text" name="area" value="{{ $item['area'] }}" size=10></td>
                    <td><input type="text" name="estado" value="{{ $item['estado'] }}"  size=6 readonly></td>
                    <td><input type="text" name="fecha_registro" value="{{ $item['fecha_registro'] }}" size=19 readonly></td>
                       </form>
                 
                  
                </tr>
            @endforeach
        </tbody>
    </table>

       </div>
     <center><a href="/"><br/>Regresar</a></center>
</body>
</html>