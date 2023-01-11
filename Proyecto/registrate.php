<?php
header('Content-Type: text/html; charset=UTF-8');
if (isset($_REQUEST['enviar'])){

}
else
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>INICIAR SESIÓN</title>
    <link rel="stylesheet" href="./PAGINA.css">
</head>
<body>
    <header>
        <div class="header__superior">
            <div class="logo">
                <img src="img/techlaboscuro.png" name="logo">
            </div>
            <div class="search">
                <input type="search" id="search" placeholder="¿Qué deseas buscar?">
            </div>
        </div>
        <div class="container__menu">
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="pag_principal.html" id="selected"><img src="img/home.png" alt="" width="40px"></a></li>
                        <li><a href="#">Servicios</a>
                            <ul>

                                <li><a href="#">Servidores</a></li>
                                <li><a href="#">Analistas</a></li>
                                <li><a href="#">Administradores de BBDD</a></li>
                                <li><a href="#">Análisis de BBDD</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Cursos</a></li>
                        <li><a href="#">Contactos</a></li>
                        <li class="is"><a href="./inicio_sesión.php">Iniciar sesión</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <article>
        <form action="entrar.php" method="get">
        Usuario: <input type="text" name="usuario" id="usuario"><br>
        Correo: <input type="text" name="correo" id="correo"><br> 
        Contraseña: <input type="password" name="pass" id="pass"><br>
        Repite la contraseña: <input type="password" name="pass" id="pass"><br>
        <p><input type="checkbox" name="politica" id="politica"> Ha leido y acepta todas nuestras políticas</p>
        <input type="submit" name="enviar" value="ENVIAR">
        </form><br>
        <a href="inicio_sesión.php">¿Ya tiene una cuenta?, inicie sesión</a>
        </article>
    </main>
</body>
</html>
<?php
}
?>