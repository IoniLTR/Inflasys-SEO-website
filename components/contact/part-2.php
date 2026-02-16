<?php
/* --------------------------------------------------------------
   VARIABLES DE CONTENU
   --------------------------------------------------------------
<?php 
// CONTACT GAUCHE 1
$c2_contact1_name  = "Laurent Marcilly";
$c2_contact1_role  = "PDG Inflasys";
$c2_contact1_email = "laurent@ze-com.com";
$c2_contact1_tel   = "06 06 54 94 56";
$c2_contact1_tel_link = "+33606549456";
$c2_contact1_img   = "uploads/Picto/picto1.webp";

// CONTACT GAUCHE 2
$c2_contact2_name  = "Olivier Gaires";
$c2_contact2_role  = "Technicien Inflasys";
$c2_contact2_email = "olivier@ze-com.com";
$c2_contact2_tel   = "06 06 54 94 56";
$c2_contact2_tel_link = "+33606549456";
$c2_contact2_img   = "uploads/Picto/picto1.webp";

// PATTERNS
$c2_pattern_src    = "uploads/Picto/pattern-1.webp";
require_once $base_path . 'components/contact/part-2.php'; ?>
*/
?>

<?php
/* --------------------------------------------------------------
   LOGIQUE D'ENVOI D'EMAIL
   -------------------------------------------------------------- */
$msg_sent = false;
$msg_error = "";

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Récupération et nettoyage des champs
    $nom        = strip_tags(trim($_POST['nom']));
    $entreprise = strip_tags(trim($_POST['entreprise']));
    $email      = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $tel        = strip_tags(trim($_POST['tel']));
    $sujet_form = strip_tags(trim($_POST['sujet']));
    $message    = strip_tags(trim($_POST['projet']));

    // 2. Validation basique
    if (empty($nom) || empty($email) || empty($message)) {
        $msg_error = "Merci de remplir les champs obligatoires.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg_error = "Adresse email invalide.";
    } else {
        // 3. Configuration de l'email
        $to = "ioni.letell@gmail.com"; // Votre adresse de réception
        
        $email_subject = "Nouveau contact : $sujet_form de $nom";
        
        // Construction du corps du mail
        $email_content = "Détails du message :\n\n";
        $email_content .= "Nom : $nom\n";
        $email_content .= "Entreprise : $entreprise\n";
        $email_content .= "Email : $email\n";
        $email_content .= "Téléphone : $tel\n";
        $email_content .= "Sujet : $sujet_form\n\n";
        $email_content .= "-------------------------\n";
        $email_content .= "Message :\n$message\n";

// ---------------------------------------------------------
        // CORRECTION ANTI-SPAM
        // ---------------------------------------------------------
        
        // Mettez ici une adresse réelle de votre hébergement (ex: no-reply@inflasys.fr ou contact@ze-com.com)
        // L'adresse doit avoir le même nom de domaine que le site web.
        $email_emetteur = "no-reply@ze-com.com"; 

        $headers = "From: Formulaire Web <$email_emetteur>\r\n"; // L'expéditeur officiel est le site
        $headers .= "Reply-To: $email\r\n"; // Quand vous cliquez sur répondre, ça ira au client
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        // 4. Envoi
        if (mail($to, $email_subject, $email_content, $headers)) {
            $msg_sent = true;
        } else {
            $msg_error = "Une erreur est survenue lors de l'envoi. Réessayez plus tard.";
        }
    }
}

?>

<style>
/* ============================= */
/* STYLE GLOBAL CONTACT          */
/* ============================= */
.contact-wrapper {
    width: 100%;
    background-color: #FFFFFF;
    padding: 6.94vw 130px;
    max-width: 2560px;
    margin: 0 auto;
    color: #0A1A2F;
}

.contact-container {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    gap: 4vw;
}

/* Messages de succès/erreur */
.form-message {
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 4px;
    font-size: 14px;
    font-weight: 600;
}
.form-message.success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}
.form-message.error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

/* ============================= */
/* GESTION DES MOTIFS (IMAGES)   */
/* ============================= */
.contact-left-col, 
.contact-right-col {
    position: relative;
    z-index: 1;
}

.pattern-contact-2-1 {
    position: absolute;
    bottom: -40px;
    left: -60px;
    width: 180px;
    height: auto;
    z-index: 0;
    pointer-events: none;
}

.pattern-contact-2-2 {
    position: absolute;
    top: -60px;
    left: -60px;
    width: 200px;
    height: auto;
    z-index: 0;
    pointer-events: none;
}

/* ============================= */
/* COLONNE GAUCHE (CARTES)       */
/* ============================= */
.contact-left-col {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 2vw;
    max-width: 40%; 
}

