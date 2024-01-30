{{-- Assurez-vous d'inclure le CSS de Bootstrap dans votre layout ou directement ici --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bébé</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    {{-- Ajoutez ici votre propre fichier CSS si nécessaire pour ajuster le style --}}
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Bébé</h1>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Quotidien</h5>
                    <p class="card-text"><i class="bi bi-calendar3" style="font-size: 2rem;"></i></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Hebdomadaire</h5>
                    <p class="card-text"><i class="bi bi-calendar" style="font-size: 2rem;"></i></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Images</h5>
                    <p class="card-text"><i class="bi bi-images" style="font-size: 2rem;"></i></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Taille</h5>
                    <p class="card-text"><i class="bi bi-rulers" style="font-size: 2rem;"></i></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Chronologie</h5>
                    <p class="card-text"><i class="bi bi-hourglass-split" style="font-size: 2rem;"></i></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Prénoms</h5>
                    <p class="card-text"><i class="bi bi-person-badge" style="font-size: 2rem;"></i></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
