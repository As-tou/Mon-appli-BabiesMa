<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            background-color: #f4f7f6;
        }
        .form-container {
            border-radius: 10px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px; /* Adjust as needed for your design */
        }
        .custom-btn {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
        }
        .custom-btn:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container h-100">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="form-container">
                    <h2 class="text-center mb-4">Inscription</h2>
                    <form action="/inscription" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="prenom">Prénom</label>
                                <input type="text" class="form-control" id="prenom" placeholder="Entrer votre prénom" name="prenom">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" id="nom" placeholder="Entrer votre nom" name="nom">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Entrer votre adresse mail" name="email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="telephone">Téléphone</label>
                                <input type="tel" class="form-control" id="telephone" placeholder="Entrer votre numéro de téléphone" name="telephone">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="password">Mot de passe</label>
                                <input type="password" class="form-control" id="password" placeholder="Entrer votre mot de passe" name="password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="adresse">Adresse</label>
                                <input type="text" class="form-control" id="adresse" placeholder="Entrer votre adresse" name="adresse">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="status">Statut</label>
                                <input type="text" class="form-control" id="status" placeholder="Entrer votre statut" name="status">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="antecedents">Antécédents</label>
                                <input type="text" class="form-control" id="antecedents" placeholder="Entrer vos antécédents" name="antecedents">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn custom-btn btn-block">S'inscrire</button>
                        </div>
                    </form>
                    <div class="text-center">
                        <a href="connexion">Retour à la page de Connexion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
