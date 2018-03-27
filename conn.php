<?php
	
function conn() {
    
    	$db = mysqli_connect("localhost", "guianotu_geral", "xtdc1227", "guianotu_foto_db") or die("Erro ao selecionar banco");
        return $db;
    
}

