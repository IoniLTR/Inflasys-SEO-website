<?php
/* --------------------------------------------------------------
   LOGIQUE PHP (ENVOI MAIL)
   --------------------------------------------------------------
    <?php
// Variables par défaut
$part11_subtitle = $part11_subtitle ?? "Contactez nos équipes";
$part11_title    = $part11_title ?? "Discutons de vos besoins";
$part11_text     = $part11_text ?? "Vous cherchez une agence web de confiance pour votre projet ? Contactez-nous et découvrez comment nous pouvons vous aider.";

   require_once $base_path . 'components/categories/part-11.php';
   ?>
   -------------------------------------------------------------- */
?>
<?php
// Configuration Mail
$mail_destinataire = "contact@airtechnic.com"; // REMPLACEZ PAR VOTRE EMAIL
$mail_sujet = "Nouveau contact depuis la page Catégorie";

$msg_sent = false;
$msg_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Sécurité (Nettoyage)
    $nom    = strip_tags(trim($_POST["nom"]));
    $email  = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $tel    = strip_tags(trim($_POST["tel"]));
    $projet = strip_tags(trim($_POST["projet"]));

    // 2. Validation
    if (empty($nom) || empty($tel) || empty($projet) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg_error = "Veuillez remplir tous les champs correctement.";
    } else {
        // 3. Construction du mail
        $email_content = "Nom : $nom\n";
        $email_content .= "Email : $email\n";
        $email_content .= "Téléphone : $tel\n\n";
        $email_content .= "Message :\n$projet\n";

        $email_headers = "From: $nom <$email>";

        // 4. Envoi
        if (mail($mail_destinataire, $mail_sujet, $email_content, $email_headers)) {
            $msg_sent = true;
        } else {
            $msg_error = "Une erreur est survenue lors de l'envoi.";
        }
    }
}
?>

<style>
.cat-contact {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    background-color: #0A1A2F; /* Dark Blue */
    width: 100%;
    
    /* Alignement Header */
    padding: 6.94vw 130px;
    max-width: 2560px;
    margin: 0 auto;
    
    gap: 5.55vw;
}

.cat-contact-info {
    width: 45%;
    color: white;
}

/* Nouveau style pour le sous-titre */
.cat-contact-subtitle {
    font-size: 1vw;
    font-weight: 600;
    color: #3DA8FF; /* Bleu Clair pour le contraste */
    text-transform: uppercase;
    margin-bottom: 1vw;
    letter-spacing: 0.05em;
}

.cat-contact-info h2 {
    font-size: 2.78vw;
    font-weight: 800;
    margin-bottom: 2vw;
    line-height: 1.2;
}

.cat-contact-info p {
    font-size: 1.2vw;
    line-height: 1.5;
    color: #9CA3AF;
}

.cat-contact-form-wrapper {
    width: 50%;
    background-color: #ffffff;
    padding: 3vw;
    border-radius: 4px;
}

/* Inputs Style Tech */
.cat-form-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 1.5vw;
}

.cat-form-group label {
    font-size: 0.9vw;
    font-weight: 600;
    color: #0A1A2F;
    margin-bottom: 0.5vw;
}

.cat-form-group input,
.cat-form-group textarea {
    width: 100%;
    padding: 1vw;
    border: 1px solid #E5E7EB;
    background-color: #F9FAFB;
    border-radius: 4px;
    font-family: 'Poppins', sans-serif;
    font-size: 1vw;
    transition: 0.3s;
}

.cat-form-group input:focus,
.cat-form-group textarea:focus {
    border-color: #3DA8FF;
    outline: none;
    background-color: #fff;
}

/* Bouton Submit */
.cat-submit-btn {
    width: 100%;
    background: linear-gradient(100deg, #3DA8FF 0%, #3DA8FF 50%, #0A1A2F 50%, #0A1A2F 100%);
    background-size: 210% 100%;
    background-position: left;
    color: white;
    padding: 1vw;
    border: none;
    border-radius: 4px;
    font-size: 1.1vw;
    font-weight: 700;
    text-transform: uppercase;
    cursor: pointer;
    transition: background-position 0.6s ease;
}

.cat-submit-btn:hover {
    background-position: right;
}

/* Messages Succès/Erreur */
.form-success { background: #D1FAE5; color: #065F46; padding: 15px; border-radius: 4px; margin-bottom: 20px; }
.form-error { background: #FEE2E2; color: #991B1B; padding: 15px; border-radius: 4px; margin-bottom: 20px; }

/* RESPONSIVE */
@media (max-width: 1024px) {
    .cat-contact { flex-direction: column; padding: 60px 20px; gap: 40px; }
    .cat-contact-info, .cat-contact-form-wrapper { width: 100%; }
    
    .cat-contact-subtitle { font-size: 14px; margin-bottom: 10px; }
    .cat-contact-info h2 { font-size: 28px; }
    .cat-contact-info p { font-size: 16px; }
    
    .cat-contact-form-wrapper { padding: 30px; }
    .cat-form-group label { font-size: 14px; }
    .cat-form-group input, .cat-form-group textarea { font-size: 14px; padding: 15px; }
    .cat-submit-btn { font-size: 16px; padding: 15px; }
}
</style>

<section class="cat-contact">
    <div class="cat-contact-info">
        <div class="cat-contact-subtitle"><?= htmlspecialchars($part11_subtitle, ENT_QUOTES, 'UTF-8') ?></div>
        
        <h2><?= htmlspecialchars($part11_title, ENT_QUOTES, 'UTF-8') ?></h2>
        <p><?= $part11_text ?></p>
    </div>

    <div class="cat-contact-form-wrapper">
        
        <?php if($msg_sent): ?>
            <div class="form-success">Merci ! Votre message a bien été envoyé.</div>
        <?php endif; ?>
        
        <?php if($msg_error): ?>
            <div class="form-error"><?= $msg_error ?></div>
        <?php endif; ?>

        <form method="post" action="">
            <div class="cat-form-group">
                <label>Nom</label>
                <input type="text" name="nom" required placeholder="Votre nom" value="<?= isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '' ?>">
            </div>
            
            <div class="cat-form-group">
                <label>Email</label>
                <input type="email" name="email" required placeholder="votre@email.com" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
            </div>

            <div class="cat-form-group">
                <label>Téléphone</label>
                <input type="tel" name="tel" required placeholder="06 00 00 00 00" value="<?= isset($_POST['tel']) ? htmlspecialchars($_POST['tel']) : '' ?>">
            </div>

            <div class="cat-form-group">
                <label>Projet</label>
                <textarea name="projet" rows="4" required placeholder="Décrivez votre besoin..."><?= isset($_POST['projet']) ? htmlspecialchars($_POST['projet']) : '' ?></textarea>
            </div>
            
            <button type="submit" class="cat-submit-btn">Envoyer</button>
        </form>
    </div>
</section>