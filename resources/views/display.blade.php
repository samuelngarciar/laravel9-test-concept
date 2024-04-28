<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirmacion</title>

  <style> 

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

   <br/><br/>
  <table border="1" class="comicGreen">
   
  <thead>
      <tr>
          <th>Nombre</th>
          <th>Primer apellido</th>
          <th>Segundo apellido</th>
          <th>Num identificacion</th>
          <th>Tipo identificacion</th>
          <th>Pais de empleo</th>

          <th>Area</th>
 
      </tr>
  </thead> 


  <tbody>     
          <tr>
            <td>
               <p> {{ $data['nombre'] }}</p>
            </td>
            <td>
              <p> {{ $data['primer_apellido'] }}</p>
            </td>
            <td>
               <p> {{ $data['segundo_apellido'] }}</p>
            </td>
            <td>
              <p> {{ $data['num_identificacion'] }}</p>
            </td>
            <td>
              <p> {{ $data['pais_empleo'] }}</p>
            </td>
            <td>
               <p> {{ $data['tipo_identificacion'] }}</p>
            </td>

            <td>
               <p> {{ $data['area'] }}</p>
            </td>

            </tr>
     </tbody> 
    </table>

 

 
  

 
  <br/>

<center>
  <a href="/form">Regresar</a>
  </center>
  
</body>
</html>