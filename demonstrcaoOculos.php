<?php
    include('servidor.php');
    $id = 1;//$_GET['id'];

    $sql = 'SELECT * FROM tb_armacoes WHERE id_arm = ?';
    $p = $serv->prepare($sql);
    $p->bindValue(1, $id);
    $p->execute();
    if($info = $p->fetch(PDO::FETCH_ASSOC)){
        // print_r($info);
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Óculos <?php echo($info['id_arm']); ?></title>
    <link rel="stylesheet" href="demonstrcaoOculos.css">
</head>
<body>
    <div id="caixa">
        <div id="conteudo">
            <div class="divImg">
                
            <img id="img" src="" alt=""/>
            </div>
            <h3><?php echo($info['nome_arm']); ?></h3>
            <p></p>
        </div>
    </div>
</body>
</html>

<!-- adm/img/<?php //echo($info['foto_arm']); ?> -->