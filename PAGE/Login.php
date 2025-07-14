<?php 
    ini_set('display_errors', "0"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="../ASSETS/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h4 text-center">Connexion</h2>
                    </div>
                    <div class="card-body">
                        <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
                            <div class="alert alert-danger">Veuillez remplir le formulaire correctement.</div>
                        <?php endif; ?>
                        
                        <form action="../TRAITEMENTS/Traitement_login.php" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="mdp" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="mdp" name="mdp" required>
                            </div>
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary">Se connecter</button>
                            </div>
                            <div class="text-center">
                                <a href="Inscription.php" class="btn btn-link">Créer un compte</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>