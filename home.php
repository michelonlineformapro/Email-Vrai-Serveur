<?php
require 'classes/Database.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="MICHEL Michael">

    <title>QIWOGAMES STUDIO - ACCUEIL -</title>

    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css">
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/868d7d6981.js" type="text/javascript"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/styles.css" type="text/css">

    <!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
    <!--cookie-->

</head>

<body>
<nav>
    <?php
    require 'assets/includes/menu.php';
    ?>
</nav>
<!-- Header -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center animated slideInUp">
                <h1>QIWOGAMES</h1>
                <h2>Studio de développement de jeux vidéo indépendant</h2>
                <p class="lead">
                    Bienvenue sur le site QIWOGAMES, un studio de développement de jeux indépendant.
                </p>
                <p class="lead">
                L'objectif est d'offrir un expérience jeux vidéo retro 2D pour tous les nostalgiques des jeux vidéo 2D des années 1980-90.
                </p>
                <p class="form-text">Merci de vous inscrire à notre news letter si vous souhaitez obtenir les news du studio QIWOGAMES</p>


                <br>

                <form class="form-inline text-center" role="form" style="display: inline-flex">
                    <div class="form-group"><input type="text" class="form-control input-lg" id="exampleInputEmail2" placeholder="Votre prenom"></div>
                    <div class="form-group"><input type="text" class="form-control input-lg" id="exampleInputPassword2" placeholder="Votre email"></div>
                    <button type="submit" class="btn btn-lg btn-default">Inscription</button>
                </form>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="illustration">
                    <img src="assets/images/ap-screenshot.png" alt="QIWOGAMES STUDIO" title="QiwoGames Studio" >
                </div>
            </div>
        </div>
    </div>
</header>
<!-- /Header -->


