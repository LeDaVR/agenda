
<html>
<head>
    <title> Añadir Persona </title>
    <script>
        function volver()
        {
            window.location.replace("index.php");
        }
    </script>
    <style>
        html,body {
            background-color:#FFFFFF;
        }
        .btn {
            margin-top:30px;
            width: 15%;
            height: 15%;
            padding:20px;
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
        .gwd-button-1{
            position:absolute;
            top: 60%;
            left :60%;
            font-size: 20px;
        }
        .gwd-button-2{
            position:absolute;
            top: 60%;
            left :10%;
            font-size: 20px;;
        }
        p{
            padding: 1px 6px;
            font-family: "Arial Black";
            font-size: 15px;
            font-weight: normal;
            font-style: normal;
        }

        .form-space{
            border-collapse:collapse;
            text-align: left;
            width: 100%;
        }

        .form-x {
            border-radius: 15px;
            position: absolute;
            top: 40%;
            width: 80%;
            height: 60%;
            left: 10%;
            background-color:#FFFFFF;
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
            background-color: #DAF4FB;
        }
        .gwd-span-8ar7 {
        left: 260px;
        top: 57px;
        color: rgb(0, 0, 0);
        }
        table{
            border-collapse :collapse;
            
            width: 100%;
        }
        th,td{
            
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            border-color: rgb(95, 24, 10);
        }
        th{
            background-color: rgb(236, 213, 100);
        }
        td{
            background-color: #F2F6F6;
        }

        button:hover{
        background: #1AB7DA;
    }
        button:active{
            background: #14257B;
        }
    </style>
</head>
<body>
<div class="form-x">

<form action="insertar_persona.php" method="post">
<table>
 <tr><td>Nombre:</td><td><input class= "form-space" type="text" name="nombre" /></td></tr> 
 <tr><td>Apellido Paterno:</td><td><input class= "form-space" type="text" name="apellido_paterno" /> </td></tr> 
 <tr><td>Apellido Materno:</td><td> <input class= "form-space" type="text" name="apellido_materno" /></td></tr> 
 <tr><td>Domicilio:</td><td><input class= "form-space" type="text" name="domicilio" /> </td></tr> 
 <tr><td>Fecha de nacimiento:</td><td><input class= "form-space" type="text" name="f_naci" /> </td></tr> 
</table>
 <p><button type="submit" class="btn gwd-button-1"  data-gwd-name="insertar_1">Registrar</button></p>
</form>
<button id="button_4" class="btn gwd-button-2" data-gwd-name="insertar_1" onclick ="volver()">Volver</button>

</div>
<span class="gwd-span-15ms"><br><span class="gwd-span-8ar7">REGISTRAR PERSONA</span></span>
</body>
</html>