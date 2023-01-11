<?php
header('Content-Type: text/html; charset=UTF-8');
if (isset($_REQUEST['comprobar'])){

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
        Correo: <input type="text" name="correo" id="correo"><br> 
        Contraseña: <input type="password" name="pass" id="pass"><br>
        <input type="submit" name="comprobar" value="Iniciar Sesión">
        </form><br>
        <a href="registrate.php">¿No tienes cuenta?, registrate</a>
        </article>
    </main>
</body>
</html>
<?php
}
?>