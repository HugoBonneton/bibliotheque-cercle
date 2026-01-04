<?php
// index.php - VERSION DEMO

$stats = [
    'NB_UTILISATEURS_TOTAL' => 8,
    'NB_LIVRES_DIFFERENTS' => 42,
    'NB_PRETS_ACTIFS' => 3
];

$livres = [
    [
        'TITRE' => 'Les Fleurs du Mal', 'AUTEUR' => 'Charles Baudelaire',
        'PRENOM' => 'Arthur', 'NOM_PROPRIO' => 'Rimbaud',
        'LOCALISATION' => 'Salon - Vitrine', 'EST_DISPONIBLE' => 1
    ],
    [
        'TITRE' => '1984', 'AUTEUR' => 'George Orwell',
        'PRENOM' => 'Winston', 'NOM_PROPRIO' => 'Smith',
        'LOCALISATION' => 'Bureau', 'EST_DISPONIBLE' => 0
    ],
    [
        'TITRE' => 'Dracula', 'AUTEUR' => 'Bram Stoker',
        'PRENOM' => 'Van', 'NOM_PROPRIO' => 'Helsing',
        'LOCALISATION' => 'Bibliothèque Est', 'EST_DISPONIBLE' => 1
    ],
    [
        'TITRE' => 'L\'Alchimiste', 'AUTEUR' => 'Paulo Coelho',
        'PRENOM' => 'Santiago', 'NOM_PROPRIO' => 'M.',
        'LOCALISATION' => 'Sac à dos', 'EST_DISPONIBLE' => 1
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque du Cercle</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="nav-header">
        <h1>Le Cercle des Livres</h1>
        <a href="scan.php" class="btn">＋ Ajouter un Ouvrage</a>
    </div>

    <div class="stats-bar">
        <div class="stat-item"><span class="stat-val"><?= $stats['NB_UTILISATEURS_TOTAL'] ?></span><span class="stat-label">Membres</span></div>
        <div class="stat-item"><span class="stat-val"><?= $stats['NB_LIVRES_DIFFERENTS'] ?></span><span class="stat-label">Tomes uniques</span></div>
        <div class="stat-item"><span class="stat-val"><?= $stats['NB_PRETS_ACTIFS'] ?></span><span class="stat-label">Lectures en cours</span></div>
    </div>

    <div class="library-grid">
        <?php foreach($livres as $livre): ?>
            <div class="book-card">
                <?php if($livre['EST_DISPONIBLE'] == 1): ?>
                    <div class="badge badge-dispo">Disponible</div>
                <?php else: ?>
                    <div class="badge badge-emprunte">Emprunté</div>
                <?php endif; ?>
                <div class="book-title"><?= $livre['TITRE'] ?></div>
                <div class="book-author"><?= $livre['AUTEUR'] ?></div>
                <div style="font-size:0.9em; color:#ccc;">
                    <strong>Gardien :</strong> <?= $livre['PRENOM'] ?> <?= substr($livre['NOM_PROPRIO'], 0, 1) ?>.<br>
                    <strong>Lieu :</strong> <?= $livre['LOCALISATION'] ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>