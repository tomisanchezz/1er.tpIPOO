<?php

class Viaje{

    //inicializacion de atributos
    private $codigo;
    private $destino;
    private $cantMAx;
    private $objPasajero;

    //construccion objetos
    public function __construct($codigoC,$destinoC,$cantMaxC,$objPasajeroC){
    
        $this->codigo = $codigoC;
        $this->destino = $destinoC;
        $this->cantMAx = $cantMaxC;
        $this->objPasajero = $objPasajeroC;

    }

    //metodos de acceso (get)
    public function getCodigo(){
    return $this->codigo ;
    }
    public function getDestino(){
        return $this->destino ;
        }
    public function getCantMax(){
    return $this->cantMAx ;
     }
    public function getObjPersona(){
        return $this->objPasajero ;
      }
    //metodos acceso (set)  
    public function setCodigo($codigoSet){
        $this->codigo =$codigoSet ;
    }
    public function setDestinp($destinoSet){
        $this->destino =$destinoSet ;
    }
    public function setCantmax($cantMaxS){
        $this->cantMAx =$cantMaxS ;
    }
    public function setObjPasjeros($objPasajeroS){
        $this->objPasajero = $objPasajeroS ;
      }
    
    //metodo tostring, para retornar informacion de los atributos  
    public function __toString()
    {
        return 
        "Codigo: ".$this->getCodigo()."\n".
        "destino: ".$this->getDestino()."\n".
        "Cantidad Maxima: ".$this->getCantMax()."\n".
        "Pasajero: ".$this->getObjPersona()."\n";
    }

}

class Pasajero{

    //inicializacion de atributos
    private $nombre;
    private $apellido;
    private $numeroDocumento;

    //construccion objetos
    public function __construct($nombreC,$apellidoC,$numeroDocumentoC){
    
        $this->nombre = $nombreC;
        $this->apellido = $apellidoC;
        $this->numeroDocumento = $numeroDocumentoC;
    

    }

    //metodos de acceso (get)
    public function getNombre(){
    return $this->nombre ;
    }
    public function getApellido(){
        return $this->apellido ;
        }
    public function getNroDoc(){
    return $this->numeroDocumento ;
     }

    //metodos acceso (set)
    public function setNombre($codigoSet){
        $this->nombre =$codigoSet ;
    }
    public function setApellido($apellidoSet){
        $this->apellido =$apellidoSet ;
    }
    public function setNroDoc($cantMaxS){
        $this->numeroDocumento =$cantMaxS ;
    }
            
    //metodo tostring, para retornar informacion de los atributos  
    public function __toString()
    {
        return 
        "Nombre: ".$this->getNombre()."\n".
        "Apellido: ".$this->getApellido()."\n".
        "DNI: ".$this->getNroDoc()."\n";
    }

}
class ResponsableV{

    //inicializacion de atributos
    private $nroEmpleado;
    private $nroLic;
    private $nombrer;
    private $apellidor;

    //construccion objetos
    public function __construct($nroEmpleadoC,$nroLicC,$nombreC,$apellidoC){
    
        $this->nroEmpleado = $nroEmpleadoC;
        $this->nroLic = $nroLicC;
        $this->nombrer = $nombreC;
        $this->apellidor = $apellidoC;

    }

    //metodos de acceso (get)
    public function getnroEmpleado(){
    return $this->nroEmpleado ;
    }
    public function getnroLic(){
    return $this->nroLic ;
        }
    public function getNombreR(){
    return $this->nombrer ;
     }
    public function getApellidoR(){
        return $this->apellidor ;
      }

    //metodos acceso (set)  
    public function setnroEmpleado($nroEmpleadoSet){
        $this->nroEmpleado =$nroEmpleadoSet ;
    }
    public function setNroLic($nroLicSet){
        $this->nroLic =$nroLicSet ;
    }
    public function setNombreR($nombreS){
        $this->nombrer =$nombreS ;
    }
    public function setApellidoR($apellidoS){
        $this->apellidor = $apellidoS ;
      }
            
    //metodo tostring, para retornar informacion de los atributos    
    public function __toString()
    {
        return 
        "Empleado: ".$this->getnroEmpleado()."\n".
        "Numero Licencia: ".$this->getnroLic()."\n".
        "Nombre: ".$this->getNombreR()."\n".
        "Apellido: ".$this->getApellidoR()."\n";
    }

}