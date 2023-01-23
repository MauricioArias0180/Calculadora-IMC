<?php

if (isset($_POST["0"] ) && isset($_POST["1"])) {
   

$peso = $_POST["0"] ;
$altura = $_POST["1"];


$imc= $peso / ($altura * $altura);
$imc= round($imc,1);


if ($imc <18.5) {
$resultado= "Peso inferior al normal";
$color= "orange";
} 
if ($imc >=18.5 && $imc <24.9) {
    $resultado= "Normal";
    $color= "green";
    }
if ($imc >=24.9 && $imc <29.9) {
    $resultado= "Peso superior al normal";
    $color= "blue";
     }
     elseif($imc > 30)  {
        $resultado= "Obesidad";
        $color= "orange";
     }
}        
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Calcula tu IMC</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">Calculadora IMC</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Consejos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Bienvenido a la calculadora IMC</h1>
                <p class="lead">Empieza a calcular tu indice de masa corporal</p>
                <a class="btn btn-lg btn-light" href="#about">Comienza ahora!</a>
            </div>
        </header>
        <!-- About section-->
        <section id="about">
            <div class="container px-4">
                <div class="row gx-8 justify-content-center">
                    <div class="col-lg-8">
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="imagenes\img-salud.jpg" alt="imagen salud"></a>
                         <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <form action="index.php" method="post">
                                      <h3>Peso (kg)</h3> <label for="$peso"> <input type="number"step=".01" name="0" placeholder="ingrese su peso" required></label>
                                      <br>
                                      <br>
                                      <h3>Altura (mt)</h3>  <label for="$altura"> <input type="number"step=".01" name="1" placeholder="ingrese su altura" required></label><br><br>
                                      <input class="btn btn-primary" type="submit" value="Calcular">
                                 </form> 
                                </div>
                            <div class="col-lg-6">
                                <?php if(isset($imc))   {?>
                                <?php echo "Tu indice de masa corporal es de:". $imc; ?>
                                <br><br>
                                <div style="color:<?php echo $color;?>">Resultado:<?php echo $resultado; ?></div>
                                <?php } ?>
                           </div>
                            </div>
                         </div>
                    </div>
                    </div>
                </div>
            </div>
             
        </section>
        <!-- Services section-->
        <section class="bg-light" id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Agunos consejos para cuidarte</h2>
                        <ul class="lead">
                            <li> Incorporar a diario alimentos de todos los grupos y realizar al menos 30 minutos de actividad física</li>
                            <li>Tomar a diario 8 vasos de agua segura</li>
                            <li>Consumir a diario 5 porciones de frutas y verduras en variedad de tipos y colores</li>
                            <li>Reducir el uso de sal y el consumo de alimentos con alto contenido de sodio</li>
                            <li>Limitar el consumo de bebidas azucaradas y de alimentos con elevado contenido de grasas, azúcar y sal</li>
                            <li>Consumir diariamente leche, yogur o queso, preferentemente descremados</li>
                            <li> Al consumir carnes quitarle la grasa visible, aumentar el consumo de pescado e incluir huevo</li>
                            <li>Consumir legumbres, cereales preferentemente integrales, papa, batata, choclo o mandioca</li>
                            <li>Consumir aceite crudo como condimento, frutas secas o semillas</li>
                            <li>El consumo de bebidas alcohólicas debe ser responsable. Los niños, adolescentes y mujeres embarazadas no deben consumirlas. Evitarlas siempre al conducir</li>
                        </ul>
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact section-->
        <section id="contact">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Consulta con un profesional de la salud</h2>
                        <a class="btn btn-primary" href="https://www.facebook.com/templekinesiologia/">Click aqui para asesorarte</a>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; Mi sitio 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
