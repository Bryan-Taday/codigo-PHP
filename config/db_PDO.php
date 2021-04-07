<?php
Class conexion{
    private $usuario="root";
	private $pass="";
	private $dns="mysql:host=localhost:3306;dbname=practica";
	private $dbconn = null ;
	private $error = null ;

    public function conectar(){
        try{
            $this->dbconn = new PDO($this->dns, $this->usuario, $this->pass);
            $this->dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;
        }catch(PDOException $e){
            $this->error = $e->getMessage()." IN ".$e->getFile();
            return false;
        }
    }

    public function create(){
        
    }

    public function read(){
        if(!$this->conectar()){
            return $this->error;
            exit;
        }
        $query = "Select * from tbl_practica";
        $result_set = $this->dbconn->prepare($query);
		$result_set->execute();
		$result = $result_set->fetchAll();
		return $result;
    }

    public function update(){

    }

    public function delete(){

    }
}
?>