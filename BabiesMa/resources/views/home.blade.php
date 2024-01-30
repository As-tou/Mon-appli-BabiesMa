<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
      background-image: url('https://img.freepik.com/premium-photo/mothers-day-abstract-desig-pregnant-mother-focus-flat-style-design-pink-theme_848094-549.jpg?w=740'); /* Remplacez l'URL par l'URL de votre image */
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
             
                <li class="nav-item">
                    <a class="nav-link" href="/inscription">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/connexion">Connexion</a>
                </li>
                
               
            </ul>
        </div>
    </nav>

    <div class="container" >
        <h1 class="text-center m-5">Bienvenue dans BabiesMa!</h1>
        <h2 class="text-center m-5">Qu'est ce que vous souhaitez?</h1>
    </div>


    </body>
    </html>

</html>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Aujourd'hui</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Bébé</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Moi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Plus</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>