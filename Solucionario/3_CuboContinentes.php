<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title> TALLER CUBOS</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="generator" content="Geany 1.31" />

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        form {
            text-align: center;
            margin: 20px;
        }

        label {
            font-size: 18px;
            margin-right: 10px;
        }

        select {
            font-size: 16px;
            padding: 8px;
        }

        input[type="submit"] {
            font-size: 16px;
            padding: 8px 15px;
            background-color: #2ecc71;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            color: #333;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        td {
            background-color: #ecf0f1;
        }

        button {
            font-size: 16px;
            padding: 10px 20px;
            background-color: #e74c3c;
            color: #fff;
            border: none;
            cursor: pointer;
            margin: 20px;
            display: block;
            margin: 20px auto;
        }

        button:hover {
            background-color: #c0392b;
        }
    </style>
</head>

<body>

    <header>
        <h1>TALLER CUBOS</h1>
    </header>

    <!-- Formulario para que el usuario elija el continente -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="continente">Seleccione un continente:</label>
        <select id="continente" name="continente">
            <option value="AMERICA">AMERICA</option>
            <option value="EUROPA">EUROPA</option>
            <option value="AFRICA">AFRICA</option>
            <option value="ASIA">ASIA</option>
            <option value="OCEANIA">OCEANIA</option>
        </select>
        <input type="submit" value="Mostrar países">
    </form>

<?php
    include "Continentes/America.php";
    include "Continentes/Europa.php";
    include "Continentes/Africa.php";
    include "Continentes/Asia.php";
    include "Continentes/Oceania.php";	
          
    // MATRICES ASOCIATIVAS	
    $titulo = ["AMERICA","EUROPA","AFRICA","ASIA","OCEANIA"];
    $Cubos = [$America,$Europa,$Africa,$Asia,$Oceania];

    // Procesar la elección del usuario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $continenteElegido = $_POST["continente"];
        $indiceContinente = array_search($continenteElegido, $titulo);
        
        if ($indiceContinente !== false && isset($Cubos[$indiceContinente])) {
            $Pais = $Cubos[$indiceContinente];
            $html = '<h1>' . $continenteElegido . '</h1>';
            
            foreach ($Pais as $cara=>$info){        
                $html .='
                    <table border=1>
                    <tr>';
                            
                $maxColum=null;
                foreach($info as $prov=>$arreglo) {
                    $tam=count($info[$prov]);
                    $maxColum=($maxColum >= $tam) ? $maxColum : $tam;
                }
                
				$html.=' <tr>  
				<th style="background-color: salmon;" colspan=" ' . $maxColum . '"> ' . $cara . ' </th>
				</tr>';
				
	  		 	foreach($info as $prov=>$arreglo){
		 		  $html.="<th> $prov </th>"; 
	  		 	}
   
	   			// ALGORITMO PARA IMPRIMIR LA TABLA EN HTML 
	   			for($f=0;$f < $maxColum; $f++){   // $max para recorrer hacia abajo
		  		$html.='<tr>';
		  			 foreach($info as $data){
			  		 // Aplicar colores según la condición
			  		 $bgColor = (isset($data[$f])) ? '#D6FAF2' : '#85C1E9';
			  		 $html .= '<td bgcolor="' . $bgColor . '">' . (isset($data[$f]) ? $data[$f] : '&nbsp;') . '</td>';     
		   			}
		   		$html.='</tr>';
	   			}  
                
                $html .= "</table>"; 
                $html .= "<br> <br>";
            }
            
            echo $html;
        } else {
            echo "Error: Continente no encontrado.";
        }
    }
?>                    
<button onclick="window.location.href='../index.html'">MENU PRINCIPAL</button>

</body>

</html>