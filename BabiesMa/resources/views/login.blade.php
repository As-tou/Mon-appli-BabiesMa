<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
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
            max-width: 400px; /* Adjust as needed for your design */
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
        .center-div {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-signin {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="center-div">
        <div class="form-container">
            <h2 class="text-center mb-4">Connexion</h2>
            <form action="/login" method="POST" class="form-signin">
                <!-- CSRF token should be included -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Entrer votre adresse email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" placeholder="Entrer votre mot de passe" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn custom-btn btn-block">Se connecter</button>
                </div>
                <div class="text-center">
                    <a href="inscription">Nouveau utilisateur? Inscrivez-vous ici.</a> |
                </div>
            </form>
        </div>
    </div>
</body>
</html>
