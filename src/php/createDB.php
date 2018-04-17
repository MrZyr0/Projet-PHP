<?php
require_once 'SQL.php';

$SupprOK = false;
$BDD = new SQL("");
if ($_GET["mode"] == 1)
{
    $BDD->queryCreateData("
                    CREATE DATABASE IF NOT EXISTS prismesport;
                    USE prismesport;

                    DROP TABLE IF EXISTS equipe;
                    CREATE TABLE equipe
                    (
                      `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                      `nomEquipe` varchar(255) DEFAULT NULL,
                      `victoires` int(11) DEFAULT 0,
                      `defaites` int(11) DEFAULT 0,
                      `nuls` int(11) DEFAULT 0,
                      `goalAverage` int(11) DEFAULT 0,
                      `image` varchar(255) DEFAULT NULL,
                      PRIMARY KEY (`id`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

                    INSERT INTO equipe (nomEquipe, image)
                    VALUES
                    	('Boston Uprising','https://image.noelshack.com/fichiers/2018/16/1/1523909912-bostonuprising.png'),
                    	('Dallas Fuel','https://image.noelshack.com/fichiers/2018/16/1/1523909934-dallasfuel.png'),
                    	('Florida Mayhem','https://image.noelshack.com/fichiers/2018/16/1/1523909943-floridamahyem.png'),
                    	('Houston Outlaws','https://image.noelshack.com/fichiers/2018/16/1/1523909954-houstonoutlaws.png'),
                        ('London Spitfire','https://image.noelshack.com/fichiers/2018/16/1/1523909980-londonspitfire.png'),
                        ('Los Angeles Gladiator','https://image.noelshack.com/fichiers/2018/16/1/1523909967-lagladiators.png'),
                        ('Los Angeles Valiant','https://image.noelshack.com/fichiers/2018/16/1/1523909992-losangelesvalliant.png'),
                        ('New York Excelsior','https://image.noelshack.com/fichiers/2018/16/1/1523910002-newyorkexelsior.png'),
                        ('Philadelphia Fusion','https://image.noelshack.com/fichiers/2018/16/1/1523910015-philadelphiafusion.png'),
                        ('San Francisco Shock','https://image.noelshack.com/fichiers/2018/16/1/1523910026-sanfranciscoshock.png'),
                        ('Seoul Dynasty','https://image.noelshack.com/fichiers/2018/16/1/1523910043-seouldynasty.png'),
                    	('Shanghai Dragons','https://image.noelshack.com/fichiers/2018/16/1/1523910054-shanghaidragons.png');

                    DROP TABLE IF EXISTS map;
                    CREATE TABLE map
                    (
                      `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                      `mapName` varchar(255) DEFAULT NULL,
                      PRIMARY KEY (`id`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

                    INSERT INTO map (mapName)
                    VALUES
                        ('Gibraltar'),
                        ('Dorado'),
                        ('Hollywood'),
                        ('King\'s Row'),
                        ('Numbani'),
                        ('Route 66'),
                        ('Hanamura'),
                        ('Temple d\'Anubis'),
                        ('Usine Volskaya'),
                        ('Ilios'),
                        ('Nepal'),
                        ('Tour de Lijiang');

                    DROP TABLE IF EXISTS matche;
                    CREATE TABLE matche
                    (
                      `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                      `equipe1` varchar(255) DEFAULT NULL,
                      `equipe2` varchar(255) DEFAULT NULL,
                      `map` varchar(255) DEFAULT NULL,
                      `scoreEquipe1` int(11) DEFAULT 0,
                      `scoreEquipe2` int(11) DEFAULT 0,
                      PRIMARY KEY (`id`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;


                ");
    $SupprOK = true;
}

if ($_GET["mode"] == 2)
{
    $BDD->queryCreateData("DROP DATABASE IF EXISTS prismesport;");
    $BDD->queryCreateData("
                            CREATE DATABASE IF NOT EXISTS prismesport;
                            USE prismesport;

                            DROP TABLE IF EXISTS equipe;
                            CREATE TABLE equipe
                            (
                              `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                              `nomEquipe` varchar(255) DEFAULT NULL,
                              `victoires` int(11) DEFAULT 0,
                              `defaites` int(11) DEFAULT 0,
                              `nuls` int(11) DEFAULT 0,
                              `goalAverage` int(11) DEFAULT 0,
                              `image` varchar(255) DEFAULT NULL,
                              PRIMARY KEY (`id`)
                            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

                            INSERT INTO equipe (nomEquipe, image)
                            VALUES
                                ('Boston Uprising','https://image.noelshack.com/fichiers/2018/16/1/1523909912-bostonuprising.png'),
                                ('Dallas Fuel','https://image.noelshack.com/fichiers/2018/16/1/1523909934-dallasfuel.png'),
                                ('Florida Mayhem','https://image.noelshack.com/fichiers/2018/16/1/1523909943-floridamahyem.png'),
                                ('Houston Outlaws','https://image.noelshack.com/fichiers/2018/16/1/1523909954-houstonoutlaws.png'),
                                ('London Spitfire','https://image.noelshack.com/fichiers/2018/16/1/1523909980-londonspitfire.png'),
                                ('Los Angeles Gladiator','https://image.noelshack.com/fichiers/2018/16/1/1523909967-lagladiators.png'),
                                ('Los Angeles Valiant','https://image.noelshack.com/fichiers/2018/16/1/1523909992-losangelesvalliant.png'),
                                ('New York Excelsior','https://image.noelshack.com/fichiers/2018/16/1/1523910002-newyorkexelsior.png'),
                                ('Philadelphia Fusion','https://image.noelshack.com/fichiers/2018/16/1/1523910015-philadelphiafusion.png'),
                                ('San Francisco Shock','https://image.noelshack.com/fichiers/2018/16/1/1523910026-sanfranciscoshock.png'),
                                ('Seoul Dynasty','https://image.noelshack.com/fichiers/2018/16/1/1523910043-seouldynasty.png'),
                                ('Shanghai Dragons','https://image.noelshack.com/fichiers/2018/16/1/1523910054-shanghaidragons.png');

                            DROP TABLE IF EXISTS map;
                            CREATE TABLE map
                            (
                              `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                              `mapName` varchar(255) DEFAULT NULL,
                              PRIMARY KEY (`id`)
                            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

                            INSERT INTO map (mapName)
                            VALUES
                                ('Gibraltar'),
                                ('Dorado'),
                                ('Hollywood'),
                                ('King\'s Row'),
                                ('Numbani'),
                                ('Route 66'),
                                ('Hanamura'),
                                ('Temple d\'Anubis'),
                                ('Usine Volskaya'),
                                ('Ilios'),
                                ('Nepal'),
                                ('Tour de Lijiang');

                            DROP TABLE IF EXISTS matche;
                            CREATE TABLE matche
                            (
                              `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                              `equipe1` varchar(255) DEFAULT NULL,
                              `equipe2` varchar(255) DEFAULT NULL,
                              `map` varchar(255) DEFAULT NULL,
                              `scoreEquipe1` int(11) DEFAULT 0,
                              `scoreEquipe2` int(11) DEFAULT 0,
                              PRIMARY KEY (`id`)
                            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;


                        ");
    $SupprOK = true;
}

?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Projet de PHP">
    <meta name="author" content="Julien SEIXAS & Romaine LOIRE">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>Gestion BDD</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/cover/cover.css" rel="stylesheet">

    <!-- CSS Perso -->
    <link rel="stylesheet" href="../css/master.css">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
          <h3>Gestion de la BDD</h3>
      </header>

      <main role="main" class="inner cover menu">
          <?php
          if ($SupprOK === true)
            {
                echo "<div class=\"alert alert-success\" role=\"alert\">";
                echo "Base de donnée crée ! 👌";
                echo "</div>";
            }
            ?>
          <a href="../../index.php" class="btn btn-lg btn-secondary">Retour</a>
          <a href="?mode=1" class="btn btn-lg btn-secondary">Créer</a>
          <a href="?mode=2" class="btn btn-lg btn-secondary">RE Créer</a>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>&copy; Julien SEIXAS & Romain LOIRE - <?php print date("Y"); ?></p>
        </div>
      </footer>
    </div>

  </body>
</html>
