<?php
function cargar()
{
    $consultas = new Consultas();
$filas = $consultas ->cargarAlumnos();
echo "
<div class='container'>
    <div class= 'justify-content-center row'>
        <table class='table table-striped'>
            <tr>
                
                <th>Matricula Sita</th>
                <th>Email</th>
                <th>Nombre</th>
                <th>Apellido</th>
                
            </tr>";
            if(!$filas){
            echo "No has registrado ningun paciente";
            
            }else{
            foreach ($filas as $fila) {
                echo "<tr>";
                    echo "<td> ".$fila['nombre']. "</td>";
                    echo "<td> ".$fila['email'] ."</td>";
                    echo "<td> ".$fila['carrera']. "</td>";
                    echo "<td> ".$fila['matricula']. "</td>";
                    echo "<td class='badge badge-danger'><a class='text-white' href='Controlador/eliminar.php?nombre=".$fila['nombre']."'> Eliminar </td>";
                    echo "<td class='badge badge-secondary'><a class='text-white' href='modificar.php?nombre=".$fila['nombre']."'> Modificar </td>";
                echo "</tr>";
                
            }
        echo"</table>
        
    </div>
</div>";
}
}
function buscar($nombre){
    $consultas = new Consultas();
$filas = $consultas ->buscarAlumnos($nombre);

echo "
<div class='container'>
    <div class= 'justify-content-center row'>
        <table class='table table-striped'>
            <tr>
                
                <th>Matricula</th>
                <th>Email</th>
                <th>Nombre</th>
                <th>Apellido</th>
                
            </tr>";
            
            if(isset($filas))
            {
            foreach ($filas as $fila)
            {
                echo "<tr>";
                    echo "<td> ".$fila['nombre']. "</td>";
                    echo "<td> ".$fila['email'] ."</td>";
                    echo "<td> ".$fila['carrera']. "</td>";
                    echo "<td> ".$fila['matricula']. "</td>";
                    echo "<td class='badge badge-danger'><a class='text-white' href='Controlador/eliminar.php?nombre=".$fila['nombre']."'> Eliminar </td>";
                    echo "<td class='badge badge-secondary'><a class='text-white'  href='modificar.php?nombre=".$fila['nombre']."'> Modificar </td>";
                echo "</tr>";
                
            }
        echo"</table>
    </div>
</div>
";
}
}//final funcion
?>