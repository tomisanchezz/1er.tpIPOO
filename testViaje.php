<?php
// Se incluyen las clases necesarias
include "Viaje.php";

// Se inicializan los arrays para almacenar pasajeros y responsables
$arrayPersona = []; 
$arrayResponsable= [];

// Se crea un pasajero y se agrega al array de pasajeros
$persona = new Pasajero("axel", "sanchez", 47656232);
$arrayPersona[] = $persona;

// Se crea un viaje con el pasajero anterior
$viaje = new Viaje(1234,"madrid",999,$persona);

// Se crea un responsable y se agrega al array de responsables
$responsable= new ResponsableV(567,989898,"lorenzo","lombardo");
$arrayResponsable[]= $responsable;

// Se pregunta al usuario si desea modificar los datos
echo "Desea modificar los datos S/N";
$rta1=trim(fgets(STDIN));

// Si el usuario desea modificar los datos, se entra en el bucle de modificación
if($rta1 == "s"){
    do{
        // Se le pregunta al usuario qué datos desea modificar
        echo "Modificar datos Pasajero/Viaje/Responsable ";
        $rta2=trim(fgets(STDIN));
        
        // Dependiendo de la respuesta del usuario, se modifican los datos correspondientes
        if($rta2 == strtolower("Pasajero")){
            echo "Modifica el Nombre"."\n";
            $nombre=trim(fgets(STDIN));
            $persona->setNombre($nombre);
            echo "Modifica el Apellido: "."\n";
            $apellido=trim(fgets(STDIN));
            $persona->setApellido($apellido);
            echo"Modificar DNI: "."\n";
            $dni=trim(fgets(STDIN));
            $persona->setNroDoc($dni);
        } elseif($rta2 == strtolower("Viaje")){
            echo "Modifica el codigo: "."\n"; 
            $codigo = trim(fgets(STDIN));
            $viaje -> setCodigo($codigo); 
            echo "Modifica el destino: "."\n";
            $destino = trim(fgets(STDIN));
            $viaje -> setDestinp($destino); 
            echo "Modifica la cantidad Maxima de Pasajeros: "."\n";
            $cantidadMaxima = trim(fgets(STDIN));
            $viaje -> setCantmax($cantidadMaxima);
        } elseif($rta2 == strtolower("Responsable")){
            echo "Modifica Nro Empleado: "."\n";
            $nroEmpleado = trim(fgets(STDIN));
            $responsable -> setnroEmpleado($nroEmpleado);
            echo "Modifica Nro Licencia: "."\n";
            $lic = trim(fgets(STDIN));
            $responsable -> setNroLic($lic);
            echo "Modifica Nombre: "."\n";
            $nombreR = trim(fgets(STDIN));
            $responsable -> setNombreR($nombreR);
            echo "Modifica el apellido: "."\n";
            $apellidoR = trim(fgets(STDIN));
            $responsable -> setApellidoR($apellidoR);
        }
    
        // Se pregunta al usuario si desea seguir modificando datos
        echo "Desea modificar otro  S/N";
        $rta1=trim(fgets(STDIN));
    } while($rta1 == "s");
} else {
    // Si el usuario no desea modificar los datos, se muestran los datos del viaje y del responsable
    echo $viaje;
    echo $responsable;
}

// Se pregunta al usuario si desea agregar más pasajeros o responsables
echo "Desea agregar mas pasajeros/responsables coloque S/N";
$rta10=trim(fgets(STDIN));

// Si el usuario desea agregar más pasajeros o responsables, se entra en la correspondiente sección
if($rta10 == strtolower("s")){
    // Se pregunta al usuario si desea agregar pasajeros
    echo "Desea agregar Pasajeros S/N "."\n";
    $rta6=trim(fgets(STDIN));
    
    // Si el usuario desea agregar pasajeros, se entra en el bucle de ingreso de datos
    if($rta6==strtolower("S")){
        do{
            // Se solicitan los datos del nuevo pasajero
            echo "Ingrese su nombre: ";
            $rtaN=trim(fgets(STDIN));
            echo "Ingrese apellido: ";
            $rtaA=trim(fgets(STDIN));
            echo "Inrege DNI: ";
            $rtaDni=trim(fgets(STDIN));

            // Se crea un nuevo objeto Pasajero con los datos ingresados
            $persona= new Pasajero($rtaN,$rtaA,$rtaDni);
            $b=false;

            // Se verifica si el DNI del nuevo pasajero ya existe en el array de pasajeros
            foreach($arrayPersona as $nuevo){
                if($nuevo->getNroDoc() == $persona->getNroDoc()){
                    $b=true;
                }
            }

            // Si el DNI no existe en el array, se agrega el nuevo pasajero; de lo contrario, se muestra un mensaje
            if($b == false){
                $arrayPersona[]= $persona;
            } else {
                echo"Ya se ingresaron estos datos";
            }

            // Se pregunta al usuario si desea agregar más pasajeros
            echo "Desea agregar mas Pasajeros S/N "."\n";
            $rta5=trim(fgets(STDIN));
        } while($rta5==strtolower("s"));
    } else {
        // Si el usuario no desea agregar más pasajeros, se muestran los datos del viaje y del responsable
        echo $viaje;
        echo $responsable;
    }

    // Se pregunta al usuario si desea agregar responsables
    echo "Desea agregar Responsables S/N "."\n";
    $rta5=trim(fgets(STDIN));

    // Si el usuario desea agregar responsables, se entra en el bucle de ingreso de datos
    if($rta5==strtolower("S")){
        do{
            // Se solicitan los datos del nuevo responsable
            echo "Ingrese su numero de empleado: ";
            $empleado=trim(fgets(STDIN));
            echo "Ingrese numero lic: ";
            $lic=trim(fgets(STDIN));
            echo "Inrege nombre: ";
            $nombrR=trim(fgets(STDIN));
            echo "Ingrese apellido: ";
            $apellR=trim(fgets(STDIN));

            // Se crea un nuevo objeto ResponsableV con los datos ingresados
            $responsable= new ResponsableV($empleado,$lic,$nombrR,$apellR);
            $b=false;

            // Se verifica si el número de empleado del nuevo responsable ya existe en el array de responsables
            foreach($arrayResponsable as $nuevo){
                if($nuevo->getnroEmpleado() == $responsable->getnroEmpleado()){
                    $b=true;
                }
            }

            // Si el número de empleado no existe en el array, se agrega el nuevo responsable; de lo contrario, se muestra un mensaje
            if($b == false){
                $arrayResponsable[]=$responsable;
            } else {
                echo"Ya se ingresaron estos datos";
            }

            // Se pregunta al usuario si desea agregar más responsables
            echo "Desea agregar mas Responsable S/N "."\n";
            $rta6=trim(fgets(STDIN));
        } while($rta6==strtolower("s"));
    } else {
        // Si el usuario no desea agregar más responsables, se muestran los datos del viaje y del responsable
        echo $viaje;
        echo $responsable;
    }
}
?>
