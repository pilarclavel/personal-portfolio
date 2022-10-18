<?php

define('nombre', 'Pilar Clavel');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="./js/script.js" defer></script>
</head>

<body>

    <header class="header active">

        <nav class="navbar v-line" id=menu>
            <a href="#home" class="active">
                <h3 class="num">01</h3>Inicio
            </a>
            <a href="#about">
                <h3 class="num">02</h3>Sobre mi
            </a>

        </nav>


    </header>


    <section class="home" id="home">
        <div class="content">
            <h3 data-aos="fade-up" class="im">I am <h3 data-aos="fade-up" class="pil"> <?php echo '<h3 data-aos="fade-up" class="pil">'.nombre.

'</h3>' ?>
            </h3>
        </div>
        <div class="image" data-aos="fade-right">
            <img src="images/Foto1.png" alt="">
        </div>
    </section>
    <section class="about" id="about">

        <div class="image" data-aos="fade-right">
            <img src="images/Foto2.png" alt="">
        </div>
        <div class="content">
            <div class=title>
                <h3 data-aos="fade-up ">I am a </h3>
                <h3 class="typing" data-aos="fade-up"> </h3>
            </div>

            <p>¡Hola! Antes de nada me presento. Me llamo Pilar, tengo 24 años y estudié Publicidad y Relaciones
                Públicas. Siempre supe que quería dedicar mi vida a estar en contacto con los demás, sea de la manera
                que fuese. Y por eso, durante la carrera descubrí que mis dos pasiones pueden estar presentes en mi vida
                todos los días: crear y compartirlo con los demás. </p>
        </div>
    </section>
    <a href="./aboutme.php"> <button class="homediscover">DESCUBRE MÁS</button></a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"
        defer></script>

    <script>
    AOS.init({
        duration: 800,
        delay: 300
    });
    </script>

</body>

</html>