<?php
include_once 'tools/function.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Mon Portfolio</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Projet</a></li>
                <li><a href="#">Skills</a></li>
                <li><a href="#">contact</a></li>
            </ul>
        </nav>
    </header>
    <section id="project">
        <div id="container-title">
            <h1 id="title">Bonjour je suis Mathieu Ruellet</h1>
            <h4 id="sub">découvrez mes projets et connaissance</h4>
        </div>
        <details open id="de-pro">
            <summary>Projet</summary>
            <form action="./php/check.php" method="post">

                <?php
                echo "<input type='submit' name='{$enrProjet['thales']}' value='Thales'>";
                echo "<input type='submit' name='{$enrProjet['reseau']}' value='réseaux'>";
                echo "<input type='submit' name='{$enrProjet['signau']}' value='signaux'>";

                ?>
            </form>
        </details>

    </section>
    <section id="skillz">
        <div id="container-skillz">
            <div>
                <img src="<?php $enrIMG['php'] ?>" alt="php">
                <details>
                    <summary>PHP</summary>
                </details>
                <p></p>
            </div>
            <div><img src="<?php $enrIMG['python'] ?>" alt="python">
                <details>
                    <summary>Python</summary>
                </details>
                <p></p>
            </div>
            <div><img src="<?php $enrIMG['C'] ?>" alt="C program">
                <details>
                    <summary>C</summary>
                </details>
                <p></p>
            </div>
            <div><img src="<?php $enrIMG['linux'] ?>" alt="Linux">
                <details>
                    <summary>Linux</summary>
                </details>
                <p></p>
            </div>
            <div><img src="<?php $enrIMG['cisco'] ?>" alt="cisco">
                <details>
                    <summary>Cisco</summary>
                </details>
                <p></p>
            </div>
            <div><img src="<?php $enrIMG['MYSQL'] ?>" alt="mysql">
                <details>
                    <summary>MYSQL</summary>
                </details>
                <p></p>
            </div>
        </div>

    </section>

    <footer>
        <div id="container-footer">
            <div id="left"></div>
            <div id="center"></div>
            <div id="right"></div>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>

</html>