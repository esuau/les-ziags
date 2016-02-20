<!DOCTYPE html>
<!--
    ╭──────────────────────────────────────────╮
    │ ≡ Design & Front-end                     │
    ╞══════════════════════════════════════════╡
    │                                          │
    │ EVAN SUAU                                │
    ├──────────┬───────────────────────────────┤
    │ Email    │ evan.suau@etu.u-pec.fr        │
    ├──────────┼───────────────────────────────┤
    │ Location │ Sucy-en-Brie, FR              │
    ╰──────────┴───────────────────────────────╯

    ╭──────────────────────────────────────────╮
    │ ≡ Front-end & Back-end                   │
    ╞══════════════════════════════════════════╡
    │                                          │
    │ ALEX BENOIT                              │
    ├──────────┬───────────────────────────────┤
    │ Email    │ benalex75@gmail.com           │
    ├──────────┼───────────────────────────────┤
    │ Location │ Paris, FR                     │
    ╰──────────┴───────────────────────────────╯
-->

<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Hôtel Les Ziags | Nos chambres</title>
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="content/css/main.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="content/css/our-rooms.css" rel="stylesheet" type="text/css" media="screen" />
        <link rel="shortcut icon" href="favicon.ico" />
        <!--[if IE]>
            <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <![endif]-->

        <script type="text/javascript" src="content/js/jquery.js"></script>
        <script type="text/javascript" src="content/js/modernizr.js"></script>
    </head>
    <body>
        <?php include 'view/headerView.php'; ?>
        <?php include 'view/footerView.php'; ?>

        <div class="content">
            <div id="our-rooms">
                <div class="container">
                    <div class="our-rooms-content-card" id="card-one">
                        <img src="/content/img/icons/list_24px_fb9e08.png" alt="list" />
                        <h3>Un choix élargi</h3>
                        <p>
                            L'hôtel Les Ziags offre toute une gamme de chambres, simples, doubles, twin, avec ou sans salle de bains.
                        </p>
                        <a href="/our-rooms.php"><button>Voir les chambres</button></a>
                    </div>
                    <div class="our-rooms-content-card" id="card-two">
                        <img src="/content/img/icons/label_24px_green.png" alt="label" />
                        <h3>Des tarifs abordables</h3>
                        <p>
                            Abordables, nos tarifs commencent à 20€ la nuit, à deux pas de la capitale... Vérifiez bien nos offres spéciales!
                        </p>
                        <a href="/pricing.php"><button>Consulter nos tarifs</button></a>
                    </div>
                    <div class="our-rooms-content-card" id="card-three">
                        <img src="/content/img/icons/circle-with-check-symbol_24px_blue.png" alt="check" />
                        <h3>Confort et sécurité</h3>
                        <p>
                            Toutes les chambres de l’hôtel sont nettoyées quotidiennement et toutes possèdent un accès sécurisé avec une carte.
                        </p>
                        <a href="/our-rooms.php"><button>En savoir plus</button></a
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="content/js/script.js"></script>
    </body>
</html>
