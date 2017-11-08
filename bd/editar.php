<?php

    require 'conexao.php';
 
   $sql = 'UPDATE Cadastro SET Id=:Id, Nome=:Nome, Endereco=:Endereco, Cpf=:Cpf, Telefone=:Telefone, Email=:Email, Login=:Login, Senha=:Senha';
            $sql .= 'WHERE Id = :Id';
 
            $stm = $conexao->prepare($sql);
            $stm->bindValue(':Id', $Id);
            $stm->bindValue(':Nome', $Nome);
            $stm->bindValue(':Endereco', $Endereco);
            $stm->bindValue(':Cpf', $Cpf);
            $stm->bindValue(':Telefone', $Telefone); 
            $stm->bindValue(':Email', $Email);
            $stm->bindValue(':Login', $Login);
            $stm->bindValue(':Senha', $Senha);
            $retorno = $stm->execute();
 
            if ($retorno):
                echo "<div class='alert alert-success' role='alert'>Registro editado com sucesso, aguarde você está sendo redirecionado ...</div> ";
            else:
                echo "<div class='alert alert-danger' role='alert'>Erro ao editar registro!</div> ";
            endif;
 
            echo "<meta http-equiv=refresh content='3;URL=index.php'>";
        endif;
        ?>