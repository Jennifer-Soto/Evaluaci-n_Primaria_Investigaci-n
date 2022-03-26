<?php

    $nomb= $_POST['nomb'];
    $apell = $_POST['apell'];
    $direc = $_POST['direc'];
    $tel = $_POST['tel'];
    $num_ident = $_POST['num_ident'];
    $edad = $_POST['edad'];
    $dine_disp = $_POST['dine_disp'];
    $iva1 = 0.16;
    
    if($_REQUEST['peli'] == "1"){
        $entrada = 5000;
        $iva = $entrada * $iva1;
        $total =$entrada + $iva;

        if($dine_disp >= $tot){

            if($edad >= 14){
                echo "La persona $nomb $apell identificad@ con el número $num_ident"."<br>";

                echo "Residente de $direc, número telefónico $tel"."<br>";

                echo "Cumple con los requisitos para ver la película Rambo"."<br>";

                echo "Edad: $edad, total efectivo: $dine_disp"."<br>";

                $sob = $dine_disp - $tot;

                echo "Precio de entrada: $tot"."<br>";

                echo "Le sobra $sob";
            }
            else{
                echo "La persona $nomb $apell identificad@ con el número $num_ident"."<br>";

                echo "Residente de $direc, número telefónico $tel"."<br>";

                echo "No cuenta con la edad suficiente para ver la película Rambo";
            }
        } 
        else{
            echo "La persona $nomb $apell identificad@ con el número $num_ident"."<br>";

            echo "Residente de $direc, número telefónico $tel"."<br>";

            echo "No cuenta con el dinero suficiente para ver la película Rambo";
        }
    }
    elseif($_REQUEST['peli'] == "2"){
        $entrada = 7000;
        $iva = $entrada * $iva1;
        $tot =$entrada + $iva;

        if($dine_disp >= $tot){

            if($edad >= 14){
                echo "La persona $nomb $apell identificad@ con el número $num_ident"."<br>";

                echo "Residente de $direc, número telefónico $tel"."<br>";

                echo "Cumple con los requisitos para ver la película El Depredador"."<br>";

                echo "Edad: $edad, total efectivo: $dine_disp"."<br>";

                $sob = $dine_disp - $tot;

                echo "Precio de entrada: $tot"."<br>";

                echo "Le sobra $sob";
            }
            else{
                echo "La persona $nomb $apell identificad@ con el número $num_ident"."<br>";

                echo "Residente de $direc, número telefónico $tel"."<br>";

                echo "No cuenta con la edad suficiente para ver la película El Depredador";
            }
        } 
        else{
            echo "La persona $nomb $apell identificad@ con el número $num_ident"."<br>";

            echo "Residente de $direc, número telefónico $tel"."<br>";

            echo "No cuenta con el dinero suficiente para ver la película El Depredador";
        }  
    }
    elseif($_REQUEST['peli'] == "3"){
        $entrada = 9000;
        $iva = $entrada * $iva1;
        $tot =$entrada + $iva;

        if($dine_disp >= $tot){

            if($edad >= 18){
                echo "La persona $nomb $apell identificad@ con el número $num_ident"."<br>";

                echo "Residente de $direc, número telefónico $tel"."<br>";

                echo "Cumple con los requisitos para ver la película El cazador de brujas"."<br>";

                echo "Edad: $edad, total efectivo: $dine_disp"."<br>";

                $sob = $dine_disp - $tot;

                echo "Precio de entrada: $tot"."<br>";

                echo "Le sobra $sob";
            }
            else{
                echo "La persona $nomb $apell identificad@ con el número $num_ident"."<br>";

                echo "Residente de $direc, número telefónico $tel"."<br>";

                echo "No cuenta con la edad suficiente para ver la película El cazador de brujas";
            }
        } 
        else{
            echo "La persona $nomb $apell identificad@ con el número $num_ident"."<br>";

            echo "Residente de $direc, número telefónico $tel"."<br>";

            echo "No cuenta con el dinero suficiente para ver la película El cazador de brujas";
        }
    }
    elseif($_REQUEST['peli'] == "4"){
        $entrada = 12000;
        $iva = $entrada * $iva1;
        $tot =$entrada + $iva;

        if($dine_disp >= $tot){

            if($edad >= 20){
                echo "La persona $nomb $apell identificad@ con el número $num_ident"."<br>";

                echo "Residente de $direc, número telefónico $tel"."<br>";

                echo "Cumple con los requisitos para ver la película La Red"."<br>";

                echo "Edad: $edad, total efectivo: $dine_disp"."<br>";

                $sob = $dine_disp - $tot;

                echo "Precio de entrada: $tot"."<br>";

                echo "Le sobra $sob";
            }
            else{
                echo "La persona $nomb $apell identificad@ con el número $num_ident"."<br>";

                echo "Residente de $direc, número telefónico $tel"."<br>";

                echo "No cuenta con la edad suficiente para ver la película La Red";
            }
        } 
        else{
            echo "La persona $nomb $apell identificad@ con el número $num_ident"."<br>";

            echo "Residente de $direc, número telefónico $tel"."<br>";

            echo "No cuenta con el dinero suficiente para ver la película La Red";
        }    
    }
    ?>
    
    
