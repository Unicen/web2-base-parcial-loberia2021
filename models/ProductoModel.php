<?php

require_once('example.model.php');

class ProductoModel extends ExampleModel {

    public function getProductoImportadoCant($cantidad)
    {
        $query = $this->getDb()->prepare('SELECT * FROM producto WHERE (importado = 1 AND cantidad  = ?) VALUES (?)');
        $query->execute([$cantidad]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}