<html>
<head>
    <title> Lista de Persona </title>
    <script>
        function volver()
        {
            window.location.replace("index.php");
        }
    </script>
    <style>
        .btn {
            margin-top:30px;
            margin-left:40%;
            width: 20%;
            height: 8.42%;
            background-color: rgb(30, 138, 162);
            border-color: rgb(18, 88, 104);
            font-family: "Arial Black";
            font-size: 100%;
            font-weight: normal;
            font-style: normal;
            border-radius: 10px;
            border-color: #ffffff;
            color: rgb(0, 0, 0);
        }
        table{
            border-style: outset;
            border-radius: 15px;
            margin-left:10%;
            border-collapse :collapse;
            width: 80%;
        }
        th,td{
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            border-color: rgb(95, 24, 10);
        }
        th{
            background-color: #DAF4FB;
        }
        td{
            background-color: #f5f5f5;

        }
        body{
            background-color: #FFFFFF;
        }
        button:hover{
            background: #1AB7DA;
        }
        td:hover { 
            background-color: #C3C3C3;
        }
        tr:hover { 
            background-color: #C3C3C3;
        }
    </style>
</head>

<body>
        <h1 align="center">Lista de personas</h1>
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
        $sql = "select f.id as ID,f.nombre AS  Nombre,concat(f.apellido_paterno,' ',f.apellido_materno) 
        AS  Apellidos,f.domicilio as  Domicilio, 
        fecha_nacimiento as 'FECHA DE NACIMIENTO', group_concat(distinct e.telefono_telefono,',',e.tipo,'<br>' SEPARATOR '') 'Telefono' ,
         group_concat(distinct g.correo_electronico,',',g.tipo,'<br>' SEPARATOR '')'Correo electrónico'from persona f
        left join (select *  from persona_telefono ) e
        on f.id = e.id_persona
        left join (select *  from correo_electronico ) g
        on f.id = g.id_persona
        group by f.id
        order by f.nombre;        
        ";
        $result = mysqli_query($cnx,$sql);

        $i = 0;
        echo '<table><tr>';
        while($i < mysqli_num_fields($result))
        {
            $fieldName = mysqli_field_name($result,$i);
            echo '<th>' . $fieldName . '</th>';
            $i = $i +1;
        }
        echo '</tr>';
        $i  = 0;

        while($row = mysqli_fetch_row($result))
        {
            echo '<tr>';
            $count = count($row);
            $y = 0;
            while ($y < $count)
            {
                $c_row = current($row);
                echo '<td>' . $c_row .'</td>';
                next($row);
                $y = $y + 1;
            }
            echo '</tr>';
            $i = $i + 1;
        }
        mysqli_free_result($result);

        echo '</table>';
        echo '<button class="btn" onclick ="volver()">Volver</button>';
        ?>
</body>
</html>