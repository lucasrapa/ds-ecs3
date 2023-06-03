<?php

class Producto
{
    public $id;
    public $nombre;
    public $precio;
    public $stock;
    public $tipoproducto;
    public function MostrarDatos()
    {

    echo 'Datos de producto'. '<br>';
    echo 'id' . $this->id .'<br>';
    echo 'nombre' . $this->nombre . '<br>';
    echo 'precio' . $this-> precio .'<br>' ;
    echo 'stock' . $this->stock . '<br>';
  


    echo '------------------------- <br>';
    echo 'tipo producto' .'<br>';
    echo 'id'.$this->tipoproducto->id . '<br>';
    echo 'descripcion' .$this->tipoproducto->descripcion . '<br>';


    }

  

}