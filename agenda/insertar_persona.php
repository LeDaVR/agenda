
<?php
function mysqli_field_name($result, $field_offset)
{
    $properties = mysqli_fetch_field_direct($result, $field_offset);
    return is_object($properties) ? $properties->name : null;
}
function strings($strs)
{
    return "'".$strs."'";
}

error_reporting(E_ALL);
ini_set('display_errors',1);

$user = 'root';
$passwd = 'root';
$db = 'agenda';
$port = 3306;
$host = 'localhost';
$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";

try{
    $cnx = mysqli_connect('localhost:3306','root','','agenda') or die ("error de conexion");
}
catch(Exception $e){
    echo 'Exception: ' , $e->getMessage(), "\n";
}
try{
    $nombre =$_POST['nombre'];
    $p_ap = $_POST['apellido_paterno'];
    $s_ap =$_POST['apellido_materno'];
    $domi =$_POST['domicilio'];
    $f_naci =$_POST['f_naci'];


    $sql = "insert into persona(nombre,apellido_paterno,apellido_materno,domicilio,fecha_nacimiento) values(".
            strings($nombre).','.strings($p_ap).','.strings($s_ap).','.strings($domi).','.strings($f_naci).');';
    $query = mysqli_query($cnx,$sql);
    mysqli_close($cnx);
    echo '<script type="text/javascript">
    alert("Operacion exitosa");
    window.location.href="index.php";
    </script>';
}
catch(Exception $e){
    echo 'exception: '. $e->getMessage();
}
?>