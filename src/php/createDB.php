<?php
require_once 'func/SQL.php';
require_once 'func/selectBackground.php';

$queryOK = false;
$BDD = new SQL();
if (isset($_GET["mode"]) && $_GET["mode"] == 1)
{
    $BDD->queryCreateData("
                            CREATE DATABASE IF NOT EXISTS prismesport;
                            USE prismesport;

                            DROP TABLE IF EXISTS equipe;
                            CREATE TABLE equipe
                            (
                              ID int(11) unsigned NOT NULL AUTO_INCREMENT,
                              nomEquipe varchar(255) DEFAULT NULL,
                              victoires int(11) DEFAULT 0,
                              defaites int(11) DEFAULT 0,
                              nuls int(11) DEFAULT 0,
                              goalAverage int(11) DEFAULT 0,
                              image varchar(255) DEFAULT NULL,
                              PRIMARY KEY (ID)
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
                              ID int(11) unsigned NOT NULL AUTO_INCREMENT,
                              mapName varchar(255) DEFAULT NULL,
                              PRIMARY KEY (ID)
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
                              ID int(11) unsigned NOT NULL AUTO_INCREMENT,
                              equipe1 varchar(255) DEFAULT NULL,
                              equipe2 varchar(255) DEFAULT NULL,
                              map varchar(255) DEFAULT NULL,
                              scoreEquipe1 int(11) DEFAULT 0,
                              scoreEquipe2 int(11) DEFAULT 0,
                              PRIMARY KEY (ID)
                            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

                            DROP TABLE IF EXISTS background;
                            CREATE TABLE background
                            (
                                ID int(11) unsigned NOT NULL AUTO_INCREMENT,
                                backgroundName varchar(255) DEFAULT NULL,
                                backgroundUrl varchar(255) DEFAULT NULL,
                                PRIMARY KEY (ID)
                            );

                            INSERT INTO background (backgroundName, backgroundUrl)
                            VALUES
                                ('Dorado','https://www.gamecrate.com/sites/default/files/overwatch_Dorado_015.jpg'),
                                ('Eichenvald','https://i.pinimg.com/originals/8d/b6/66/8db6661ca38339ecd268a23a65a4a816.jpg'),
                                ('Gibraltar','https://cdnb.artstation.com/p/assets/images/images/007/539/319/large/andrew-klimas-watchpoint-gibraltar-02.jpg'),
                                ('Hanamura','https://i.pinimg.com/originals/d9/de/e9/d9dee9e555f5e1b36f633b5ee2995781.jpg'),
                                ('Hollywood','https://www.owfire.com/images/maps/hollywood-1.jpg'),
                                ('Ilios','https://cdna.artstation.com/p/assets/images/images/004/302/224/large/thiago-klafke-thiagoklafke-overwatch-ilios-01.jpg'),
                                ('King\'s Row','https://www.vladtime.ru/uploads/posts/2017-02/1487152134_kings-row.jpg'),
                                ('Nepal','https://i.pinimg.com/originals/4b/1c/f3/4b1cf3c8618bc644ba42fb2e4730e989.jpg'),
                                ('Numbani','https://www.owfire.com/images/maps/numbani-1.jpg'),
                                ('Route 66','https://steemit-production-imageproxy-upload.s3.amazonaws.com/DQmTuWUuoN7NQCiEoenkNvECzfe6QjtWAFp5GypzHnSCHnB'),
                                ('Temple d\'Anubis','https://i.pinimg.com/originals/03/28/0b/03280b22f5f978102529adc6742210d7.jpg'),
                                ('Tour de Lijiang','https://i.pinimg.com/originals/a9/cb/a4/a9cba409fa00cec80632285e7bc650bb.jpg'),
                                ('Usine Volskaya','https://gamewave.fr/static/images/medias/upload/Overwatch/volskaya-screenshot-003.3fvpT.jpg');
                        ");
    $queryOK = true;
}

if (isset($_GET["mode"]) && $_GET["mode"] == 2)
{
    $BDD->queryCreateData("DROP DATABASE IF EXISTS prismesport;");
    $BDD->queryCreateData("
                            CREATE DATABASE IF NOT EXISTS prismesport;
                            USE prismesport;

                            DROP TABLE IF EXISTS equipe;
                            CREATE TABLE equipe
                            (
                              ID int(11) unsigned NOT NULL AUTO_INCREMENT,
                              nomEquipe varchar(255) DEFAULT NULL,
                              victoires int(11) DEFAULT 0,
                              defaites int(11) DEFAULT 0,
                              nuls int(11) DEFAULT 0,
                              goalAverage int(11) DEFAULT 0,
                              image varchar(255) DEFAULT NULL,
                              PRIMARY KEY (ID)
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
                              ID int(11) unsigned NOT NULL AUTO_INCREMENT,
                              mapName varchar(255) DEFAULT NULL,
                              PRIMARY KEY (ID)
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
                              ID int(11) unsigned NOT NULL AUTO_INCREMENT,
                              equipe1 varchar(255) DEFAULT NULL,
                              equipe2 varchar(255) DEFAULT NULL,
                              map varchar(255) DEFAULT NULL,
                              scoreEquipe1 int(11) DEFAULT 0,
                              scoreEquipe2 int(11) DEFAULT 0,
                              PRIMARY KEY (ID)
                            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

                            DROP TABLE IF EXISTS background;
                            CREATE TABLE background
                            (
                                ID int(11) unsigned NOT NULL AUTO_INCREMENT,
                                backgroundName varchar(255) DEFAULT NULL,
                                backgroundUrl varchar(255) DEFAULT NULL,
                                PRIMARY KEY (ID)
                            );

                            INSERT INTO background (backgroundName, backgroundUrl)
                            VALUES
                                ('Dorado','https://www.gamecrate.com/sites/default/files/overwatch_Dorado_015.jpg'),
                                ('Eichenvald','https://i.pinimg.com/originals/8d/b6/66/8db6661ca38339ecd268a23a65a4a816.jpg'),
                                ('Gibraltar','https://cdnb.artstation.com/p/assets/images/images/007/539/319/large/andrew-klimas-watchpoint-gibraltar-02.jpg'),
                                ('Hanamura','https://i.pinimg.com/originals/d9/de/e9/d9dee9e555f5e1b36f633b5ee2995781.jpg'),
                                ('Hollywood','https://www.owfire.com/images/maps/hollywood-1.jpg'),
                                ('Ilios','https://cdna.artstation.com/p/assets/images/images/004/302/224/large/thiago-klafke-thiagoklafke-overwatch-ilios-01.jpg'),
                                ('King\'s Row','https://www.vladtime.ru/uploads/posts/2017-02/1487152134_kings-row.jpg'),
                                ('Nepal','https://i.pinimg.com/originals/4b/1c/f3/4b1cf3c8618bc644ba42fb2e4730e989.jpg'),
                                ('Numbani','https://www.owfire.com/images/maps/numbani-1.jpg'),
                                ('Route 66','https://steemit-production-imageproxy-upload.s3.amazonaws.com/DQmTuWUuoN7NQCiEoenkNvECzfe6QjtWAFp5GypzHnSCHnB'),
                                ('Temple d\'Anubis','https://i.pinimg.com/originals/03/28/0b/03280b22f5f978102529adc6742210d7.jpg'),
                                ('Tour de Lijiang','https://i.pinimg.com/originals/a9/cb/a4/a9cba409fa00cec80632285e7bc650bb.jpg'),
                                ('Usine Volskaya','https://gamewave.fr/static/images/medias/upload/Overwatch/volskaya-screenshot-003.3fvpT.jpg');
                        ");
    $queryOK = true;
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
    <style>
        html, body
        {
            background: url(<?=$backgroundURL?>) no-repeat center fixed;
            background-size: cover;
        }
    </style>

  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
          <h3>Gestion de la BDD</h3>
      </header>

      <main role="main" class="inner cover menu">
          <?php
          if (isset($_GET["DB"]) && $_GET["DB"] == "false")
          {
              echo "<div class=\"alert alert-danger\" role=\"alert\">";
              echo "⚠️ La base de donnée n'est pas disponible, si c'est une première installation merci de cliquer sur Créer si vous avez un quelconque problème avec la Base de donnée vous pouvez la recréer avec le bouton ci-dessous ⚠️";
              echo "</div>";
          }

          if ($queryOK === true)
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
