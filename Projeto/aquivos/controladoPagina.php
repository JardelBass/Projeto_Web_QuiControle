<?php
    require './pagina/head.php';
    
    switch ($_GET['pagina']){
        case "":
            require './pagina/article.php';
            break;
        case "index":
            require './pagina/article.php';
            break;
        case "recursos":
            require './pagina/recursos.php';
            break;

        case "sobreNos":
            require './pagina/sobreNos.php';
            break;
    }
    require './pagina/footer.php';