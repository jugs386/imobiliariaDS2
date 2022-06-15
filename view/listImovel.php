<?php
    require_once '../controller/ImovelController.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imobiliaria Viver Bem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<h1>Imóveis</h1>
<hr />
<div>
<table class="table table-bordered table-striped" style="top:40px;">
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Tipo</th>
                <th><a href="">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $imoveis = call_user_func(array('ImovelController','listar'));
                if(isset($imoveis)){
                    foreach($imoveis as $imovel){
            ?>
                        <tr>
                            <td><?php echo $imovel->getDescricao();?></td>
                            <td><?php echo $imovel->getTipo();?></td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Editar</a>
                                <a href="" class="btn btn-primary btn-sm">Excluir</a>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>