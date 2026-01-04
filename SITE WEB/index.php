<?php
// index.php - VERSION FINALE (Images Corrigées)

// Liste des livres
$livres = [

    [
        'TITRE' => '1984', 'AUTEUR' => 'George Orwell', 'GENRE' => 'Science-Fiction',
        'NOTE' => 5, 'PRENOM' => 'Winston', 'NOM_PROPRIO' => 'Smith', 'LOCALISATION' => 'Bureau',
        'EST_DISPONIBLE' => 0, 'ISBN' => '978-2070368228',
        'IMAGE' => 'https://covers.openlibrary.org/b/isbn/9780451524935-L.jpg',
        'DESC' => 'Big Brother vous regarde. Le roman dystopique ultime sur la surveillance et le totalitarisme.',
        'PRIX_JOUR' => '0.80€', 'PRIX_MOIS' => '15€'
    ],
    [
        'TITRE' => 'Dracula', 'AUTEUR' => 'Bram Stoker', 'GENRE' => 'Fantastique',
        'NOTE' => 4, 'PRENOM' => 'Van', 'NOM_PROPRIO' => 'Helsing', 'LOCALISATION' => 'Bibliothèque Est',
        'EST_DISPONIBLE' => 1, 'ISBN' => '978-2290333333',
        'IMAGE' => 'https://covers.openlibrary.org/b/isbn/9780141439846-L.jpg',
        'DESC' => 'Le comte Dracula quitte la Transylvanie pour l\'Angleterre. Un classique du roman gothique.',
        'PRIX_JOUR' => '0.60€', 'PRIX_MOIS' => '12€'
    ],
    [
        'TITRE' => 'L\'Alchimiste', 'AUTEUR' => 'Paulo Coelho', 'GENRE' => 'Philosophie',
        'NOTE' => 3, 'PRENOM' => 'Santiago', 'NOM_PROPRIO' => 'M.', 'LOCALISATION' => 'Sac à dos',
        'EST_DISPONIBLE' => 1, 'ISBN' => '978-2290000000',
        'IMAGE' => 'https://covers.openlibrary.org/b/id/8259443-L.jpg',
        'DESC' => 'Il faut écouter son cœur. Le voyage initiatique d\'un berger andalou vers les Pyramides.',
        'PRIX_JOUR' => '0.40€', 'PRIX_MOIS' => '8€'
    ],
    [
        'TITRE' => 'Le Seigneur des Anneaux', 'AUTEUR' => 'J.R.R. Tolkien', 'GENRE' => 'Fantasy',
        'NOTE' => 5, 'PRENOM' => 'Frodon', 'NOM_PROPRIO' => 'Sacquet', 'LOCALISATION' => 'Coffre-fort',
        'EST_DISPONIBLE' => 0, 'ISBN' => '978-2266286268',
        'IMAGE' => 'https://covers.openlibrary.org/b/isbn/9780261103252-L.jpg',
        'DESC' => 'La Communauté de l\'Anneau doit détruire l\'Anneau Unique pour sauver la Terre du Milieu.',
        'PRIX_JOUR' => '1.00€', 'PRIX_MOIS' => '20€'
    ],
    [
        'TITRE' => 'Dune', 'AUTEUR' => 'Frank Herbert', 'GENRE' => 'Science-Fiction',
        'NOTE' => 5, 'PRENOM' => 'Paul', 'NOM_PROPRIO' => 'Atreides', 'LOCALISATION' => 'Chambre',
        'EST_DISPONIBLE' => 1, 'ISBN' => '978-2266286268',
        'IMAGE' => 'https://covers.openlibrary.org/b/isbn/9780441172719-L.jpg',
        'DESC' => 'Sur la planète des sables, Arrakis, se joue l\'avenir de l\'univers autour de l\'épice.',
        'PRIX_JOUR' => '0.90€', 'PRIX_MOIS' => '18€'
    ],
    [
        'TITRE' => 'Gatsby le Magnifique', 'AUTEUR' => 'F. Scott Fitzgerald', 'GENRE' => 'Roman',
        'NOTE' => 4, 'PRENOM' => 'Nick', 'NOM_PROPRIO' => 'Carraway', 'LOCALISATION' => 'Salon',
        'EST_DISPONIBLE' => 1, 'ISBN' => '978-2253004051',
        'IMAGE' => 'https://covers.openlibrary.org/b/isbn/9780743273565-L.jpg',
        'DESC' => 'Dans les années folles, le mystérieux Jay Gatsby tente de reconquérir son amour perdu.',
        'PRIX_JOUR' => '0.50€', 'PRIX_MOIS' => '9€'
    ],
    [
        'TITRE' => 'Moby Dick', 'AUTEUR' => 'Herman Melville', 'GENRE' => 'Aventure',
        'NOTE' => 5, 'PRENOM' => 'Ishmael', 'NOM_PROPRIO' => 'W.', 'LOCALISATION' => 'Grenier',
        'EST_DISPONIBLE' => 1, 'ISBN' => '978-0142437247',
        'IMAGE' => 'https://covers.openlibrary.org/b/isbn/9780142437247-L.jpg',
        'DESC' => 'La quête obsessionnelle du capitaine Achab pour se venger de la baleine blanche.',
        'PRIX_JOUR' => '0.70€', 'PRIX_MOIS' => '11€'
    ],
    [
        'TITRE' => 'Orgueil et Préjugés', 'AUTEUR' => 'Jane Austen', 'GENRE' => 'Roman',
        'NOTE' => 5, 'PRENOM' => 'Elizabeth', 'NOM_PROPRIO' => 'Bennet', 'LOCALISATION' => 'Chambre',
        'EST_DISPONIBLE' => 0, 'ISBN' => '978-0141439518',
        'IMAGE' => 'https://covers.openlibrary.org/b/isbn/9780141439518-L.jpg',
        'DESC' => 'Une histoire d\'amour et de malentendus dans l\'Angleterre aristocratique du XIXe siècle.',
        'PRIX_JOUR' => '0.60€', 'PRIX_MOIS' => '10€'
    ],
    [
        'TITRE' => 'Frankenstein', 'AUTEUR' => 'Mary Shelley', 'GENRE' => 'Horreur',
        'NOTE' => 4, 'PRENOM' => 'Victor', 'NOM_PROPRIO' => 'F.', 'LOCALISATION' => 'Cave',
        'EST_DISPONIBLE' => 1, 'ISBN' => '978-0141439471',
        'IMAGE' => 'https://covers.openlibrary.org/b/isbn/9780141439471-L.jpg',
        'DESC' => 'Un scientifique crée une créature vivante à partir de cadavres, mais elle se retourne contre lui.',
        'PRIX_JOUR' => '0.60€', 'PRIX_MOIS' => '12€'
    ]
];

