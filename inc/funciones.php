<?php

function obtenerProductos($cantidad = 10){
    include 'conexion.php';
    try{
        $sql = " select * from productos limit $cantidad ";
        $resultado = $bd->query( $sql );
    }catch(Exception $e){
        echo $e->getMessage();
        return array();
    }   
    return $resultado;
}

/**
 * Muestra un solo producto, pide el id del producto como parametro
 */
function obtenerProducto($id_producto){
    include 'conexion.php';

    try{
        $sql = " select nombre, imagen_completa, precio, descripcion, descripcion_corta from productos where id = $id_producto ";
        $resultado = $bd->query( $sql );
    } catch(Exception $e){
        echo $e->getMessage();
        return array();
    }
    return $resultado;
}

?>