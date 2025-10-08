<?php

//Ejercicio 1.1 Perfil de Usuario

$nombre="Jose Luis";
$apellidos='Fernandez Cabeza';
$edad=22;
$altura=1.87;
$estudiante= true;

echo 'Nombre: '. $nombre .'<br>'.
     'Apellidos: '. $apellidos.'<br>'.
     'Edad: '.$edad.'<br>'.
     'Altura: '.$altura.'<br>'.
     'Es estudiante? '. $estudiante.'<br>'.'<hr>';


//Ejercicio 1.2 Informacion de un Producto

$nombre_producto='portatil';
$precio=759.99;
$stock='SI hay';
$oferta=true;

echo 'Nombre: '. $nombre_producto .'<br>'.
    'Precio: '. $precio.'<br>'.
    'Stock: '.$stock.'<br>'.
    'Oferta? '.$oferta.'<br>'.'<hr>';

//Ejercicio 1.3: Constantes de la Aplicación
const nombre_sitio='Mi Tienda Online';
const version_app=1.0;
echo nombre_sitio.' '.version_app.'<br>'.'<hr>';

//Ejercicio 2.1: Calculadora Básica
$num1 = 10;
$num2 = 5;

echo 'Suma :'.$num1+$num2.'<br>';
echo 'Resta: '.$num1-$num2.'<br>';
echo 'Multiplicacion: '.$num1*$num2.'<br>';
echo 'Divisa: '.$num1/$num2.'<br>'.'<hr>';

//Ejercicio 2.2: Actualización de Stock
$stock=100;
$venta_stock=100-25;
$reabastecimiento=$venta_stock+50;

echo $venta_stock.'<br>';
echo $reabastecimiento.'<br>'.'<hr>';

//Ejercicio 2.3: Concatenación de Textos
$nombre_='Oskar?';
$apellido_='Calvo';
$curso='Desarrollo de Web wn Entorno Servidores';
$fraseCompleta='Hola soy '.$nombre.' '.$apellido_.' y estudio '.$curso.'<hr>';
echo $fraseCompleta;

//Ejercicio 2.4: Comparaciones Simples
$edad_=20;
$edadminima=18;
var_dump($edad >= $edadminima);

$contraseñaGuardada = "1234";
$contraseñaUsuario = "123";
var_dump($contraseñaGuardada === $contraseñaUsuario);
echo '<hr>';

//Ejercicio 2.5: ¿Par o Impar?
$numero=7;
if($numero%2 == 0) {
    echo 'El numero es par';
}
else{
    echo 'El numero es impar';
}
echo '<hr>';

//Ejercicio 3.1: Control de Acceso
$edad2=17;
if($edad2>18) {
    echo 'Puede pasar';
}
else{
    echo 'No puede pasar';
}
echo '<hr>';

//Ejercicio 3.2: Calificación de Examen
$nota=7.5;
if($nota>=9) {
    echo 'Sobresaliente';
}
else if ($nota>=7 and $nota<8.9){
    echo 'Notable';
}
else if ($nota>=5 and $nota<6.9){
    echo 'Aprobado';
}
else{
    echo 'Suspenso';
}
echo '<hr>';

//Ejercicio  3.3: Menú del Día con switch
$diaSemana='Lunes';
 switch ($diaSemana) {
     case 'Lunes': echo 'Lentejas';
     break;
     case 'Martes': echo 'Paella';
     break;
     case 'Miercoles': echo 'Carne';
     break;
     case 'Jueves': echo 'Pescado';
     break;
     case 'Viernes': echo 'Pasta';
     break;
     case 'Sabado': echo 'Pizza';
     break;
     case 'Domingo': echo 'Carrillada';
     break;
 }
 echo '<hr>';

 //Ejercicio 3.4: Verificación de Usuario Avanzada
$rolUsuario = "admin";
$usuarioActivo = true;

if($usuarioActivo==true and $rolUsuario=="admin") {
    echo 'Acceso concedido';
}
else{
    echo 'Acceso denegado';
}
echo '<hr>';

//Ejercicio  4.1: Tabla de Multiplicar del 7

for($i=0 ; $i>10; $i++){
    echo 7*$i.'<br>';
}
echo '<hr>';

//Ejercicio 4.2: Cuenta Atrás para Año Nuevo
$cuenta=10;
while($cuenta!==0){
    echo $cuenta.'<br>';
    $cuenta--;
}
echo '¡Feliz Año Nuevo!';
echo '<hr>';

//Ejercicio 4.3: Recorrer Nombres
$alumnos = ["Ana", "Juan", "Pedro", "Sofía"];

foreach ($alumnos as $alumno2) {
    echo 'Hola '.$alumno2.'<br>';
}
echo '<hr>';

//Ejercicio  4.4: Listado de Productos
$productos = [
    ["nombre" => "Teclado", "precio" => 50],
    ["nombre" => "Ratón", "precio" => 25],
    ["nombre" => "Monitor", "precio" => 200]
];
foreach ($productos as $producto) {
    echo 'Producto: '.$producto["nombre"].' Precio: '.$producto['precio'].'<br>';
}
echo '<hr>';

//Ejercicio 5.1: Ficha de Usuario
$usuario= ['Nombre'=> 'Jose Luis','edad' => '22', 'email' => 'jseluifer@gmail.com', 'estudiante' => true];

echo $usuario['email'];
echo '<hr>';

//Ejercicio 5.2: Filtrado de Notas
$notas = [8.5, 4.2, 7.0, 9.8, 5.5, 3.9];
foreach ($notas as $nota) {
    if ($nota>=5) {
        echo 'Nota: '.$nota.'<br>';
    }
}
echo '<hr>';

//Ejercicio 5.3: Lista de la Compra Avanzada
$listaCompra = [
    "Frutas" => ["Manzanas", "Plátanos", "Naranjas"],
    "Lácteos" => ["Leche", "Queso"],
    "Limpieza" => ["Detergente", "Lejía"]
];

foreach ($listaCompra as $lista) {
    echo 'Lista: '.$lista[0].'<br>';
    foreach ($lista as $producto) {
        echo 'Producto: '.$producto.'<br>';
    }
}
echo '<hr>';

//Ejercicio  5.4: Calculando el Total del Carrito

$productos = [
    ["nombre" => "Teclado", "precio" => 50],
    ["nombre" => "Ratón", "precio" => 25],
    ["nombre" => "Monitor", "precio" => 200]
];
$total=0;
foreach ($productos as $producto) {
    $total+=$producto["precio"];
}
echo $total;
echo '<hr>';