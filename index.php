<?php
include('Operaciones.php');

if (isset($_POST['n1']))
{
    $total = 0;
    $Objeto = new Operaciones();
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operacion=$_POST['operacion'];
    if($operacion == 'Sumar' ){
        $total=$Objeto->Suma($n1,$n2);
    }
    else if($operacion== 'Restar'){
        $total=$Objeto->Resta($n1,$n2);
    }
    else if($operacion == 'Multiplicar'){
        $total=$Objeto->Multi($n1,$n2);
    }
    else if($operacion== 'Dividir'){
        $total=$Objeto->Divi($n1,$n2);
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <title>Proyecto 5to.BACO</title>
    </head>
<body>
    <div class="container">
        <h1 align="center">Calculadora</h1>
    </div>
    <br><br>

    <form method="post" action="index.php">
        <div class="row">
            
            <div class="input-field col s6">
                <input name="n1" id="n1" type="number" >
                <label class="active" for="n1">Primer Valor</label>
            </div>
            <div class="input-field col s6">
                <input name="n2" id="n2" type="number">
                <label class="active" for="n2">Segundo Valor</label>
            </div>
        </div>
        <div class="input-field col s6">
            <label>Operacion</label>
            <br>
            <select name="operacion" class="browser-default">
              <option value="Sumar">Sumar </option>
              <option value="Restar">Restar</option>
              <option value="Multiplicar">Multiplicar</option>
              <option value="Dividir">Dividir</option>
            </select>
        </div>
        <div class="container" align="center"> 
            <br><br>
            <input name="operacion"  type="submit" value="Sumar" class="waves-effect waves-light btn">
            <input name="operacion"  type="submit" value="Restar" class="waves-effect waves-light btn">
            <input name="operacion"  type="submit" value="Multiplicar" class="waves-effect waves-light btn">
            <input name="operacion"  type="submit" value="Dividir" class="waves-effect waves-light btn">
        </div>
        <div class="container" align="center">
            <br><br>
            <input name="Resultado"  type="submit" value="Calcular" class="waves-effect waves-light btn">
        </div>
        
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
    </script>
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
</body>

</html>
<?php

      echo '<h1 align="center"> El Resultado es: '.$total.'</h1>';
      
?>