<title>Tp N*70</title>
<?php

$nombre=$_REQUEST['n1'];
$horas=$_REQUEST['n2'];
$pesos=$_REQUEST['n3'];

class Persona {
    private $nom, $horas, $pesos;
    public function inicializarDatos($n, $h, $p)
    {
      $this->nom=$n;
      $this->horas=$h;
      $this->pesos=$p;
    }
    public function imprimirDatos()
    {
        echo 'Su nombre es: ';
        echo $this->nom;
        echo '<br>';
        echo "Sus ganacias son: ". $this->multiplicarDatos() ." pesos";
    }
    public function multiplicarDatos(){
      $mult = $this->horas * $this->pesos;
      return $mult;
  }
  }
  
$per1=new Persona();
$per1->inicializarDatos($nombre, $horas, $pesos);
$per1->imprimirDatos();
$per1->multiplicarDatos();
?>
