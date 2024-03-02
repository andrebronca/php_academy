<?php

class MessageClass {

    //constantes podem ser propriedades ou métodos
    const EXIT_MESSAGE = "Thank you for coming to my TEDDY talk!";

    public function thankYouBye(){
        //self:: para acessar a constante de dentro da classe
        echo self::EXIT_MESSAGE;
    }
}