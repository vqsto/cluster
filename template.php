<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <title>Cluster</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo">Cluster</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#">Mon compte</a></li>
                <li><a href="#">Tableau de bord</a></li>
            </ul>
            <ul id="nav-mobile" class="side-nav">
                <li><a href="#">Mon compte</a></li>
                <li><a href="#">Tableau de bord</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <div class="container">
        <div class="section">

            <div class="row">
            <?php
$dir    = './templates';
$templates = scandir($dir);


foreach($templates as $key => $name){
    if($name != '..' && $name != '.'){
        $name = ucfirst($name);    
    echo ' <div class="card small col l3 m5 s12 offset-l1 offset-m1 offset-s1">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator materialboxed" src="./templates/'.$name.'/preview.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">'.$name.'<i class="material-icons right">more_vert</i></span>
                        <p><a href="./templates/'.$name.'/index.html">Demo</a></p>
                        <input name="templateName" value="'.$name.'" type="radio" id="'.$name.'/" />
                        <label for="'.$name.'/">Choisir ce template</label>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Aerial<i class="material-icons right">close</i></span>
                        <p>Auteur : Cluster Team</p>
                        <p>Prix : 50€</p>
                        <p>License : 2 000€</p>
                    </div>
                </div>';
    }
}
?>
            </div>
            <div class="row">
                <a class="waves-effect waves-light btn send">Terminer <i class="material-icons right">send</i></a>
            </div>
        </div>
    </div>
    <footer class="page-footer teal">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Concept Cluster</h5>
                    <p class="grey-text text-lighten-4">Nous avons souhaité, dans cette plate-forme “Cluster” proposer un espace simple aux particuliers et aux professionnels pour la mise en location de biens. L’utilisateur peut créer en quelque minutes un espace de location en ligne. Chaque internaute, peut s’en servir sans contrainte.</p>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Votre template</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Starter</a></li>
                        <li><a class="white-text" href="#!">Musique</a></li>
                        <li><a class="white-text" href="#!">Immobilier</a></li>
                        <li><a class="white-text" href="#!">Location de voiture</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Réseaux sociaux</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Twitter</a></li>
                        <li><a class="white-text" href="#!">Facebook</a></li>
                        <li><a class="white-text" href="#!">Linkedin</a></li>
                        <li><a class="white-text" href="#!">Youtube</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Designé par <a class="brown-text text-lighten-3" href="http://materializecss.com">Cluster</a>
            </div>
        </div>
    </footer>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script src="js/template.js"></script>
</body>

</html>