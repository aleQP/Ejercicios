<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.2/css/all.css" integrity="sha384-fZCoUih8XsaUZnNDOiLqnby1tMJ0sE7oBbNk2Xxf5x8Z4SvNQ9j83vFMa/erbVrV" crossorigin="anonymous"/>
</head>
<body>

<style>
    *{
        font-family: arial;
        margin: 0;
        padding: 0;
    }
    /*ESTILOS GENERALES*/
    nav ul {
        list-style: none;
        padding: 0;
    }
    nav li{
        line-height: 3rem;
        position: relative;
    }
    nav li ul{
        position: absolute;
    }
    nav a{
        color: #ddd;
        display: block;
        padding: 0 2.5em;
        text-decoration: none;
        transition: .2s;
    }
    nav a:hover{
        background: rgba(0,0,0,0.5);
    }

    /*OCULTAR SUB*/
    nav ul{  
        display: none;
    }
    nav li:hover > ul{
        display: block;
    }

    /*ESTILOS PRIMER NIVEL*/
    nav > ul {
        background: #345;
        display: table;
        width: 100%;
    }
    nav > ul > li{
        float: left;
    }

    /*ESTILOS SEGUNDO NIVEL*/
    nav li li{
        background: #222;
        width: 200px;
    }
    nav > ul > li > ul{
        top: 100%;
    }

    /*ESTLOS TERCER NIVEL*/
    nav ul li ul li ul{
        left: 100%;
        top: 0%;
    }

</style>

<nav>
    <ul>
        <li><a href="#">link 1</a></li>
        <li><a href="#">link 2</a></li>
        <li><a href="#">link 3</a>
            <ul>
                <li><a href="#">Sub 1</a></li>
                <li><a href="#">Sub 2</a>
                    <ul>
                        <li><a href="#">Sub-Sub 1</a></li>
                        <li><a href="#">Sub-Sub 2</a></li>
                    </ul>
                </li>
                <li><a href="#">Sub 3</a></li>
            </ul>
        </li>
        <li><a href="#">link 4</a></li>
        <li><a href="#">link 5</a>
    </ul>
</nav>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>



<!-- https://ns1005802.ip-92-204-134.us:2083/logout/?locale=en
http://localhost/phpmyadmin/index.php?route=/
http://www.proteccionfutura.com/admin/usuarios#
https://www.pf20.com.mx/
https://www.elektra.mx/
https://www.amazon.com.mx/amazonprime?ref_=nav_cs_primelink_nonmember
https://es.extendoffice.com/documents/outlook/2282-outlook-change-increase-attachment-size-limit.html
https://www.softzone.es/noticias/open-source/todo-cursos-5-recursos-aprenderas-programar-verdad/
cambiar la limitación de tamaño de los archivos adjuntos en Outlook
https://learn.microsoft.com/es-es/outlook/troubleshoot/message-body/attachment-size-exceeds-the-allowable-limit-error
https://es.extendoffice.com/documents/outlook/2282-outlook-change-increase-attachment-size-limit.html -->