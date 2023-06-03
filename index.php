<?php

require_once 'modelos/producto.php';
require_once  'modelos/tipoproducto.php';


//instancia tipo producto
$t=new tipoproducto();
$t->id= 1;
$t->descripcion = 'galletitas';

//instancia producto
$p=new producto();
$p->id =1;
$p->nombre= 'merenguitas';
$p->precio=1000;
$p->stock=10;
$p->tipoproducto=$t;
$p-> MostrarDatos();
