<?php
session_start();

if(!isset($_SESSION["Validado"]) || $_SESSION["Validado"] == "NO")
{
   echo "<script>window.location.href='index.php'</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Innovation Week | UTEQ</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/validate.js" ></script>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
     
        <!-- Page Content  -->
        <div id="content" style="margin-top:20px">

            <div class="card">
                <div class="card-header text-center">
                    <div class="container">
                        <div class="row">
                        <div class="col-sm-1">
                            <img src="assets/img/Logo_uteq.png" style="max-height:80px"/>
                        </div>
                        <div class="col-sm-11">
                            <h3 class="card-title">Semana de innovación</h3>
                            <h5 class="card-text">FORMATO DE EVALUACIÓN DE PROYECTOS</h5>
                        </div>
                        </div>
                        
                    </div>   
                    
                </div>
                <div class="card-body">
                    <form  onsubmit="return validateForm()" id="regForm" action="guardar.php" method="post">
                   
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="Proyecto">Nombre del proyecto:</label>
                        </div>
                        <select class="custom-select" require id="Proyecto" name="Proyecto">
                            <option value="0" selected>Seleccione...</option>
                            <?php include("opcionesproyecto.php"); ?>

                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="tipoProyecto">Tipo de Proyecto:&emsp;&emsp;</label>
                        </div>
                        <select class="custom-select" require id="tipoProyecto" name="tipoProyecto">
                            <option value="0" selected>Seleccione...</option>
                            <option value="1">Investigación aplicada</option>
                            <option value="2">Mejora a instalaciones</option>
                            <option value="3">Servicio</option>
                            <option value="4">Producto</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nombre del evaluador:</span>
                        </div>
                        <input type="text" class="form-control" id="nombreEvaluador" name="nombreEvaluador" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Correo del evaluador:&nbsp;&nbsp;</span>
                        </div>
                        <input type="mail" class="form-control" id="correoEvaluador" name="correoEvaluador" placeholder="Correo" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>

                    <hr/>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10"><p class="instrucciones"><strong>Instrucciones:</strong> Seleccione la casilla de verificación el cumplimiento del criterio correspondiente.</p></div>
                            <div class="col-sm-2"><a href="indicaciones.php" class="btn btn-primary"  target="_blank">Indicaciones</a></div>

                        </div>
                    </div>
                    

                    <!--div class="jumbotron"-->
                        <p class="instrucciones">
                            1. Relevancia
                        </p>
                        <div class="input-group mb-3">
                            <input type="text" readonly value="Análisis adecuado de la situación." class="form-control" aria-label="Text input with checkbox">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input id="chkres1-1" name="chkres1-1" type="checkbox" aria-label="Checkbox for following text input" onchange="Validate()">
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" readonly value="Declaración de objetivos concretos, de acuerdo con el planteamiento del problema (Necesidad o solución) ." class="form-control " aria-label="Text input with checkbox">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input id="chkres1-2" name="chkres1-2"  type="checkbox" aria-label="Checkbox for following text input" onchange="Validate()">
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" readonly value="Identificación clara de beneficios y beneficiarios." class="form-control" aria-label="Text input with checkbox">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input id="chkres1-3" name="chkres1-3"   type="checkbox" aria-label="Checkbox for following text input" onchange="Validate()">
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" readonly value="Planteamiento de proyecto claro." class="form-control" aria-label="Text input with checkbox">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input id="chkres1-4" name="chkres1-4"   type="checkbox" aria-label="Checkbox for following text input" onchange="Validate()">
                                </div>
                            </div>
                        </div>
                        <p class="instrucciones">
                            2. Factibilidad técnica.
                        </p>
                        <div class="input-group mb-3">
                            <input type="text" readonly value="Definición de técnicas, herramientas y/o tecnología adecuadas." class="form-control" aria-label="Text input with checkbox">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input id="chkres2-1" name="chkres2-1"   type="checkbox"  aria-label="Checkbox for following text input" onchange="Validate()">
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" readonly value="Definición clara de operación." class="form-control " aria-label="Text input with checkbox">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input id="chkres2-2" name="chkres2-2"   type="checkbox" aria-label="Checkbox for following text input" onchange="Validate()">
                                </div>
                            </div>
                        </div>

                        <p class="instrucciones">
                            3. Eficiencia.
                        </p>
                        <div class="input-group mb-3">
                            <input type="text" readonly value="Se realizó un diseño de proyecto adecuado." class="form-control" aria-label="Text input with checkbox">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input id="chkres3-1" name="chkres3-1"   type="checkbox"  aria-label="Checkbox for following text input" onchange="Validate()">
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" readonly value="Se materializaron resultados en términos de calidad y cantidad de actividades." class="form-control " aria-label="Text input with checkbox">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input id="chkres3-2" name="chkres3-2"   type="checkbox" aria-label="Checkbox for following text input" onchange="Validate()">
                                </div>
                            </div>
                        </div>

                        <p class="instrucciones">
                            4. Efectividad.
                        </p>
                        <div class="input-group mb-3">
                            <input type="text" readonly value="Se lograron los propósitos y fines del proyecto. " class="form-control" aria-label="Text input with checkbox">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input id="chkres4-1" name="chkres4-1"   type="checkbox"  aria-label="Checkbox for following text input" onchange="Validate()">
                                </div>
                            </div>
                        </div>
                        <p class="instrucciones">
                            5. Impacto positivo.
                        </p>
                        <div class="input-group mb-3">
                            <input type="text" readonly value="Mejoras en distintas áreas en los que aplica el proyecto." class="form-control" aria-label="Text input with checkbox">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input id="chkres5-1" name="chkres5-1"   type="checkbox"  aria-label="Checkbox for following text input" onchange="Validate()">
                                </div>
                            </div>
                        </div>
                        
                        <p class="instrucciones">
                            6. Calidad de la presentación
                        </p>
                        <div class="input-group mb-3">
                            <input type="text" readonly value="Comunicación efectiva (Cumplió con el propósito de comunicar, argumentar y referir construcción de conocimiento)." class="form-control" aria-label="Text input with checkbox">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input id="chkres6-1" name="chkres6-1"   type="checkbox" aria-label="Checkbox for following text input" onchange="Validate()">
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" readonly value="Presenta productos comunicativos con calidad." class="form-control" aria-label="Text input with checkbox">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input id="chkres6-2" name="chkres6-2"   type="checkbox" aria-label="Checkbox for following text input" onchange="Validate()">
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" readonly value="Demuestra preparación y dominio del proyecto." class="form-control" aria-label="Text input with checkbox">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input id="chkres6-3" name="chkres6-3"   type="checkbox" aria-label="Checkbox for following text input" onchange="Validate()">
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" readonly value="Fue una buena proyección en cuanto a actitud y discurso para la exposición a cargo del equipo." class="form-control " aria-label="Text input with checkbox">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input id="chkres6-4" name="chkres6-4"   type="checkbox" aria-label="Checkbox for following text input" onchange="Validate()">
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="input-group mb-3">
                            <span class="form-control text-right" id="basic-addon2">Puntuación:</span>
                            <div class="input-group-append">
                            <input  type="text" class="input-group-text" readonly  id="total" name="total" placeholder="0" aria-label="0" aria-describedby="basic-addon2">
                                
                            </div>
                        </div>
                        <div class="float">
                            <i class="fas fa-check-square my-float"></i> Puntos: <span id="puntosflot">0</span>
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" value="Enviar"/>
                        
                    </form>
                </div>
                <div class="card-footer text-center">
                    UTEQ 2021. Desarrollado por: <a href="mailto:gabriel.martin@uteq.edu.mx">Gabriel A. Martín Vega</a>
                </div>
            </div>

            

            
        </div>
    </div>
      
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>