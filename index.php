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
   
   <div class="header-options">
      <a href="" >
      <svg width="15" height="15" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.3125 8.59375H13.2812V1.5625C13.2812 0.699707 12.5815 0 11.7188 0H10.1562C9.29346 0 8.59375 0.699707 8.59375 1.5625V8.59375H1.5625C0.699707 8.59375 0 9.29346 0 10.1562V11.7188C0 12.5815 0.699707 13.2812 1.5625 13.2812H8.59375V20.3125C8.59375 21.1753 9.29346 21.875 10.1562 21.875H11.7188C12.5815 21.875 13.2812 21.1753 13.2812 20.3125V13.2812H20.3125C21.1753 13.2812 21.875 12.5815 21.875 11.7188V10.1562C21.875 9.29346 21.1753 8.59375 20.3125 8.59375Z" fill="#407BFF"/>
</svg>
Adicionar
</a>
     <!-- <form action="">
        <div class="search-container">
         <input type="search" name="" id="">
         <button>
            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.6582 21.6162L19.79 16.748C19.5703 16.5283 19.2725 16.4062 18.96 16.4062H18.1641C19.5117 14.6826 20.3125 12.5146 20.3125 10.1562C20.3125 4.5459 15.7666 0 10.1562 0C4.5459 0 0 4.5459 0 10.1562C0 15.7666 4.5459 20.3125 10.1562 20.3125C12.5146 20.3125 14.6826 19.5117 16.4062 18.1641V18.96C16.4062 19.2725 16.5283 19.5703 16.748 19.79L21.6162 24.6582C22.0752 25.1172 22.8174 25.1172 23.2715 24.6582L24.6533 23.2764C25.1123 22.8174 25.1123 22.0752 24.6582 21.6162ZM10.1562 16.4062C6.7041 16.4062 3.90625 13.6133 3.90625 10.1562C3.90625 6.7041 6.69922 3.90625 10.1562 3.90625C13.6084 3.90625 16.4062 6.69922 16.4062 10.1562C16.4062 13.6084 13.6133 16.4062 10.1562 16.4062Z" fill="#7D7676"/>
            </svg>
        </button>
        </div>
         
      </form>-->
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