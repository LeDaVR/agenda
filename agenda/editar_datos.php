<html>

<head>
    <title> Editar Datos </title>
    <script>
    function volver() {
        window.location.replace("index.php");
    }
    </script>
    <style>
    html,
    body {
        background-color: #FFFFFF;
    }

    .gwd-button-11ti {
        position: absolute;
        width: 100px;
        height: 24px;
        border-color: #4A9483;
        visibility: visible;
        border-radius: 15px;
        border-style: groove;
        background-color: #4A9483;
        margin: 10px;
        top: 116px;
    }

    .gwd-button-1de7 {
        padding: 1px 6px;
        margin: 10px;
        width: 20%;
        height: 8.42%;
        background-color: rgb(15, 174, 145);
        border-color: rgb(18, 88, 104);
        font-family: "Arial Black";
        font-weight: normal;
        font-style: normal;
        transform: translate3d(-10px, 98px, 0px);
        color: rgb(0, 0, 0);
    }

    .gwd-button-1 {
        top: 0%;
        left: 0%;
        font-size: 20px;
    }

    .gwd-button-2 {
        top: 0%;
        left: 0%;
        font-size: 20px;
        ;
    }

    .form-space {
        border-collapse: collapse;
        text-align: center;
        width: 100%;
    }

    .form-1 {
        position: absolute;
        top: 0%;
        width: 33.3%;
        height: 100%;
        left: 0%;
    }


    .form-1-1 {
        border-color: rgb(95, 24, 10);
        top: 0%;
        width: 100%;
        height: 45%;
        left: 0%;
    }

    .form-1-2 {
        border-color: rgb(95, 24, 10);
        top: 0%;
        width: 100%;
        height: 50%;
        left: 0%;
    }

    .form-2 {
        position: absolute;
        top: 0%;
        width: 33.3%;
        height: 100%;
        left: 33.3%;
    }

    .form-3 {
        position: absolute;
        top: 0%;
        width: 33.3%;
        height: 100%;
        left: 66.6%;
    }

    .gwd-span-15ms {
        position: absolute;
        font-size: 50px;
        font-weight: bold;
        font-family: Georgia;
        background-image: none;
        text-align: center;
        transform-origin: 178.203px 29.8046px 0px;
        color: rgb(255, 255, 255);
        width: 100%;
        height: 30.07%;
        left: 0%;
        top: 0%;
        border-image-source: none;
        border-image-width: 1;
        border-image-outset: 0;
        border-image-repeat: stretch;
        border-color: rgb(95, 24, 10);
        border-style: inset;
        border-width: 0px;
        background-color: rgb(15, 174, 145);
    }

    .gwd-span-8ar7 {
        left: 260px;
        top: 57px;
        color: rgb(0, 0, 0);
    }

    table {
        border-style: outset;
        margin-left: 5%;
        border-collapse: collapse;
        width: 90%;
    }

    th,
    td {

        padding: 16px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        border-color: rgb(95, 24, 10);
    }

    th {
        background-color: rgb(236, 213, 100);
    }

    td {
        background-color: #F2F6F6;
    }


    p {
        margin: 10px;
        padding: 1px 6px;
        font-family: "Arial Black";
        font-size: 15px;
        font-weight: normal;
        font-style: normal;
        text-align: center;
    }

    .btn {
        
        width: 40%;
        margin-left: 0%;
        height: 10%;
        background-color: rgb(30, 138, 162);
        border-color: rgb(18, 88, 104);
        font-family: "Arial Black";
        font-size: 15px;
        font-weight: normal;
        font-style: normal;
        border-radius: 10px;
        
        border-color: #ffffff;
        color: rgb(0, 0, 0);
    }

    .lst {
        border-radius: 10px;
        width: 90%;
        padding: 10px;
        margin-left: 5%;
        text-align: left;
        border-style: outset;
        border-width: 5px;
        border-color: #ffffff;
    }


    button:hover{
        background: #1AB7DA;
    }
    button:active {
        background: #14257B;
    }
    </style>
</head>

<body>
    <?php
