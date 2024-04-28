<!DOCTYPE html>
<html>
<head>
    <title>Incluir nuevo empleado</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


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


     
     div.comicGreen {
       font-family: Verdana, Geneva, sans-serif;
       border: 2px solid #4F7849;
       background-color: #EEEEEE;
       width: 100%;
       text-align: left;
       border-collapse: collapse;
     }
     .divTable.comicGreen .divTableCell, .divTable.comicGreen .divTableHead {
       border: 1px solid #4F7849;
       padding: 1px 6px;
     }
     .divTable.comicGreen .divTableBody .divTableCell {
       font-size: 10px;
       color: #4F7849;
     }
     .divTable.comicGreen .divTableRow:nth-child(even) {
       background: #CEE0CC;
     }
     .divTable.comicGreen .divTableHeading {
       background: #4F7849;
       background: -moz-linear-gradient(top, #7b9a76 0%, #60855b 66%, #4F7849 100%);
       background: -webkit-linear-gradient(top, #7b9a76 0%, #60855b 66%, #4F7849 100%);
       background: linear-gradient(to bottom, #7b9a76 0%, #60855b 66%, #4F7849 100%);
       border-bottom: 1px solid #444444;
     }
     .divTable.comicGreen .divTableHeading .divTableHead {
       font-size: 12px;
       font-weight: bold;
       color: #FFFFFF;
       text-align: left;
       border-left: 2px solid #D0E4F5;
     }
     .divTable.comicGreen .divTableHeading .divTableHead:first-child {
       border-left: none;
     }

     .comicGreen .tableFootStyle {
       font-size: 21px;
     }
     /* DivTable.com */
     .divTable{ display: table; }
     .divTableRow { display: table-row; }
     .divTableHeading { display: table-header-group;}
     .divTableCell, .divTableHead { display: table-cell;}
     .divTableHeading { display: table-header-group;}
     .divTableFoot { display: table-footer-group;}
     .divTableBody { display: table-row-group;}
  </style>  

</head>
<body>
 <div class="container mt-1">
    <div class="comicGreen">
      <div>
        <center><h5><b>Incluir nuevo empleado</b></h5><hr/></center>
        
      </div>
      <div class="card-body">


        <form name="employee-form" id="employee-form" method="post" action="/display">
         @csrf
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required="" maxlength="20" title="Por favor introducir solo letras mayusculas y maximo 20 caracteres" pattern="[A-Z]{1,20}" size=22>

            <label for="primer_apellido">Primer Apellido</label>
            <input type="text" id="primer_apellido" name="primer_apellido" class="form-control" required="" maxlength="20" title="Por favor introducir solo letras mayusculas y maximo 20 caracteres" pattern="[A-Z]{1,20}">

            <label for="segundo_apellido">Segundo Apellido</label>
            <input type="text" id="segundo_apellido" name="segundo_apellido" class="form-control" required="" maxlength="20" title="Por favor introducir solo letras mayusculas y maximo 20 caracteres" pattern="[A-Z]{1,20}">

            <label for="num_identificacion">Identificacion</label>
            <input type="text" id="num_identificacion" name="num_identificacion" class="form-control" required="">
            <br/>
            <select name="pais_empleo" class="form-control" required="">
                <option value="">Seleccione pais</option>
                <option value="Colombia">Colombia</option>
                <option value="USA">USA</option>
            </select>
            <br/>
            <select name="tipo_identificacion" class="form-control" required="">
                <option value="">Seleccione tipo de identificacion</option>
                <option value="Cedula">Cedula</option>
                <option value="Pasaporte">Pasaporte</option>
            </select>
            <br/>

            <select name="area" class="form-control" required="">
                <option value="">Seleccione Area</option>
                <option value="Financiera">Financiera</option>
                <option value="Infraestructura">Infraestructura</option>
                <option value="Ventas">Ventas</option>
                <option value="Compras">Compras</option>
            </select>

          </div>
          <!-- Add other fields similarly -->
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

       
      </div>
    </div>
   <center><br/><a href="/">Regresar</a></center>
 </div>  
</body>
</html>
