<?php 
include("controller\protecao.php");
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view\style2.css">
    <link rel="stylesheet" href="view\style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Painel</title>
</head>
<body>
    <header>
        <div class="esquerda">
            <div id="perfil" style="margin-bottom: 10px; cursor: pointer;" onclick="window.location.href = 'http://localhost/PHP-BACK-CEDRO/perfil.php'"></div>
            <label>Perfil</label>
        </div>
        <div class="direita">
            <div class="header"> 
                <input type="text" name="pesquisa" class="inp_text" style="width: 300px">
                <div class="image"></div>
                <span class="material-symbols-outlined" style="cursor: pointer;"  onclick="search()">search</span>
                <style>
                    .material-symbols-outlined {
                    font-variation-settings:
                    'FILL' 0,
                    'wght' 700,
                    'GRAD' 0,
                    'opsz' 48
                    }
                </style>
                </div>
            </div>
        </div>
        <div>
    </header>
    <main>
        <div id="ultimo_exame">
                <div class="carousel carousel-center">
                    <button class="prev">Anterior</button>
                    <ul>
                        <?php
                            include("model\banco\conexao.php"); //mesmo banco
                            $sql = "SELECT * FROM exames";
                            $result = mysqli_query($mysqli, $sql);

                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<li><img src='".$row['path']."'></li>";
                                }
                            }else{
                                echo "nenhuma imagem encontrada";
                            }
                        ?>
                            
                    </ul>
                    
                </div>
                <button class="next">Próximo</button>
            </div>
        </div>
    </main>
    <script>
        //perfil


        //carrossel
        const carousel = document.querySelector('.carousel');
        const carouselItems = carousel.querySelectorAll('li');
        let currentItem = 0;

        /*setInterval(() => {
            carouselItems[currentItem].style.display = 'none';
            currentItem = (currentItem + 1) % carouselItems.length;
            carouselItems[currentItem].style.display = 'block';
        }, 5000);*/

        const prevBtn = document.querySelector('.prev');
        const nextBtn = document.querySelector('.next');

        prevBtn.addEventListener('click', showPrev);
        nextBtn.addEventListener('click', showNext);

        function showPrev() {
            carouselItems[currentItem].style.display = 'none';
            currentItem = (currentItem - 1 + carouselItems.length) % carouselItems.length;
            carouselItems[currentItem].style.display = 'block';
        }

        function showNext() {
            carouselItems[currentItem].style.display = 'none';
            currentItem = (currentItem + 1) % carouselItems.length;
            carouselItems[currentItem].style.display = 'block';
        }
    </script>
</body>
</html>