// Stats fictives
$nb_livres = count($livres);
$nb_prets = 3; 
$nb_membres = 8;

function renderStars($note) {
    return str_repeat("★", $note) . str_repeat("☆", 5 - $note);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Cercle des Livres</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <div class="sidebar-content">
        <h2>Espace Membre</h2>
        <div style="margin-bottom:30px; color:#888; font-style:italic;">
            Bonjour, Hugo<br>
            <small>Statut : Bibliothécaire Maître</small>
        </div>
        <a onclick="showSection('profil')" class="sidebar-link">Mon Profil</a>
        <a onclick="showSection('wishlist')" class="sidebar-link">Liste de Souhaits</a>
        <a onclick="showSection('historique')" class="sidebar-link">Historique des Prêts</a>
        <a onclick="showSection('reglages')" class="sidebar-link">Paramètres</a>
        
        <hr style="border-color:#333; margin:20px 0;">
        <a onclick="showSection('accueil')" class="sidebar-link" style="color:var(--gold);">Retour Accueil</a>
        <a href="#" class="sidebar-link" style="color:#8a3324; margin-top:20px;">Déconnexion</a>
    </div>
</div>

<div id="bookModal" class="modal" onclick="closeModal(event)">
    <div class="modal-content">
        <span class="modal-close" onclick="document.getElementById('bookModal').style.display='none'">&times;</span>
        <div class="modal-left">
            <img id="m_image" src="" class="modal-cover" alt="Couverture" onerror="this.src='https://via.placeholder.com/300x450/1a120b/d4af37?text=Image+Non+Dispo'">
        </div>
        <div class="modal-right">
            <h2 id="m_titre" style="color:var(--gold); margin:0;">Titre</h2>
            <div style="color:var(--gold-dim); font-style:italic; margin-bottom:10px;">
                <span id="m_auteur">Auteur</span> • <span id="m_genre">Genre</span>
            </div>
            <div id="m_stars" style="color:var(--gold); margin-bottom:15px;"></div>
            
            <p id="m_desc" style="line-height:1.5; color:#ccc; flex-grow:1;">Desc</p>
            
            <div class="pricing-box">
                <span style="color:var(--gold); font-weight:bold; display:block; margin-bottom:5px;">TARIFS & CONDITIONS</span>
                <div>Location Jour : <span id="m_prix_j" style="color:#fff;"></span></div>
                <div>Abonnement Mois : <span id="m_prix_m" style="color:#fff;"></span></div>
                <div style="margin-top:5px; font-size:0.8em; color:#888;">Durée flexible : 7, 14 ou 30 jours (Renouvelable)</div>
            </div>

            <div style="font-size:0.9em; color:#888; border-top:1px solid #333; padding-top:10px;">
                <strong>Localisation :</strong> <span id="m_loc"></span><br>
                <strong>Propriétaire :</strong> <span id="m_proprio"></span>
            </div>

            <button class="btn" style="margin-top:15px; width:100%;" onclick="alert('Demande de location envoyée !')">
                Emprunter ce livre
            </button>
        </div>
    </div>
</div>

<div class="container">
    <div class="nav-header">
        <h1 onclick="showSection('accueil')">Le Cercle des Livres</h1>
        <div style="display:flex; align-items:center;">
            <a href="scan.php" class="btn">Scanner</a>
            <span class="menu-trigger" onclick="openNav()">MENU</span>
        </div>
    </div>

    <div id="accueil" class="app-section active">
        
        <div class="stats-bar">
            <div class="stat-item"><span class="stat-val"><?= $nb_livres ?></span><span class="stat-label">Ouvrages</span></div>
            <div class="stat-item"><span class="stat-val"><?= $nb_prets ?></span><span class="stat-label">Prêts en cours</span></div>
            <div class="stat-item"><span class="stat-val"><?= $nb_membres ?></span><span class="stat-label">Membres</span></div>
        </div>

        <div class="search-container">
            <input type="text" id="searchInput" onkeyup="filterBooks()" placeholder="Rechercher par titre, auteur...">
            <button class="btn" onclick="filterStatus('all')">Tout</button>
            <button class="btn" onclick="filterStatus('dispo')">Dispo</button>
            <button class="btn" onclick="sortBooksAZ()">A-Z</button>
        </div>

        <h2 style="font-family:'Cinzel', serif; color:var(--gold); border-bottom:1px solid #333; padding-bottom:10px; margin-bottom:30px;">Catalogue de la Bibliothèque</h2>

        <div class="library-grid" id="libraryGrid">
            <?php foreach($livres as $livre): ?>
                <div class="book-card" 
                     data-title="<?= strtolower($livre['TITRE']) ?>" 
                     data-author="<?= strtolower($livre['AUTEUR']) ?>"
                     data-status="<?= $livre['EST_DISPONIBLE'] ? 'dispo' : 'emprunte' ?>"
                     onclick='openModal(<?= json_encode($livre, JSON_HEX_APOS | JSON_HEX_QUOT) ?>)'>
                    
                    <?php if($livre['EST_DISPONIBLE']): ?>
                        <div class="badge badge-dispo">Dispo</div>
                    <?php else: ?>
                        <div class="badge badge-emprunte">Loué</div>
                    <?php endif; ?>
                    
                    <img src="<?= $livre['IMAGE'] ?>" class="book-cover-grid" alt="Couverture" onerror="this.style.display='none'">

                    <div class="book-title"><?= $livre['TITRE'] ?></div>
                    <div class="book-author"><?= $livre['AUTEUR'] ?></div>
                    <div class="book-meta">
                        <span><?= $livre['GENRE'] ?></span>
                        <span style="color:var(--gold);"><?= renderStars($livre['NOTE']) ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="discovery-section">
            <h2 style="color:var(--gold); font-family:'Cinzel', serif;">Découvertes & Nouveautés</h2>
            <div class="discovery-grid">
                <div class="disco-card">
                    <img src="https://covers.openlibrary.org/b/isbn/9780451526342-L.jpg" class="disco-img">
                    <div style="font-family:'Cinzel',serif; color:var(--gold); margin-bottom:5px;">La Ferme des Animaux</div>
                    <div style="font-size:0.8em; color:#888;">Satire Politique</div>
                </div>
                <div class="disco-card">
                    <img src="https://covers.openlibrary.org/b/isbn/9782070360024-L.jpg" class="disco-img">
                    <div style="font-family:'Cinzel',serif; color:var(--gold); margin-bottom:5px;">L'Étranger</div>
                    <div style="font-size:0.8em; color:#888;">Absurde</div>
                </div>
                <div class="disco-card">
                    <img src="https://covers.openlibrary.org/b/isbn/9780061120084-L.jpg" class="disco-img">
                    <div style="font-family:'Cinzel',serif; color:var(--gold); margin-bottom:5px;">Ne tirez pas sur l'oiseau moqueur</div>
                    <div style="font-size:0.8em; color:#888;">Drame Judiciaire</div>
                </div>
                <div class="disco-card">
                    <img src="https://covers.openlibrary.org/b/isbn/9780307474278-L.jpg" class="disco-img">
                    <div style="font-family:'Cinzel',serif; color:var(--gold); margin-bottom:5px;">Le Da Vinci Code</div>
                    <div style="font-size:0.8em; color:#888;">Thriller Éso</div>
                </div>
            </div>
        </div>
    </div>

    <div id="profil" class="app-section">
        <h2 style="font-family:'Cinzel', serif; color:var(--gold);">Mon Profil Bibliothécaire</h2>
        <div class="section-card">
            <div class="user-avatar">H</div>
            <div>
                <h3 style="margin:0; color:var(--gold);">Hugo Bonneton</h3>
                <div style="color:#888; margin-top:5px;">Inscrit depuis le 12 Sept. 2024</div>
                <div style="color:var(--green-ink); margin-top:5px;">Membre Certifié</div>
            </div>
        </div>
        <div style="padding:20px; background:rgba(0,0,0,0.2); border:1px solid #333;">
            <p><strong>Email :</strong> hugo.bonneton@ecole.fr</p>
            <p><strong>Cercle Principal :</strong> Les Amis du Mardi</p>
            <p><strong>Réputation :</strong> ★★★★★ (Lecteur très soigneux)</p>
        </div>
    </div>

    <div id="wishlist" class="app-section">
        <h2 style="font-family:'Cinzel', serif; color:var(--gold);">Ma Liste de Souhaits</h2>
        <p style="color:#888; font-style:italic; margin-bottom:20px;">Livres que je souhaite lire prochainement.</p>
        <div style="background:rgba(0,0,0,0.3); border:1px solid #333;">
            <div class="list-item"><span><strong>La Peste</strong> - Albert Camus</span><span class="status-wait">En attente</span></div>
            <div class="list-item"><span><strong>Shining</strong> - Stephen King</span><span class="status-ok">Disponible</span></div>
        </div>
    </div>

    <div id="historique" class="app-section">
        <h2 style="font-family:'Cinzel', serif; color:var(--gold);">Historique des Prêts</h2>
        <div style="background:rgba(0,0,0,0.3); border:1px solid #333;">
            <div class="list-item">
                <div><div style="color:var(--gold);">1984 - George Orwell</div><div style="font-size:0.8em; color:#666;">Rendu le 10 Dec. 2024</div></div>
                <span class="status-ok">Terminé</span>
            </div>
        </div>
    </div>

    <div id="reglages" class="app-section">
        <h2 style="font-family:'Cinzel', serif; color:var(--gold);">Paramètres</h2>
        <div style="padding:20px; background:rgba(0,0,0,0.3); border:1px solid #333;">
            <p>🔔 Notifications Email : <strong>Activées</strong></p>
            <p>🌙 Mode Sombre : <strong>Toujours Actif</strong></p>
        </div>
    </div>

</div>

<script>
    // 1. MENU
    function openNav() { document.getElementById("mySidebar").style.width = "350px"; }
    function closeNav() { document.getElementById("mySidebar").style.width = "0"; }

    // 2. SECTIONS
    function showSection(sectionId) {
        document.querySelectorAll('.app-section').forEach(sec => sec.classList.remove('active'));
        document.getElementById(sectionId).classList.add('active');
        closeNav();
    }

    // 3. MODAL
    function openModal(data) {
        document.getElementById('m_titre').innerText = data.TITRE;
        document.getElementById('m_auteur').innerText = data.AUTEUR;
        document.getElementById('m_genre').innerText = data.GENRE || 'Roman';
        document.getElementById('m_desc').innerText = data.DESC || 'Pas de résumé.';
        document.getElementById('m_image').src = data.IMAGE;
        document.getElementById('m_proprio').innerText = data.PRENOM + " " + data.NOM_PROPRIO;
        document.getElementById('m_loc').innerText = data.LOCALISATION;
        
        document.getElementById('m_prix_j').innerText = data.PRIX_JOUR || "0.50€";
        document.getElementById('m_prix_m').innerText = data.PRIX_MOIS || "10€";

        let note = data.NOTE || 4;
        let stars = "★".repeat(note) + "☆".repeat(5 - note);
        document.getElementById('m_stars').innerText = stars;

        document.getElementById('bookModal').style.display = 'block';
    }

    function closeModal(e) {
        if (e.target.id === 'bookModal') { document.getElementById('bookModal').style.display = 'none'; }
    }

    // 4. FILTRES
    function filterBooks() {
        let input = document.getElementById('searchInput').value.toLowerCase();
        let cards = document.getElementsByClassName('book-card');
        for (let card of cards) {
            let txt = card.getAttribute('data-title') + " " + card.getAttribute('data-author');
            card.style.display = txt.includes(input) ? "flex" : "none";
        }
    }
    function filterStatus(status) {
        let cards = document.getElementsByClassName('book-card');
        for (let card of cards) {
            if (status === 'all' || card.getAttribute('data-status') === status) {
                card.style.display = "flex";
            } else {
                card.style.display = "none";
            }
        }
    }
    function sortBooksAZ() {
        let container = document.getElementById("libraryGrid");
        let cards = Array.from(container.getElementsByClassName("book-card"));
        cards.sort((a, b) => {
            let titleA = a.getAttribute("data-title");
            let titleB = b.getAttribute("data-title");
            return titleA.localeCompare(titleB);
        });
        cards.forEach(card => container.appendChild(card));
    }
</script>

</body>
</html>