<?php

include "../biblioteca.class.php";

//criação de um objeto ( p )
$b =  new Biblioteca();

//puxagem do html
$nomeA = $_POST['nomeA'];
$autorA = $_POST['autorA'];
$isbnA = $_POST['isbnA'];
$editoraA = $_POST['editoraA'];
$id = $_POST['id_livro'];

//setagem

$b->setTitulo($nomeA);
$b->setAutor($autorA);
$b->setISBN($isbnA);
$b->setEditora($editoraA);
$b->setId_Livro($id);

// mensagem de inserção
$b->updateLivros();

//estilo
echo "
        <style>
            div.centralizado > div#tabelaB > a {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: whitesmoke;
                padding: 20px;
                border-radius: 10px;
                text-align: center;
                text-decoration: none;
                color: black;
            }
        </style>
        ";
//link para o listarPessoas.php
echo "
        <div class='centralizado'>
            <div id='tabelaB'>
                <a href='../verLivros.php'>Voltar Para Os Registros</a>
            </div>
        </div>
    ";

?>