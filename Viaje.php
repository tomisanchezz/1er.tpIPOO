<?php

class Viaje{

    private $codigo;
    private $destino;
    private $cantMAx;
    private $objPasajero;

    public function __construct($codigoC,$destinoC,$cantMaxC,$objPasajeroC){
    
        $this->codigo = $codigoC;
        $this->destino = $destinoC;
        $this->cantMAx = $cantMaxC;
        $this->objPasajero = $objPasajeroC;

    }

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

    private $nombre;
    private $apellido;
    private $numeroDocumento;

    public function __construct($nombreC,$apellidoC,$numeroDocumentoC){
    
        $this->nombre = $nombreC;
        $this->apellido = $apellidoC;
        $this->numeroDocumento = $numeroDocumentoC;
    

    }

    public function getNombre(){
    return $this->nombre ;
    }
    public function getApellido(){
        return $this->apellido ;
        }
    public function getNroDoc(){
    return $this->numeroDocumento ;
     }
    public function setNombre($codigoSet){
        $this->nombre =$codigoSet ;
    }
    public function setApellido($apellidoSet){
        $this->apellido =$apellidoSet ;
    }
    public function setNroDoc($cantMaxS){
        $this->numeroDocumento =$cantMaxS ;
    }
            
    public function __toString()
    {
        return 
        "Nombre: ".$this->getNombre()."\n".
        "Apellido: ".$this->getApellido()."\n".
        "DNI: ".$this->getNroDoc()."\n";
    }

}
class ResponsableV{

    private $nroEmpleado;
    private $nroLic;
    private $nombrer;
    private $apellidor;

    public function __construct($nroEmpleadoC,$nroLicC,$nombreC,$apellidoC){
    
        $this->nroEmpleado = $nroEmpleadoC;
        $this->nroLic = $nroLicC;
        $this->nombrer = $nombreC;
        $this->apellidor = $apellidoC;

    }

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
            
    public function __toString()
    {
        return 
        "Empleado: ".$this->getnroEmpleado()."\n".
        "Numero Licencia: ".$this->getnroLic()."\n".
        "Nombre: ".$this->getNombreR()."\n".
        "Apellido: ".$this->getApellidoR()."\n";
    }



}