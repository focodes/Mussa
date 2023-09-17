<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrativo - datos del sitio</title>
    <!-- Agregar los estilos de Bootstrap para la estructura básica -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="ckfinder/ckfinder.js"></script>
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="admincss/cssadmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    .select__form {
        text-align: center;
        margin-bottom: 30px;
    }

    .select__categorias {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
    }

    .categoriax {
        display: flex;
        align-items: center;
    }

    .radio-label {
        font-size: 18px;
        cursor: pointer;
        user-select: none;
    }

    .categoriax input[type="radio"] {
        display: none;
    }

    .categoriax label::before {
        content: "";
        display: inline-block;
        width: 20px;
        height: 20px;
        margin-right: 8px;
        background-color: #007bff;
        /* Cambia el color de fondo del radio button */
        border-radius: 50%;
        border: 2px solid #007bff;
        /* Cambia el color del borde del radio button */
        position: relative;
        top: 5px;
    }

    .categoriax input[type="radio"]:checked+label::before {
        background-color: #28a745;
        /* Cambia el color de fondo cuando está seleccionado */
        border-color: #28a745;
        /* Cambia el color del borde cuando está seleccionado */
    }


    .form-group.files {
        text-align: center;
        margin-top: 20px;
    }

    .form-title {
        font-size: 16px;
        margin-bottom: 10px;
    }

    .drop-container {
        border: 2px dashed #007bff;
        /* Cambia el color del borde del área de carga */
        padding: 20px;
        cursor: pointer;
    }

    .drop-title {
        font-weight: bold;
        color: #007bff;
        /* Cambia el color del título del área de carga */
    }

    .file-input {
        display: none;
    }

    .file-name {
        margin-top: 10px;
        color: #333;
        font-weight: bold;
    }

    .file-input:not(:disabled)+.file-name::after {
        content: "Ningún archivo seleccionado";
    }

    .file-input:not(:disabled):valid+.file-name::after {
        content: attr(data-file-name);
        color: #28a745;
        /* Cambia el color del nombre del archivo cuando está seleccionado */
    }
    </style>
</head>

