<?php
class Arte{
    public $artista;
    public $obra;

    function __construct($artista, $obra)  {
        $this->artista =$artista;
        $this->obra =$obra;

    }

    function get_artista() {
        return $this->artista;
    }

    function get_obra() {
        return $this->obra;
    
    }
}

$artista = new Arte("Van Gogh","Noite estrelada");

echo " O artista  é: " . $artista->get_artista();
echo " A obra do artista é: " . $artista->get_obra();

?>