
<?php

    class ItensController {
    	// constructor
    	function __construct($conn, $numero) {
    		$this->conn = $conn;
            $this->numero = $numero;    	
    	}

        // retrieving products data
        public function index() {
            $data  =  array();
            $num = $this->numero;
            $sql   =  "SELECT * FROM vs_pdf_itens_pedido WHERE NF = '$num'";            
            $result =  $this->conn->query($sql);            
            if($result->num_rows > 0) {            
                $data =  mysqli_fetch_all($result, MYSQLI_ASSOC);            
            }           
           //$db->close($conn);           
           return $data;
        }
    }
?>