<!-- Content -->
<main class="content">

    <!-- Lead -->
    <section class="container space-before space-after">
        <div class="row">
            <div class="col-sm-12 animated slideInLeft">
                <h1 class="text-center">Qui sommes-nous ?</h1>
                <p class="lead text-center">
                    Un studio de développement de jeux vidéo 2D Pixel art indépendant.
                </p>
                <hr>
                <h3 class="text-center games-title">NOS JEUX</h3>
                <hr>
            </div>
        </div>
    </section>
    <!-- /Lead -->



    <!-- Features -->
    <section class="container space-before">

        <div class="row featurelist space-after animated slideInRight">
            <div class="col-md-5 col-sm-6 col-md-push-1 ">
                <h2 class="space-before">Scientific Game Jam Grenoble</h2>
                <img style="border: solid; border-radius: 10px" class="img-feature img-fluid img-responsive" src="assets/images/gamejam.jpg" alt="QIWOGAMES STUDIO Scientific Game Jam 2020" title="QIWOGAMES STUDIO Scientific Game Jam 2020">
            </div>
            <div class="col-md-5 col-md-push-1 col-sm-6">
                <p>Pour la seconde année de suite, nous avons remporté avec l'équipe "Les éponges à l'envers", le Pixel d'or et le prix du public.</p>
                <p>En effet après la victoire (Pixel d'or en 2019) avec l'équipe "Les Cracs" et le jeux "Cold Vibes", cette année 2020, nous avons reçus un double prix avec le jeux "Hydroméo et Goutellette"</p>
                <br><br>
                <a class="btn btn-outline-warning" href="https://www.echosciences-grenoble.fr/articles/scientific-game-jam-2020-a-grenoble-les-laureats" target="_blank">Prix du public et Pixel d'or 2020</a>
                <br><br>
                <a class="btn btn-outline-danger" href="https://zarukin.itch.io/hydromo-et-goutellette" target="_blank">Hydroméo et Goutellette sur Itch.io</a>
                <br><br>
                <a class="btn btn-outline-success" href="https://www.grenoblegamelab.com/laureats-precedentes-editions/" target="_blank">Pixel d'or 2019</a>
            </div>
        </div>


        <div class="row featurelist space-after animated slideInRight">
            <div class="col-md-5 col-sm-6 col-md-push-1 ">
                <img class="img-feature img-fluid img-responsive games-img" src="assets/images/2.jpg" alt="QIWOGAMES STUDIO RandBoy" title="QIWOGAMES STUDIO RandBoy">
            </div>
            <div class="col-md-5 col-md-push-1 col-sm-6">
                <h2 class="space-before">Random Zoom Boy</h2>
                <p>Voici la dernière version ALPHA de Random Zoom Boy, merci de me contacter si vous souhaitez obtenir une version PC.</p>
                <p>La version PC sera bientot disponible sur Itch.io puis après la BETA, sur GOG, Steam et Epic Games Store si les retours sont bons.</p>

                <p>Si vous souhaitez utiliser de la « vraie » 3D avec l’HTML5, vous devrez passer par la case WebGL.
                    Les navigateurs récents supportent la technologie, pour Internet Explorer il faudra attendre la version 11.</p>

                <p><b>Chrome</b></p>
                <p>Entrer « about:flags » dans la barre d’adresse.</p>
                <p>Rechercher WebGL puis activer l’option.</p>

                <p><b>Firefox</b></p>
                <p>Entrer « about:config » dans la barre d’adresse.</p>
                <p>Rechercher « webgl.force-enabled » et changer la valeur à «true».</p>
                <p>Rechercher « webgl.disabled » si la valeur existe et changer la valeur à « false ».</p>

                <p><b>Safari</b></p>
                <p>Ouvrer le menu « Safari » et sélectionner « Préférences ».</p>
                <p>Cliquer sur l’onglet « Avancés ».</p>
                <p>Cocher le champ « Afficher le menu Développement dans la barre des menus ».</p>
                <p>Ouvrer le menu « Développement » et cliquer sur «Activer WebGL».</p>
                <hr>
                <a href="webgl/V1.1.0/index.html" target="_blank" class="btn btn-outline-warning">Tester</a>
                <hr>
                <!--COMMENTAIRE-->

                <h2 class="space-before">Commentaires:</h2>
                <form method="post" action="home.php">
                    <div class="form-group">
                        <label for="pseudo">Votre pseudo</label>
                        <input class="form-control" id="pseudo" type="text" name="pseudo" placeholder="Votre pseudo" required />
                    </div>

                    <div class="form-group">
                        <label for="email">Votre email</label>
                        <input class="form-control" id="email" type="email" name="email" placeholder="Votre email valide (ex: email@email.com" required />
                    </div>

                    <div class="form-group">
                        <label for="commetaire">Votre commentaire</label>
                        <textarea class="form-control" id="commentaire" name="commentaire" rows="5" required placeholder="Votre commentaire..."></textarea><br />
                    </div>
                    <input class="btn btn-outline-warning"  type="submit" value="Poster mon commentaire" name="submit_commentaire" />
                </form>
                <?php
                $dbh = new \blogqiwogames\Database('phpmvc');
                $dbh->getPDO();
                $dbh = new PDO('mysql:host=mysql-qiwo-indie-games.alwaysdata.net;dbname=qiwo-indie-games_db', '209913', 'Sladpowa38');

                try{
                     if(isset($_POST['submit_commentaire'])) {
                         $getid = $_GET['id'];
                         $pseudo = $_POST['pseudo'];
                         $email = $_POST['email'];
                         $commentaire = $_POST['commentaire'];
                         $req = "INSERT INTO articles (id_article, pseudo, email, commentaire) VALUES (?,?,?,?)";
                         $dbh->prepare($req)->execute(array($getid, $pseudo,$email, $commentaire));
                     }

                }catch(PDOException $e){
                    $c_msg = "Erreur: Tous les champs doivent être complétés";
                    echo $e->getPrevious($c_msg);
                }



                foreach ($dbh->query('SELECT * FROM articles') as $row) {
                ?>

                <h2 class="space-before">COMMENTAIRES :</h2>
                    <h3 class="text-muted">Pseudo :
                        <?php
                        echo $row['pseudo'];
                        ?>
                        <br>
                    </h3>
                    <p class="text-muted">Email :
                        <?php
                        echo $row['email'];
                        ?>
                        <br>
                    </p>
                    <p><b>Commentaire :</b>
                        <?php
                        echo $row['commentaire']
                        ?>
                    </p>
                <?php
                }
                ?>
            </div>
        </div>

    <hr>

        <div class="row featurelist space-after animated slideInRight">
            <div class="col-md-5 col-sm-6 col-md-push-1 ">
                <img class="img-feature img-fluid img-responsive games-img" src="assets/images/screen1.png" alt="QIWOGAMES STUDIO Green Bear" title="QIWOGAMES STUDIO Green Bear">
            </div>
            <div class="col-md-5 col-md-push-1 col-sm-6">
                <?php
                $dbh = new \blogqiwogames\Database('phpmvc');
                $dbh->getPDO();
                $dbh->getDatas();
                ?>
            </div>
        </div>

        <hr>
        <h3 class="text-center games-title">LES OUTILS</h3>
        <hr>

        <div class="row featurelist space-after animated slideInLeft">
            <div class="col-md-5 col-sm-6 col-sm-push-6">
                <img class="img-feature img-fluid img-responsive" src="assets/images/unity.png" alt="QIWOGAMES STUDIO Unity 2019" title="QIWOGAMES STUDIO Unity 2019">
            </div>
            <div class="col-md-5 col-sm-6 col-md-pull-4 col-sm-pull-6">
                <h2 class="space-before">LA POO
                    <br>
                    <span class="text-muted">La programmation orientée objet</span>
                </h2>
                <p>
                    Unity est un moteur de jeu multiplateforme (smartphone, ordinateur, consoles de jeux vidéo et Web) développé par Unity Technologies. Il est l'un des plus répandus dans l'industrie du jeu vidéo, aussi bien pour les grands studios que pour les indépendants du fait de sa rapidité aux prototypages et qu'il permet de sortir les jeux sur tous les supports.
                </p>
                <p>
                    Il a la particularité de proposer une licence gratuite dite « Personal » avec quelques limitations de technologie avancée au niveau de l'éditeur, mais sans limitation au niveau du moteur.
                </p>
                <p>
                    MonoBehaviour est la classe de base à partir de laquelle dérive tout script Unity. Lorsque vous utilisez C#, vous devez explicitement dériver de MonoBehaviour. Lorsque vous utilisez UnityScript (un type de JavaScript), vous ne devez pas dériver explicitement de MonoBehaviour.
                </p>
                <p>
                    Unity est donc un outil simple d’accès avec une documentions très fournie ainsi qu’une communauté très active.
                </p>
                <a href="https://unity.com/fr" target="_blank" class="btn btn-lg btn-outline-warning">UNITY 2019</a>
            </div>
        </div>

        <div class="row featurelist space-after animated slideInRight">
            <div class="col-md-5 col-sm-6 col-md-push-1 col-sm-6">
                <img class="img-feature img-fluid img-responsive" src="assets/images/photoshop.png" alt="QIWOGAMES STUDIO Adobe Photoshop" title="QIWOGAMES STUDIO Adobe Photoshop">
            </div>
            <div class="col-md-5 col-md-push-1 col-sm-6">
                <h2 class="space-before">LE PIXELART
                    <br>
                    <span class="text-muted">Adobe Photoshop</span>
                </h2>
                <p>
                    Photoshop est un logiciel de retouche, de traitement et de dessin assisté par ordinateur, lancé en 1990 sur MacOS puis en 1992 sur Windows.
                    Édité par Adobe, il est principalement utilisé pour le traitement des photographies numériques, mais sert également à la création ex nihilo d’images.
                </p>
                <p>
                    Il travaille essentiellement sur images matricielles car les images sont constituées d’une grille de points appelés pixels. L’intérêt de ces images est de reproduire des gradations subtiles de couleurs.
                </p>

                <p>
                    Après une courte configuration Photoshop propose tous les outils pour réaliser du pixel art, la résolution est le seul élément restrictif qui peu dérouté au départ mais à contrario être une porte d’accès aux débutants dans la production de PAO
                </p>
                <a href="https://www.adobe.com/fr/products/photoshop.html" target="_blank"  class="btn btn-lg btn-outline-warning">PHOTOSHOP</a>
            </div>
        </div>

        <div class="row featurelist space-after animated slideInLeft">
            <div class="col-md-5 col-sm-6 col-sm-push-6">
                <img class="img-feature img-fluid img-responsive" src="assets/images/cubase.png" alt="QIWOGAMES STUDIO Steinberg Cubase" title="QIWOGAMES STUDIO Steinberg Cubase">
            </div>
            <div class="col-md-5 col-sm-6 col-md-pull-4 col-sm-pull-6">
                <h2 class="space-before">LA MAO
                    <br>
                    <span class="text-muted">Musique Assistée par Ordinateur</span>
                </h2>
                <p>
                    Cubase désigne une famille de séquenceurs musicaux réalisés par la société allemande Steinberg Media Technologies.
                </p>
                <p>
                    Ce logiciel a succédé à la série des séquenceurs 'Pro' commencée sur C64 pour prendre fin avec PRO-24 III sur Atari.
                    Les premières versions de Cubase apparurent sur Atari puis Mac et Windows.
                </p>
                <p>
                    Depuis 2013, la gamme (exclusivement Mac/Windows) se décline en Cubase Elements pour l'usage familial, Cubase Artist pour les amateurs avertis et Cubase Pro pour les professionnels (la gamme de prix va, selon la complexité requise, de 80 € à 560 €, 980 € en comprenant Nuendo).
                </p>
                <p>
                    Nuendo est destiné à la grande production musicale et à la post-production (cinéma, audiovisuel, jeux-vidéo, réalité virtuelle). Il apporte principalement des fonctionnalités avancée pour les ingénieurs du son au-delà du cadre musical pour lequel Cubase Pro propose déjà une grande panoplie de fonctions et d'outils dépassant le cadre essentiel du domaine discographique.
                </p>

                <p>
                    Des versions dites LE (« Light Edition ») sont parfois fournies en accompagnement de matériels d'informatique musicale (OEM). Plus limitées, elles permettent à ces constructeurs de rendre leur matériel immédiatement utilisable et à Steinberg de prendre un premier pied chez les possesseurs de ces matériels.
                </p>
                <a href="https://new.steinberg.net/fr/cubase/" target="_blank"  class="btn btn-lg btn-outline-warning">CUBASE</a>
            </div>
        </div>
    </section>
    <!-- /Features -->
</main>


<footer id="footer" class="jumbotron">
    <section class="container">
        <div class="row">
            <div class="col-md-5 col-md-push-1">
                <h2>LIENS</h2>
                <p>Autres plateformes partenaires</p>
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                    <a href="https://soundcloud.com/qiwoe-qiwoe" target="_blank">MUSIQUE SOUNDCLOUD</a>
                    <br>
                    <a href="https://www.deviantart.com/qiwo" target="_blank">PIXEL ART DEVIANART</a>
                    <br>
                    <a href="https://fr-ca.facebook.com/QiwoProduction" target="_blank">FACEBOOK</a>

                </div>


            </div>
            <div class="col-md-5 col-md-push-1">
                <h2>AIDES ?</h2>
                <p>Nos jeux vidéo sont au format WebGL, il est possible que certaines version de votre navigateur ne supporte pas le format.</p>
                <p>Il est donc recommandé d'utilisé Mozzila Firefox, merci de nous écrire un email si vous avez d'autres problèmes</p>
            </div>
        </div>
    </section>
</footer>

<p class="small text-muted text-center">Copyright &copy; 2020, QIWOGAMES MICHEL Michael.</p>
<br>
<?php


$to = 'michel.onlineformapro@gmail.com';
$subject = 'le sujet';
$message = 'Bonjour !';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" type="text/javascript"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" type="text/javascript"></script>
<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.4.1.js" type="text/javascript"></script>
<script src="assets/js/template.js"></script>

</body>
</html>