.contact-card {
    background: #F9FAFB;
    border: 1px solid #E5E7EB;
    border-radius: 4px;
    padding: 2vw;
    display: flex;
    flex-direction: row;
    gap: 1.5vw;
    align-items: flex-start;
    transition: 0.3s;
    position: relative;
    z-index: 2;
}

.contact-card:hover {
    border-color: #3DA8FF;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

.contact-card-image {
    flex-shrink: 0;
    width: 5vw;
    height: 5vw;
    border-radius: 50%;
    overflow: hidden;
    background: #0A1A2F;
}

.contact-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.contact-card-info {
    display: flex;
    flex-direction: column;
}

.contact-card-info h3 {
    margin: 0;
    font-size: 1.2vw;
    font-weight: 700;
    color: #0A1A2F;
}

.card-subtitle {
    font-size: 0.7vw;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    color: #3DA8FF;
    font-weight: 600;
    display: block;
    margin-top: 0.5vw;
}

.card-role {
    font-size: 0.9vw;
    margin: 0.5vw 0 1vw 0;
    color: #4B5563;
}

.card-contact-details a {
    text-decoration: none;
    color: #0A1A2F;
    font-size: 0.9vw;
    display: flex;
    align-items: center;
    gap: 0.5vw;
    transition: color 0.2s;
    margin-bottom: 0.5vw;
}

.card-contact-details a:hover { color: #3DA8FF; }

.card-contact-details svg {
    width: 1.2vw;
    height: 1.2vw;
    stroke: #0A1A2F;
    fill: none;
    stroke-width: 2;
}

.card-contact-details a:hover svg { stroke: #3DA8FF; }


/* ============================= */
/* COLONNE DROITE (FORMULAIRE)   */
/* ============================= */
.contact-right-col {
    flex: 1.5;
}

.contact-form-card {
    background: #FFFFFF;
    border: 1px solid #E5E7EB;
    border-radius: 4px;
    padding: 3vw;
    box-shadow: 0 5px 20px rgba(0,0,0,0.03);
    position: relative;
    z-index: 2;
}

form { display: flex; flex-direction: column; gap: 1.5vw; }

.form-row-double {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5vw;
}

.form-group label {
    font-size: 0.9vw;
    font-weight: 600;
    color: #0A1A2F;
    display: block;
    margin-bottom: 0.5vw;
}

.form-group label span { color: #3DA8FF; }

input, select, textarea {
    width: 100%;
    background-color: #F9FAFB; 
    border: 1px solid #E5E7EB;
    border-radius: 4px;
    padding: 1vw;
    font-size: 1vw;
    color: #0A1A2F;
    font-family: 'Poppins', sans-serif;
    transition: 0.3s;
    box-sizing: border-box;
}

input:focus, textarea:focus, select:focus {
    outline: none;
    background-color: #fff;
    border-color: #3DA8FF;
}

textarea { min-height: 10vw; resize: vertical; }

.select-wrapper { position: relative; }
.select-wrapper::after {
    content: ''; position: absolute; right: 1rem; top: 50%; transform: translateY(-50%);
    pointer-events: none; border-left: 5px solid transparent; border-right: 5px solid transparent; border-top: 5px solid #0A1A2F;
}
select { appearance: none; -webkit-appearance: none; cursor: pointer; }

/* BOUTON STYLE */
.submit-btn {
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

.submit-btn:hover {
    background-position: right;
}

/* ============================= */
/* RESPONSIVE                    */
/* ============================= */
@media (max-width: 1024px) {
    .contact-wrapper { padding: 60px 20px; }
    .contact-container { flex-direction: column; gap: 40px; }
    .contact-left-col, .contact-right-col { max-width: 100%; width: 100%; }
    
    .pattern-contact-2-1, .pattern-contact-2-2 { width: 100px; top: -20px; left: -10px; }
    .pattern-contact-2-1 { bottom: auto; }

    .contact-card { padding: 20px; }
    .contact-card-image { width: 60px; height: 60px; }
    .contact-card-info h3 { font-size: 18px; }
    .card-subtitle { font-size: 12px; }
    .card-role { font-size: 14px; }
    .card-contact-details a { font-size: 14px; }
    .card-contact-details svg { width: 18px; height: 18px; }
    
    .contact-form-card { padding: 25px; }
    .form-row-double { grid-template-columns: 1fr; gap: 20px; }
    .form-group label { font-size: 14px; }
    input, select, textarea { padding: 15px; font-size: 14px; }
    
    .submit-btn { font-size: 16px; padding: 15px; }
}
</style>

<section class="contact-wrapper">
    <div class="contact-container">
        
        <div class="contact-left-col">
            <img class="pattern-contact-2-1" src="<?php echo isset($images_url) ? $images_url : '' ?><?= $c2_pattern_src ?>" alt="pattern">

            <div class="contact-card">
                <div class="contact-card-image">
                    <img src="<?php echo isset($images_url) ? $images_url : '' ?><?= $c2_contact1_img ?>" alt="<?= $c2_contact1_name ?>">
                </div>
                <div class="contact-card-info">
                    <h3><?= $c2_contact1_name ?></h3>
                    <span class="card-subtitle">VOTRE CONTACT</span>
                    <p class="card-role"><?= $c2_contact1_role ?></p>
                    
                    <div class="card-contact-details">
                        <a href="mailto:<?= $c2_contact1_email ?>">
                            <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                            <?= $c2_contact1_email ?>
                        </a>
                        <a href="tel:<?= $c2_contact1_tel_link ?>">
                            <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                            <?= $c2_contact1_tel ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-card" style="visibility:hidden;">
                <div class="contact-card-image">
                    <img src="<?php echo isset($images_url) ? $images_url : '' ?><?= $c2_contact2_img ?>" alt="<?= $c2_contact2_name ?>">
                </div>
                <div class="contact-card-info">
                    <h3><?= $c2_contact2_name ?></h3>
                    <span class="card-subtitle">VOTRE CONTACT</span>
                    <p class="card-role"><?= $c2_contact2_role ?></p>
                 
                    <div class="card-contact-details">
                        <a href="mailto:<?= $c2_contact2_email ?>">
                            <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                            <?= $c2_contact2_email ?>
                        </a>
                        <a href="tel:<?= $c2_contact2_tel_link ?>">
                            <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                            <?= $c2_contact2_tel ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-right-col">
            <img class="pattern-contact-2-2" src="<?php echo isset($images_url) ? $images_url : '' ?><?= $c2_pattern_src ?>" alt="pattern">

            <div class="contact-form-card">
                
                <?php if($msg_sent): ?>
                    <div class="form-message success">Votre message a bien été envoyé ! Nous vous répondrons sous peu.</div>
                <?php endif; ?>

                <?php if($msg_error): ?>
                    <div class="form-message error"><?= $msg_error ?></div>
                <?php endif; ?>

                <form method="post" action="">
                    <div class="form-row-double">
                        <div class="form-group">
                            <label for="nom">Nom<span>*</span></label>
                            <input type="text" id="nom" name="nom" placeholder="Votre nom" required value="<?= isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="entreprise">Entreprise</label>
                            <input type="text" id="entreprise" name="entreprise" placeholder="Votre entreprise" value="<?= isset($_POST['entreprise']) ? htmlspecialchars($_POST['entreprise']) : '' ?>">
                        </div>
                    </div>

                    <div class="form-row-double">
                        <div class="form-group">
                            <label for="email">Adresse mail<span>*</span></label>
                            <input type="email" id="email" name="email" placeholder="Votre adresse mail" required value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="tel">Téléphone<span>*</span></label>
                            <input type="tel" id="tel" name="tel" placeholder="Votre numéro de téléphone" required value="<?= isset($_POST['tel']) ? htmlspecialchars($_POST['tel']) : '' ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="sujet">Sujet<span>*</span></label>
                        <div class="select-wrapper">
                            <select id="sujet" name="sujet" required>
                                <option value="" disabled <?= !isset($_POST['sujet']) ? 'selected' : '' ?>>Choisir un sujet</option>
                                <option value="Demande de devis" <?= (isset($_POST['sujet']) && $_POST['sujet'] == 'Demande de devis') ? 'selected' : '' ?>>Demande de devis</option>
                                <option value="Renseignement technique" <?= (isset($_POST['sujet']) && $_POST['sujet'] == 'Renseignement technique') ? 'selected' : '' ?>>Renseignement technique</option>
                                <option value="Partenariat" <?= (isset($_POST['sujet']) && $_POST['sujet'] == 'Partenariat') ? 'selected' : '' ?>>Partenariat</option>
                                <option value="Autre" <?= (isset($_POST['sujet']) && $_POST['sujet'] == 'Autre') ? 'selected' : '' ?>>Autre</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="projet">Votre projet<span>*</span></label>
                        <textarea id="projet" name="projet" placeholder="Parlez nous de votre projet !" required><?= isset($_POST['projet']) ? htmlspecialchars($_POST['projet']) : '' ?></textarea>
                    </div>

                    <button type="submit" class="submit-btn">ENVOYER</button>
                </form>
            </div>
        </div>

    </div>
</section>