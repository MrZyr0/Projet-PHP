<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Projet de PHP">
    <meta name="author" content="Julien SEIXAS & Romaine LOIRE">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>Classement Overwatch</title>

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
          <h3>Classement</h3>
      </header>

      <main role="main" class="inner cover menu">
          <a href="../../index.php" class="btn btn-lg btn-secondary">Retour</a>
          <a href="createMatch.php" class="btn btn-lg btn-secondary">Créer un matche</a>
          <a href="viewMatch.php" class="btn btn-lg btn-secondary btn-accueil">Voir les matches</a>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>&copy; Julien SEIXAS & Romain LOIRE - <?php print date("Y"); ?></p>
        </div>
      </footer>
    </div>

  </body>
</html>
