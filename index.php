<!DOCTYPE html>
<html lang="en">
<head>
   
	

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Document</title>
</head>
<body>



   <section class="lista-container">
    <?php
            include './conexao/conexao.php';

            $sql= "SELECT * FROM `agenda` ORDER BY nome ASC";
            $busca = mysqli_query($conexao, $sql);

            while ($array= mysqli_fetch_array($busca)){
                $id= $array['id'];
                $nome= $array['nome'];
                $telefone=$array['telefone'];

    ?>
        <div class="contato-item">
            <p><?php echo $nome?></p>
            <div>
                <div>
                    <button type="button">Editar</button>
                    <button type="button">Excluir</button>
                </div>
            </div>
        </div>
    <?php }?>
   </section>
    
      


     
</body>
</html>