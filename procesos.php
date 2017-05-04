<?php

$lista_procesos = array(
    $produco_por_codigo = "
        CREATE PROCEDURE producto_por_codigo
          @cod char(6)
        AS
          SELECT Nombre, CodSubFamilia, Stock
          FROM Productos
          WHERE CodProducto = @cod"
    ,
    $total_productos = "
        CREATE PROCEDURE total_productos
        AS
          SELECT Nombre, CodSubFamilia, Stock, CodLargo, CodProducto, PrecioBruto4
          FROM Productos"
    ,
    $total_familias = "
        CREATE PROCEDURE total_familias
        AS
          SELECT CodFamilia, Nombre
          FROM Familias"
    ,
    $total_subfamilias = "
        CREATE PROCEDURE total_subfamilias
        AS
          SELECT CodSubFamilia, CodFamilia, Nombre
          FROM SubFamilias"
    ,
    $productos_por_cod_sub = "
        CREATE PROCEDURE productos_por_cod_sub
          @cod_sub_familia char(10)
        AS
          SELECT Nombre, CodProducto, Stock
          FROM Productos
          WHERE CodSubFamilia = @cod_sub_familia"
  );


  ?>
