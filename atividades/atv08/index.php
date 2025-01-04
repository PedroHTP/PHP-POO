<?php

interface Crud {
    public function create($data);
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud {

    public function create($data)
    {
        // lógica de criar uma notícia
    }

    public function read()
    {
        // lógica de ler uma notícia
    }

    public function update()
    {
        // lógica de atualizar uma notícia
    }
    
    public function delete()
    {
        // lógica de deletar uma notícia
    }

}