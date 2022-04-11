
<?php

Include 'conexao.php';

$instituicao = $_POST['select_inst'];
$nome = $_POST['txt_user'];
$ra = $_POST['txt_ra'];
$email = $_POST['txt_email'];
$data_de_nascimento = $_POST['txt_dtNasc'];
$cpf = $_POST['txt_cpf'];
$senha = $_POST['txt_senha1'];
$confirme_senha = $_POST['txt_senha2'];
    if ($senha != $confirme_senha) {
        //frase:"as senhas inseridas são diferentes"
    }
    else {
        $sql = mysql_query("select * from tb_login where email='$email' or ra='$ra'");

        if (mysql_num_rows($sql) > 0) {
        
            // inserir mensagem de erro
        	echo "<center>";
        	echo "<hr>";
        	echo "Email ou RA já CADASTRADO!!!";
        	echo "<hr>";
        	echo "<a href=\"index.html\">VOLTAR</a>";
        }

        else {
        	$sql=mysql_query("insert into tb_login (instituicao, nome, ra, email, data_nasci, cpf, senha, cnf_senha) values ('$nome', '$ra', '$email', '$data_de_nascimento', '$cpf', '$senha', '$confirme_senha')");
        
        	echo "<center>";
        	echo "<hr>";
        	echo "USUARIO CADASTRADO COM SUCESSO!!!";
        	echo "<hr>";
        	echo "<a href=\"index.html\">VOLTAR</a>";
        }
    }
?>

