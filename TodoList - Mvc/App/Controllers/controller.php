<?php

require_once __DIR__ . '/../Models/tarefa.php';

class TarefaController {
    private $tarefaModel;

    public function __construct() {
        $this -> tarefaModel = new Tarefas();
    }

    public function criar() {
        if(isset($_POST['descricao']) && !empty(trim($_POST['descricao']))){
            $this -> tarefaModel -> criar($_POST['descricao']);
        }

        header("location: index.php");
    }

    public function excluir() {
        if(isset($_POST['delete'])) {
            $this -> tarefaModel -> excluir($_GET['delete']);
        }

        header('location: index.php');
    }

    public function index() {
        $tarefas = $this -> tarefaModel -> listar();
        include __DIR__ . '/../Views/listar.php';
    }
}

?>