<?php
    require_once '../Controller/UsuarioController.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>

<body>
    <h3>Cadastrar Uusuário</h3>
    <form action="" name="cadUsuario" id="cadUsuario" method="post">
        <label>Login: </label>
        <input type="text" name="login" id="login"><br />
        <label>Senha: </label>
        <input type="password" name="senha1" id="senha1"><br />
        <label>Confirmar Senha: </label>
        <input type="password" name="senha2" id="senha2"><br />
        <label>Permissão: </label>
        <select name="permissao" id="permissao">
            <option value="0">**SELECIONE**</option>
            <option value="A">Administrador</option>
            <option value="C">Comum</option>
        </select><br />
        <input type="submit" name="btnSalvar" id="btnSalvar" value="Salvar">
    </form>
</body>

</html>

<?php
if(isset($_POST['btnSalvar'])){

    call_user_func(array('UsuarioController','salvar'));
    header('Location: listUsuario.php');
}