<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!--------------------------NAV--------------------------->

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">OnePage Exam</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="connexion.php">Connexion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="inscription.php">Inscription</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!----------------------------------------Fin nav-------------------------------------->
    <!-------------------------------------------------Cards------------------------------------------------->
    <div class="row row-cols-1 row-cols-md-3 g-0">
        <div class="col">
            <div class="card h-100">
                <img src="assets/img/figma.png" class="card-img-top" alt="figma.png" />
                <div class="card-body">
                    <h5 class="card-title">Figma</h5>
                    <p class="card-text">
                        Petit screen du figma comme demander + lien de ce dernier
                    </p>
                    <a class="btncards" href="https://www.figma.com/file/GO7aprZTGQl3JwoWn93xg4/Figma-exam-one-page?node-id=0%3A1">Lien figma</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="assets/img/fullfront.png" class="card-img-top" alt="fullfront" />
                <div class="card-body">
                    <h5 class="card-title">Site exam sans back</h5>
                    <p class="card-text">
                        Voici le site de l'examen sans back, la version avec le backend sera disponible dans la prochaine card
                    </p>
                    <a class="btncards" href="https://github.com/Isooka/exam">Lien github</a>
                    <a class="btncards" href="https://andy.simplon-charleville.fr/exam/exam/index.php">Lien exo</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="assets/img/istockphoto-104355461-612x612.jpg" class="card-img-top" alt="Skyscrapers" />
                <div class="card-body">
                    <h5 class="card-title">Nom du projet</h5>
                    <p class="card-text">
                        Description projet
                    </p>
                
                    <a class="btncards" href="https://andy.simplon-charleville.fr/ACT/">Lien github</a>
                    <a class="btncards" href="https://andy.simplon-charleville.fr/ACT/">Lien exo</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------------------------Fin cards------------------------------------------------------>

    <?php echo include("assets/includes/footer.php"); ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


</html>