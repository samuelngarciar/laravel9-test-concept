
## Prueba concepto - Laravel9 & Restdb.io
Introducción
Este repositorio contiene una aplicación web usada como prueba concepto "basico"; de un app administrador de empleados, las funciones elementales son realizadas son:
Crear nuevos empleados, Consultar todos los empleados previamente creados y modificar varios campos de cada empleado segun corresponda, adicionalmente
presenta algunas validaciones en los campos de entrada y una generación del correo electronico la cual es tomada del nombre y el apellido del usuario.

Desde el punto de vista tecnico el frontend y el controller fue elaborado sobre Laravel9 y la base de datos esta on cloud; esta es consumida mediante
llamadas Rest API.

## Instalación
#### Nota. debe tener instalado docker o docker desktop en su entorno
1. Clone este repositorio en su local: ```git clone https://github.com/samuelngarciar/laravel9-test-concept.git```
2. Entre en el directorio generado: ```cd laravel9-test-concept```
3. Compile la imagen docker: ```docker build -t laravelpruebac .```
4. Ejecute una instancia docker: ```docker run -d -p 8200:8000 laravelpruebac```
#### Nota confirme que su puerto "8200" este libre, de lo contrario use otro puerto disponible
5. Abra el navegador web de su preferencia y escriba: http://localhost:8200/
![image](https://github.com/samuelngarciar/laravel9-test-concept/assets/84947793/d63a9ff5-5a36-4182-af84-561be31a1e6a)

## Evidencias de uso
#### Nota. Los formularios solo les fue incluido las validaciones más basicas
1. Incluir a nuevo empleado:
![image](https://github.com/samuelngarciar/laravel9-test-concept/assets/84947793/681b45e6-821e-4d52-b20b-0d0555bec9a6)


1.1 Respuesta OK
![image](https://github.com/samuelngarciar/laravel9-test-concept/assets/84947793/fa0b6e3b-a8d8-4ff5-aec0-d2e1d99ffb19)

2. Consultar y actualizar
   ![image](https://github.com/samuelngarciar/laravel9-test-concept/assets/84947793/1e9defd5-acaa-4d79-b6c6-45645b760d94)
2.1 Validaciones de campos
   ![image](https://github.com/samuelngarciar/laravel9-test-concept/assets/84947793/2aa8c911-a469-4b55-90e3-34d4dd258fe6)


## Anexo - I
### Extructura de directorios para el codigo fuente
### Controllers
![image](https://github.com/samuelngarciar/laravel9-test-concept/assets/84947793/25139830-9388-4466-8c71-0d74304b2d0f)


### Views
![image](https://github.com/samuelngarciar/laravel9-test-concept/assets/84947793/bcab3dbc-e7d2-4c46-892b-d841d87980b5)


### Routes
![image](https://github.com/samuelngarciar/laravel9-test-concept/assets/84947793/faa96fa0-5046-40ef-9cb0-cd9f544b5e15)



## Anexo - II
### Evidencia de docker corriendo correctamente
![image](https://github.com/samuelngarciar/laravel9-test-concept/assets/84947793/67c51a36-05ac-47ef-a647-c816cda85bda)


## Anexo - III
### Evidencia de consultas REST API a la base de datos
![image](https://github.com/samuelngarciar/laravel9-test-concept/assets/84947793/1dba1a6c-3f36-477d-8b10-ea6847895919)











