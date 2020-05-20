<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>AGENDA</title>
  <script>
    function mostrar() {
        window.location.replace("mostrar_persona.php");
    }
    function insertar()
    {
        window.location.replace("datos_persona.php");
    }
    function editar()
    {
        window.location.replace("editar_datos.php");
    }
  </script>
  <style type="text/css" id="gwd-text-style">
    p {
      margin: 0px;
    }
    h1 {
      margin: 0px;
    }
    h2 {
      margin: 0px;
    }
    h3 {
      margin: 0px;
    }
  </style>
  <style type="text/css">
    html, body {
      width: 100%;
      height: 100%;
      margin: 0px;
    }
    body {
      background-color: #FFFFFF;
    }
    .gwd-p-15pe {
      height: auto;
      left: 0px;
      position: absolute;
      top: 0px;
      width: auto;
    }

    .boxelbtn{
      position:absolute;
      width:100%;
      top:40%;
    }
    
    .btn {
            margin-top:30px;
            margin-left:37.5%;
            width: 25%;
            height: 40%;
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

    button:hover{
        background: #1AB7DA;
    }
    button:active{
        background: #14257B;
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
  </style>
</head>

<body class="htmlNoPages">
<div class="boxelbtn">
  <button id="button_1" class=" btn "  onclick ="insertar()">INSERTAR</button>
  <button id="button_2" class=" btn "  onclick ="mostrar()">MOSTRAR</button>
  <button id="button_3" class=" btn"  onclick ="editar()">EDITAR</button>
</div>
  <span class="gwd-span-15ms"><br><span class="gwd-span-8ar7">A G E N D A</span></span>
</body>

</html>