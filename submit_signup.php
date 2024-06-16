<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $materiel = $_POST['materiel'];

    // Charger les inscriptions existantes
    $inscriptions = json_decode(file_get_contents('inscriptions.json'), true);

    // Ajouter la nouvelle inscription
    $inscriptions[] = [
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'materiel' => $materiel
    ];

    // Enregistrer les inscriptions mises à jour
    file_put_contents('inscriptions.json', json_encode($inscriptions));

    // Rediriger vers la page d'accueil
    header('Location: index.html');
    exit();
}
?>