<body>
    <!-- Encabezado -->
    <!-- incluir el menu para que no se este repitiendo el codigo -->
    <?php include "menu.php";?>
    <!-- incluir el menu para que no se este repitiendo el codigo -->
    <div class="container">

        <main class="formularios">
            <div class="alert-error">
            </div>

            <div class="select__form seccion">
                <h1 class="heading">Seleccione su categoría</h1>
                <div class="select__categorias">
                    <div class="categoriax">
                        <input type="radio" name="categoria" id="checkbox-ponente" checked>
                        <label for="checkbox-ponente" class="radio-label">Ponente</label>
                    </div>
                    <div class="categoriax">
                        <input type="radio" name="categoria" id="checkbox-poster">
                        <label for="checkbox-poster" class="radio-label">Poster</label>
                    </div>
                </div>
            </div>

            <section class="categorias seccion" id="ponente">
                <div class="categoria">
                    <div class="title-categorias">
                        <h1 class='heading'>Ponente</h1>
                        <div class="descargar-formato">
                            <p><span>Recuerda:</span> Debes descargar el formato necesario para esta actividad</p>
                            <button class="btn btn-warning" id="descargar" onclick="descargarArchivoPonente()">Descargar
                                <i class="fa-solid fa-download"></i></button>
                        </div>
                    </div>
                    <div class="formulario">
                        <form action="includes/config/registrarPonentes.php" method="POST" class="form"
                            id="form-ponente" enctype="multipart/form-data">
                            <fieldset>
                                <legend>Información de Participación</legend>
                                <div class="form-group">
                                    <label for="ejetematico" class="text">Eje temático:</label>
                                    <select id="ejetematico" class="form-control" onchange="mostrar()"
                                        name="ejetematico">
                                        <option value="">Seleccione una opción</option>
                                        <option value="Empresarial">Empresarial</option>
                                        <option value="Agroindustrial">Agroindustrial</option>
                                        <option value="Agropecuario">Agropecuario</option>
                                        <option value="Energías renovables">Energías renovables</option>
                                        <option value="Protección al medio ambiente">Protección al medio ambiente
                                        </option>
                                        <option value="Arquitectura y Construcciones Sostenibles">Arquitectura y
                                            Construcciones Sostenibles</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Institucion" class="text">Institución de participación:</label>
                                    <select id="Institucion" class="form-control" onchange="mostrar()"
                                        name="tipoInstitucion">
                                        <option value="">Seleccione una opción</option>
                                        <option value="SENA">SENA</option>
                                        <option value="Externa">Externa</option>
                                    </select>
                                </div>
                                <div class="mostrar-input-externa">
                                    <div class="form-group">
                                        <label for="externa" class="text">Define tu Institución:</label>
                                        <input type="text" placeholder="Nombre de la institución..." name="externa"
                                            class="form-control" id="externa">
                                    </div>
                                </div>
                                <div class="mostrar-input-sena">
                                    <div class="form-group">
                                        <label for="titulada" class="text">Titulada:</label>
                                        <input type="text" placeholder="Nombre de la titulada.." name="titulada"
                                            class="form-control" id="titulada">
                                    </div>
                                    <div class="form-group">
                                        <label for="ficha" class="text">Ficha:</label>
                                        <input type="text" placeholder="# de ficha..." name="ficha" class="form-control"
                                            id="ficha" pattern="[0-9]{4,20}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Ponentes" class="text">Número de ponentes:</label>
                                    <select id="Ponentes" name="numeroPonentes" class="form-control"
                                        onchange="crearCampos()">
                                        <option value="">Seleccione una opción</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="coolinput" id="contenedorPonentes"></div>
                                <div class="form-group">
                                    <label for="titulo" class="text">Título del Proyecto:</label>
                                    <input type="text" placeholder="..." name="titulo" class="form-control" id="titulo">
                                </div>
                                <div class="form-group">
                                    <label for="tipoProyecto" class="text">Tipo de proyecto:</label>
                                    <select name="tipoProyecto" id="tipoProyecto" class="form-control">
                                        <option value="">Seleccione una opción</option>
                                        <option value="Formativo">Formativo</option>
                                        <option value="Productivo">Productivo</option>
                                        <option value="SENNOVA">SENNOVA</option>
                                        <option value="Externo">Externo</option>
                                    </select>
                                </div>

                                <div class="form-group files">
                                    <p class="form-title">Sube tus documentos:</p>
                                    <p class="form-title">Se debe cargar documento en formato Word con la información
                                        del proyecto y documento en PowerPoint o PDF con la presentación del proyecto.
                                        (Limite de tamaño: 20 MB por documento).</p>
                                    <label for="archivo_1" class="drop-container">
                                        <span class="drop-title">Selecciona tus archivos PDF o PowerPoint aquí:</span>
                                        <input type="file" name="archivo_1" accept=".pdf,.pptx" id="archivo_1"
                                            class="file-input">
                                        <span class="file-name">Ningún archivo seleccionado</span>
                                    </label>
                                    <label for="archivo_2" class="drop-container">
                                        <span class="drop-title">Selecciona tus archivos Word aquí:</span>
                                        <input type="file" name="archivo_2" accept=".docx" id="archivo_2"
                                            class="file-input">
                                        <span class="file-name">Ningún archivo seleccionado</span>
                                    </label>
                                </div>

                            </fieldset>
                            <button class="btn btn-success" type="submit" value="Registrarme"
                                class="button-registro">Registrarme</button>
                        </form>
                    </div>
                </div>
            </section>
            <!-- FORMULARIO PARA LA CATEGORIA POSTER -->
            <section class="categorias seccion" id="poster">
                <div class="categoria">
                    <div class="title-categorias">
                        <h1 class='heading'>Poster</h1>
                        <div class="descargar-formato">
                            <p>Recuerda: Debes descargar el formato necesario para esta actividad</p>
                            <button class="btn btn-warning" id="descargar" onclick="descargarArchivoPoster()">Descargar
                                <i class="fa-solid fa-download"></i></button>
                        </div>
                    </div>
                    <div class="formulario">
                        <form action="../../includes/config/registrarPoster.php" method="POST" id="form-poster"
                            class="form" enctype="multipart/form-data">
                            <fieldset>
                                <legend>Información de Participación</legend>
                                <div class="form-group">
                                    <label for="nombreInstitucion" class="text">Institución:</label>
                                    <input type="text" placeholder="Nombre de la Institución" name="nombreInstitucion"
                                        class="form-control" id="nombreInstitucion">
                                </div>
                                <div class="form-group">
                                    <label for="participantes" class="text">Participantes:</label>
                                    <select id="participantes" name="participantes" class="form-control"
                                        onchange="crearCampos()">
                                        <option value="">Seleccione una opción</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div id="contenedorParticipantes"></div>
                                <div class="form-group">
                                    <label for="tituloProyecto" class="text">Título del proyecto:</label>
                                    <input type="text" placeholder="..." name="tituloProyecto" class="form-control"
                                        id="tituloProyecto">
                                </div>
                                <div class="form-group files">
                                    <p class="form-title">Se debe cargar la presentación o diseño del poster en PDF.
                                        (Tamaño máximo del documento 20Mb)</p>
                                    <p class="form-title">El documento debe ir nombrado por el título del proyecto.</p>
                                    <label for="archivo" class="drop-container">
                                        <span class="drop-title">Selecciona tus archivos aquí.</span>
                                        <input type="file" accept=".pdf" id="archivo" name="archivo">
                                    </label>
                                </div>
                            </fieldset>
                            <button class="btn btn-success" type="submit" value="Registrarme"
                                class="button-registro">Registrarme</button>
                        </form>
                    </div>
                </div>
            </section>
            <section class="flex-wrap">
                <h1 class="heading">Otros Concursos</h1>
                <div class="cards">
                    <div class="concurso">
                        <div class="contain" data-aos="fade-up">
                            <div class="card card-2">
                                <h1>Feria Empresarial</h1>
                                <a href="/views/Registro/feriaEmpresarial.php" class="btn btn-primary">Inscribirse</a>
                            </div>
                        </div>
                    </div>
                    <div class="concurso">
                        <div class="contain" data-aos="fade-up">
                            <div class="card card-3">
                                <h1>Torneo de Robótica</h1>
                                <a href="/views/Registro/Robotica.php" class="btn btn-primary">Inscribirse</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

    </div>
    <br />
    <!-- Footer  -->
    <?php include "footer_administracion.php";?>
    <!-- Footer  -->
    <!-- Agregar los scripts de Bootstrap (jQuery y Popper.js) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../../js/form_academico.js"></script>
</body>

</html>