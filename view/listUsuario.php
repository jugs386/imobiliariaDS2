<?php
    require_once '../controller/UsuarioController.php';

?>
<h1>Usuários</h1>
<hr />
<div>
    <table style="top:40px;">
        <thead>
            <tr>
                <th>Login</th>
                <th>Permissão</th>
                <th><a href="">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $usuarios = call_user_func(array('UsuarioController','listar'));
                if(isset($usuarios)){
                    foreach($usuarios as $usuario){
            ?>
                        <tr>
                            <td><?php echo $usuario->getLogin();?></td>
                            <td><?php echo $usuario->getPermissao();?></td>
                            <td>
                                <a href="">Editar</a>
                                <a href="">Excluir</a>

                            </td>
                        </tr>
                        <?php
                    }
                }else{
            ?>
            <tr>
                <td colspan="3">Nenhum registro cadastrado</td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>