<?php

class View
{
    public function render($nombre)
    {
        require 'src/views/' . $nombre . '.php';
    }
}
