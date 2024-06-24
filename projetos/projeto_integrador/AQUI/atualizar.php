<?php
include "../biblioteca.class.php";

if(isset($_GET['id'])) {
    $id_Livro = $_GET['id'];

    $b = new Biblioteca();

    $livro = $p->getLivroById($id_Livro);


    // Verifica se a pessoa existe
    if($livro) {
        // Exibe o formulário com os dados preenchidos
        echo "
        <html>
        <head>
        <title>Atualizar Livro</title>
        <link rel='stylesheet' href='css/style.css'>
        </head>
        <body>
        <h2>Atualizar Pessoa</h2>
        <form action='salva.php' method='POST'>
            
            <input type='hidden' name='id_Livro' value='". $livro['ID_Livro'] ."'>
            
            <label for='nome'>Nome:</label><br>
            <input type='text' id='nome' name='nome' value='". $livro['Nome'] ."'><br>
            
            <label for='autor'>Autor:</label><br>
            <input type='text' id='autor' name='autor' value='". $livro['Autor'] ."'><br>
            
            <label for='isbn'>ISBN:</label><br>
            <input type='number' id='isbn' name='isbn' value='". $livro['ISBN'] ."'><br>
            
            <label for='editora'>Editora:</label><br>
            <input type='number' id='editora' name='editora' value='". $livro['Editora'] ."'><br>
            
            <input type='submit' value='Atualizar'>
        </form>
        </body>
        </html>";
    } else {
        echo "Pessoa não encontrada.";
    }
} else {
    echo "ID não foi fornecido.";
}
?>