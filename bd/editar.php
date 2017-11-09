<?php

    require 'conexao.php';
 
   $sql = 'UPDATE Cadastro SET id=:id, nome=:nome, endereco=:endereco, cpf=:cpf, telefone=:telefone, email=:email, login=:login, senha=:senha';
            $sql .= 'WHERE id = :id';
 
            $stm = $conexao->prepare($sql);
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
            endif;
 
            echo "<meta http-equiv=refresh content='3;URL=index.php'>";
        endif;
        ?>