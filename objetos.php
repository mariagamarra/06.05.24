<?php
class Fruta{
    public $nome;
    public$cor;

    function__construct($nome, $cor)  {
        $this->nome =$nome;
        $this->cor =$cor;

    }

    function get_nome() {
        return $this->nome
    }

    function get_cor() {
        return $this->cor
    
    }
}

$maca = new Fruta("Maçã","Vermelha");

echo " O nome da fruta é: " .$maca->get_nome();
echo " A cor da fruta é: " .$maca->get_cor();








