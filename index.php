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


   <h1>Contatos</h1>
   
   <div>
      <button type="button">Adicionar</button>
      <form action="">
         <input type="search" name="" id="">
         <button>Buscar</button>
      </form>
   </div>

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
            <div class="img-icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_28_67)">
                <path d="M10 11.25C13.1055 11.25 15.625 8.73047 15.625 5.625C15.625 2.51953 13.1055 0 10 0C6.89453 0 4.375 2.51953 4.375 5.625C4.375 8.73047 6.89453 11.25 10 11.25ZM15 12.5H12.8477C11.9805 12.8984 11.0156 13.125 10 13.125C8.98438 13.125 8.02344 12.8984 7.15234 12.5H5C2.23828 12.5 0 14.7383 0 17.5V18.125C0 19.1602 0.839844 20 1.875 20H18.125C19.1602 20 20 19.1602 20 18.125V17.5C20 14.7383 17.7617 12.5 15 12.5Z" fill="white"/>
                </g>
                <defs>
                <clipPath id="clip0_28_67">
                <rect width="20" height="20" fill="white"/>
                </clipPath>
                </defs>
            </svg>


            </div>
            
            
            <p><?php echo $nome?></p>
                
    
            
        </div>
    <?php }?>
   </section>
    
      


     
</body>
</html>