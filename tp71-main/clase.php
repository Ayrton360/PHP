<title>Tp N*71</title>
<?php
$largo=$_REQUEST['n1'];
$ancho=$_REQUEST['n2'];

class Persona {
    private $largo, $ancho;

    function inicializadorDatos($l,$a) {
      $this->largo = $l;
      $this->ancho = $a;
    }
    function perimetro(){
      return $this->largo * 2 + $this->ancho * 2;
    }
  
    function area(){
      return $this->largo * $this->ancho;
    }
    public function mostrarDatos(){
        echo "Largo: $this->largo <br>";
        echo "Ancho: $this->ancho <br>";
        echo "Perimetro: ". $this->perimetro() ."<br>";
        echo "Largo: ". $this->area() ."<br>";
    }
  }
  
$per1=new Persona();
$per1->inicializadorDatos($largo, $ancho);
$per1->mostrarDatos();
?>