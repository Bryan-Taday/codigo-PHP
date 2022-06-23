# codigo-PHP
$newArrayofObject = array(
  (object)array( "cod_empresa" => 1, "nombre" => "IPSP" ),
  (object)array( "cod_empresa" => 2, "nombre" => "MANESIL" ),
  (object)array( "cod_empresa" => 3, "nombre" => "SUPESCA" ),
  (object)array( "cod_empresa" => 4, "nombre" => "BRESSON" ),
  (object)array( "cod_empresa" => 5, "nombre" => "CRESSON" ),
  (object)array( "cod_empresa" => 6, "nombre" => "DRESSON" ),
  (object)array( "cod_empresa" => 7, "nombre" => "FRESSON" ),
  (object)array( "cod_empresa" => 8, "nombre" => "GRESSON" ),
);
$arrayReverse = array_reverse($newArrayofObject);
$camaronera = null;
foreach ($arrayReverse as $value) {
    // $children = array($value);
    // $objTmp = $camaronera;
    // $objTmp->children = $children;
    // $camaronera = $objTmp;
    // $arrayAcum = array();
    $boo = (is_null($camaronera))?false:true;
    $tmp = array($camaronera);
    $camaronera = $value;
    if($boo){
        $camaronera->children = $tmp;
    }
}
var_dump($camaronera);