$ident=0;
?>
    <div class="form-1">
        <div class="form-1-1">
            <p>Seleccionar Persona</p>
            <p>
                <form method="post">
                    <input class="lst" list="personas" name="personas" placeholder="Seleccionar Persona">
                    <datalist id="personas">
                        <?php
        function mysqli_field_name($result, $field_offset)
        {
            $properties = mysqli_fetch_field_direct($result, $field_offset);
            return is_object($properties) ? $properties->name : null;
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
        $sql = "select concat(nombre,' ',apellido_paterno,' ',apellido_materno) from persona;";
        $result = mysqli_query($cnx,$sql);
        $i  = 0;
        while($row = mysqli_fetch_row($result))
        {
            $count = count($row);
            $y = 0;
            while ($y < $count)
            {
                $c_row = current($row);
                echo '<option value="' . $c_row .'"></option>';
                next($row);
                $y = $y + 1;
            }
            $i = $i + 1;
        }
        
        ?>
                    </datalist>
            </p>
            <p><button name="editar" class="btn" id="button_1">Editar</button></p>
            <p><button name="elpersona" class="btn" >Eliminar</button></p>
            </form>
            <?php
echo '<p>EDITANDO:</p>';
if(isset($_POST['editar'])) {
    $human = $_POST['personas'];
    echo '<p>'.$human.'</p1>';
}
echo '</div>';
if(isset($_POST['editar']))
{
    $human = $_POST['personas'];
    $sql = "select * from persona where concat(nombre,' ',apellido_paterno,' ',apellido_materno) ='".$human."';";
    $result = mysqli_query($cnx,$sql);
    $selectone;
    if($row = mysqli_fetch_row($result))
    {
        $selectone=true;
        $c_row = current($row);
    }
    else 
    {
        $selectone=false;
        $c_row = '';
    }    
    $ident = $c_row;
}

if(isset($_POST['elpersona']))
{
    $human = $_POST['personas'];
    $sql = "select id from persona where concat(nombre,' ',apellido_paterno,' ',apellido_materno) ='".$human."';";
    $result = mysqli_query($cnx,$sql);
    if($row = mysqli_fetch_row($result))
    {
        $c_row = current($row);
        $sql = "delete from persona where id=".$c_row.";";
        $result = mysqli_query($cnx,$sql);
    }
}
?>



            <div class="form-1-2">
                <p>Datos Personales</p>
                <form method="post">
                    <table>
                        <?php
if(isset($_POST['editar']))
{
    echo '<input type="text" hidden="true" name="ident" value="'.$c_row.'"/>';
    if($selectone){
        next($row);$c_row = current($row);
    }
    echo '<tr><td>Nombre:</td><td><input type="text" name="n2" value="'.$c_row.'"/></td></tr> ';
    if($selectone){
        next($row);$c_row = current($row);
    }
    echo '<tr><td>Apellido Paterno:</td><td><input  type="text" name="ap2" value="'.$c_row.'"/> </td></tr> ';
    if($selectone){
        next($row);$c_row = current($row);
    }
    echo '<tr><td>Apellido Materno:</td><td> <input  type="text" name="am2" value="'.$c_row.'"/></td></tr> ';
    if($selectone){
        next($row);$c_row = current($row);
    }
    echo'<tr><td>Domicilio:</td><td><input  type="text" name="d2" value="'.$c_row.'"/> </td></tr> ';
    if($selectone){
        next($row);$c_row = current($row);
    }
    echo '<tr><td>Fecha de nacimiento:</td><td><input  type="text" name="f2" value="'.$c_row.'"/> </td></tr>';
}
else{
    $c_row='';
    echo '<input type="text" hidden="true" name="ident" value="'.$c_row.'"/> ';
    echo '<tr><td>Nombre:</td><td><input type="text" name="n2" value="'.$c_row.'"/></td></tr> ';
    echo '<tr><td>Apellido Paterno:</td><td><input  type="text" name="ap2" value="'.$c_row.'"/> </td></tr> ';
    echo '<tr><td>Apellido Materno:</td><td> <input  type="text" name="am2" value="'.$c_row.'"/></td></tr> ';
    echo'<tr><td>Domicilio:</td><td><input  type="text" name="d2" value="'.$c_row.'"/> </td></tr> ';
    echo '<tr><td>Fecha de nacimiento:</td><td><input  type="text" name="f2" value="'.$c_row.'"/> </td></tr>';
}
 

echo '</table>';
echo '<p><button name="actualizar" class="btn"  data-gwd-name="insertar_1">Actualizar</button></p>';
echo '</form>';
if(isset($_POST['actualizar'])) {
    $ident = $_POST['ident'];
    $n2 = $_POST['n2'];
    $ap2 = $_POST['ap2'];
    $am2 = $_POST['am2'];
    $d2 = $_POST['d2'];
    $f2 = $_POST['f2'];
    $sql = "update persona set nombre='".$n2."',apellido_paterno='".$ap2."',apellido_materno='".$am2."',
    domicilio='".$d2."',fecha_nacimiento='".$f2."' where id=".$ident.";";
    $result = mysqli_query($cnx,$sql);
}
?>
            </div>
        </div>
        <div class="form-2">

            <div class="form-1-1">
                <p>Eliminar Teléfono</p>
                <p>
                    <form method="post">


                        <input class="lst" list="eltelefono" name="eltelefono" placeholder="Seleccionar Telefono">
                        <datalist id="eltelefono">
                            <?php
        if(isset($_POST['editar']))
        {   
            $sql = "select telefono_telefono from persona_telefono where  id_persona=".$ident.";";
            $result = mysqli_query($cnx,$sql);
            $i  = 0;
            while($row = mysqli_fetch_row($result))
            {
                $count = count($row);
                $y = 0;
                while ($y < $count)
                {
                    $c_row = current($row);
                    echo '<option value="' . $c_row .'"></option>';
                    next($row);
                    $y = $y + 1;
                }
                $i = $i + 1;
            }
        }
        echo  '</datalist></p>';
        echo '<input type="text" hidden="true" name="aux" value="'.$ident.'"/>';
        echo '<p><button name="deltelefono" class="btn" >Eliminar</button></p>';
        echo '</form>';
            if(isset($_POST['deltelefono']))
            {
                $temp = $_POST['aux'];
                $phone = $_POST['eltelefono'];
                $sql = "delete from persona_telefono where telefono_telefono=".$phone." and id_persona=".$temp.";";
                $ident = $temp;
                $result = mysqli_query($cnx,$sql);
            }
        ?>
            </div>

            <div class="form-1-2">
                <p>Añadir telefono</p>
                <form method="post">
                    <table>
                    <?php
                    echo '<input type="text" hidden="true" name="aux2" value="'.$ident.'" />';
                    ?>
                 
                 <tr><td>Telefono:</td><td><input type="text" name="tel2" /></td></tr> 
                 <tr><td>Tipo:</td><td><input  type="text" name="tipe2" /> </td></tr> 
             </table>
             <p><button name="addphone" class="btn" >Añadir</button></p>
             </form>
            <?php
            if(isset($_POST['addphone'])) {
                $ident = $_POST['aux2'];
                $tel2 = $_POST['tel2'];
                $tipe2 = $_POST['tipe2'];
                $sql = "select count(telefono) from telefono where telefono=".$tel2.";";
                $result = mysqli_query($cnx,$sql);
                $row = mysqli_fetch_row($result);
                $c_row = current($row);
                if(!$c_row)
                {
                    $sql = "insert into telefono values(".$tel2.");";
                    $result = mysqli_query($cnx,$sql);
                }
                $sql = "insert into persona_telefono values(".$tel2.",".$ident.",'".$tipe2."');";
                $result = mysqli_query($cnx,$sql);
            }
            ?>
            </div>
        </div>
        <div class="form-3">
            <div class="form-1-1">
                    <p>Eliminar Correo</p>
                        <p>
                            <form method="post">
                                <input class="lst" list="elcorreo" name="elcorreo" placeholder="Seleccionar Correo">
                                <datalist id="elcorreo">
                                    <?php
                                        if(isset($_POST['editar']))
                                        {   
                                            
                                            $sql = "select correo_electronico from correo_electronico where  id_persona=".$ident.";";
                                            $result = mysqli_query($cnx,$sql);
                                            $i  = 0;
                                            while($row = mysqli_fetch_row($result))
                                            {
                                                $count = count($row);
                                                $y = 0;
                                                while ($y < $count)
                                                {
                                                    $c_row = current($row);
                                                    echo '<option value="' . $c_row .'"></option>';
                                                    next($row);
                                                    $y = $y + 1;
                                                }
                                                $i = $i + 1;
                                            }
                                        }
                                        echo  '</datalist></p>';
                                        echo '<input type="text" hidden="true" name="aux3" value="'.$ident.'"/>';
                                        echo '<p><button name="delcorreo" class="btn" >Eliminar</button></p>';
                                        echo '</form>';
                                            if(isset($_POST['delcorreo']))
                                            {
                                                $temp = $_POST['aux3'];
                                                $correo = $_POST['elcorreo'];
                                                $sql = "delete from correo_electronico where correo_electronico='".$correo."' and id_persona=".$temp.";";
                                                $ident = $temp;
                                                $result = mysqli_query($cnx,$sql);
                                            }
                ?>
            </div>
            <div class="form-1-2">
            <p>Añadir Correo</p>
                <form method="post">
                    <table>
                    <?php
                    echo '<input type="text" hidden="true" name="aux4" value="'.$ident.'" />';
                    ?>
                 
                 <tr><td>Correo:</td><td><input type="text" name="cor2" /></td></tr> 
                 <tr><td>Tipo:</td><td><input  type="text" name="ctype2" /> </td></tr> 
             </table>
             <p><button name="addCorreo" class="btn" >Añadir</button></p>
             </form>
            <?php
            if(isset($_POST['addCorreo'])) {
                $ident = $_POST['aux4'];
                $cor2 = $_POST['cor2'];
                $ctype2 = $_POST['ctype2'];
                $sql = "insert into correo_electronico values('".$cor2."','".$ctype2."',".$ident.");";
                $result = mysqli_query($cnx,$sql);
            }
            ?>
            <p><button name="volver" class="btn" onclick='volver()'>Volver</button></p>
            </div>
        </div>
</body>

</html>