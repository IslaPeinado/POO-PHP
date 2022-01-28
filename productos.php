<?php
    class Productos{

        private string $id;
        private string $nombre;
        private int $unidades;
        private float $precio;
        private float $iva=0.21;

        public function __construct(string $producto, string $cliente, string $stock, string $precio){
            $this->id=$producto;
            $this->nombre=$cliente;
            $this->unidades=$stock;
            $this->precio=$precio;
        }



    /* SET */
        public function setId(string $id):void{
            $this->id=$id;
        }

        public function setNombre(string $nombre):void{
            $this->nombre=$nombre;
        }

        public function setUnidades(int $unidades):void{
            $this->unidades=$unidades;
        }

        public function setPrecio(float $precio):void{
            $this->precio=$precio;
        }



    /* GET */
        public function getId():string{
            return $this->id;
        }

        public function getNombre():string{
            return $this->nombre;
        }

        public function getUnidades():int{
            return $this->unidades;
        }

        public function getPrecio():float{
            return $this->precio;
        }


    }