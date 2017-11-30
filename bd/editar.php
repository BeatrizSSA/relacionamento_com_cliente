<?php

    require 'conexao.php';
 
 
$stm = $conexao->prepare('UPDATE Cadastro SET nome= :nome, endereco= ?, cpf = ?, telefone = ?, email = ?, login =?,senha=?');
            
            $stm = 'WHERE id = ';
            $stm->bindValue(':id', $id);
            $stm->bindValue(':nome', $nome);
            $stm->bindValue(':endereco', $endereco);
            $stm->bindValue(':cpf', $cpf);
            $stm->bindValue(':telefone', $telefone); 
            $stm->bindValue(':email', $email);
            $stm->bindValue(':login', $login);
            $stm->bindValue(':senha', $senha);
            $retorno = $stm->execute();
 
            if ($retorno):
                echo "<div class='alert alert-success' role='alert'>Registro editado com sucesso, aguarde você está sendo redirecionado ...</div> ";
            else:
                echo "<div class='alert alert-danger' role='alert'>Erro ao editar registro!</div> ";
                echo "<meta http-equiv=refresh content='3;URL=index.php'>";
            endif;
 
            
        ?>