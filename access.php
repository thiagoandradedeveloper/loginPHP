<?php

    session_start();

    if(isset($_POST['login'])):

        include 'conexao.php';

        $login = $_POST["login"];
        $senha = $_POST["senha"];

        $query = "SELECT * FROM adm WHERE `login` = '$login' AND `senha`= '$senha'";	
        $result = mysqli_query($con, $query);

        $_SESSION['condicao'] = false;

        if(mysqli_num_rows($result) > 0): 
            
            $_SESSION['condicao'] = true;
            
            while($row = mysqli_fetch_array($result)):
                nome = $row['nome'];
            endwhile;
        
        endif;

        if($_SESSION['condicao']): echo 'Logado!';
        else: echo 'Acesso negado!'; endif;

    endif;
?>