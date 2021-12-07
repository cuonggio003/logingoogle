<?php

namespace App\Http\Controllers;



interface BaseInterface
{
    public function showNote();
    public function createNote();
  
    public function updateNote($id);
}