<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION DANS UNE PAGE
   -----------------------------------
<?php
   $part11_kicker         = "Contactez nos équipes";
   $part11_title          = "Discutons de vos besoins";
  
   $part11_paragraph_html = "Vous cherchez une <strong>agence web</strong> de confiance pour votre projet&nbsp;?<strong> Contactez-nous</strong> et découvrez comment nous pouvons vous aider.";
   
   require_once $base_path . 'components/expertises/part-7.php';
   ?>
-------------------------------------------------------------- */
?>

<?php
// Logique PHP standardisée
$to      = $to      ?? 'contact@airtechnic.com';
$from    = $from    ?? 'no-reply@airtechnic.com'; 
$subject = $subject ?? ('Message depuis Blog - ' . ($_SERVER['REQUEST_URI'] ?? ''));
$success = false; $errors  = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!empty($_POST['website'])) { $errors[] = "Erreur."; }
  $nom = trim($_POST['nom'] ?? ''); $email = trim($_POST['email'] ?? ''); 
  $tel = trim($_POST['tel'] ?? ''); $msg = trim($_POST['projet'] ?? '');

  if ($nom === '') $errors[] = "Nom requis.";
  if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Email invalide.";
  if ($tel === '') $errors[] = "Téléphone requis.";
  if (mb_strlen($msg) < 5) $errors[] = "Message trop court.";

  if (empty($errors)) {
    $body = "Message:\nNom: $nom\nEmail: $email\nTel: $tel\nMsg:\n$msg";
    $headers = ['From: Site Airtechnic <'.$from.'>', 'Reply-To: '.$email, 'Content-Type: text/plain; charset=UTF-8'];
    $success = @mail($to, $subject, $body, implode("\r\n", $headers));
    if (!$success) $errors[] = "Erreur serveur.";
  }
}
function e($str) { return htmlspecialchars((string)$str, ENT_QUOTES, 'UTF-8'); }
?>

<section class="contact-section-full">
    <div class="contact-equipe-wrapper">
      
      <div class="contact-equipe-column-1">
        <div class="kicker-tech"><?= e($part11_kicker ?? 'Contact') ?></div>
        <h2><?= e($part11_title ?? 'Contactez-nous') ?></h2>
        
        <!-- Modification ICI : utilisation de strip_tags pour autoriser le HTML sécurisé -->
        <div class="txt-content">
            <?= strip_tags($part11_paragraph_html ?? '', '<strong><b><br><em><u>') ?>
        </div>
      </div>

      <div class="contact-equipe-column-2">
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
          <div class="form-feedback <?= $success ? 'success' : 'error' ?>">
            <?= $success ? "Bien reçu." : "Erreur." ?>
          </div>
        <?php endif; ?>

        <form method="post" action="" novalidate>
          <input type="text" name="website" class="honeypot" aria-hidden="true">

          <div class="contact-equipe-form-line">
            <label for="nom">Nom<span>*</span></label>
            <input type="text" id="nom" name="nom" value="<?= e($_POST['nom'] ?? '') ?>" required>
          </div>

          <div class="contact-equipe-form-line">
            <label for="email">Email<span>*</span></label>
            <input type="email" id="email" name="email" value="<?= e($_POST['email'] ?? '') ?>" required>
          </div>

          <div class="contact-equipe-form-line">
            <label for="tel">Téléphone<span>*</span></label>
            <input type="tel" id="tel" name="tel" value="<?= e($_POST['tel'] ?? '') ?>" required>
          </div>

          <div class="contact-equipe-form-line">
            <label for="projet">Votre Projet<span>*</span></label>
            <textarea id="projet" name="projet" required><?= e($_POST['projet'] ?? '') ?></textarea>
          </div>

          <button type="submit" class="submit-btn">
              ENVOYER
          </button>
        </form>
      </div>

    </div>
</section>

<style>
/* ==========================================================================
   CSS EXPERTISES PART-7 (Contact)
   ========================================================================== */
.contact-section-full {
    background-color: #0A1A2F; /* Dark Blue */
    width: 100%;
    padding: 6.94vw 130px;
    max-width: 2560px;
    margin: 0 auto;
}

.contact-equipe-wrapper {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    gap: 5.55vw;
}

/* Colonne Gauche (Infos) */
.contact-equipe-column-1 {
    width: 45%;
    color: white;
}

.kicker-tech {
    font-size: 1vw;
    font-weight: 600;
    color: #3DA8FF;
    text-transform: uppercase;
    margin-bottom: 1vw;
    letter-spacing: 0.05em;
}

.contact-equipe-column-1 h2 {
    font-size: 2.78vw;
    font-weight: 800;
    margin-bottom: 2vw;
    line-height: 1.2;
    margin-top: 0;
}

.txt-content {
    font-size: 1.2vw;
    line-height: 1.5;
    color: #9CA3AF;
}

/* AJOUT : Style pour strong/b dans le paragraphe (texte gris -> gras blanc) */
.txt-content strong,
.txt-content b {
    color: white;
    font-weight: 700;
}

/* Colonne Droite (Formulaire) */
.contact-equipe-column-2 {
    width: 50%;
}

.contact-equipe-column-2 form {
    background-color: #ffffff;
    padding: 3vw;
    border-radius: 4px;
    width: 100%;
    box-sizing: border-box;
}

.contact-equipe-form-line {
    display: flex;
    flex-direction: column;
    margin-bottom: 1.5vw;
}

.contact-equipe-form-line label {
    font-size: 0.9vw;
    font-weight: 600;
    color: #0A1A2F;
    margin-bottom: 0.5vw;
}
.contact-equipe-form-line span { color: #3DA8FF; }

/* Inputs Style */
form input, form textarea {
    width: 100%;
    padding: 1vw;
    border: 1px solid #E5E7EB;
    background-color: #F9FAFB;
    border-radius: 4px;
    font-size: 1vw;
    font-family: inherit;
    transition: 0.3s;
    box-sizing: border-box;
    max-width:34.21vw;
}

form textarea {
  min-height:10vw;
}

form input:focus, form textarea:focus {
    border-color: #3DA8FF;
    outline: none;
    background-color: #fff;
}

/* Bouton Submit (Style Tech Gradient) */
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

.honeypot { position:absolute; left:-9999px; opacity:0; }
.form-feedback { padding:15px; margin-bottom:20px; border-radius:4px; }
.success { background:#D1FAE5; color:#065F46; } 
.error { background:#FEE2E2; color:#991B1B; }

/* RESPONSIVE */
@media (max-width: 1024px) {
    .contact-section-full { padding: 60px 20px; }
    .contact-equipe-wrapper { flex-direction: column; gap: 40px; }
    .contact-equipe-column-1, .contact-equipe-column-2 { width: 100%; }
    
    .kicker-tech { font-size: 14px; margin-bottom: 10px; }
    .contact-equipe-column-1 h2 { font-size: 28px; }
    .txt-content { font-size: 16px; }
    
    .contact-equipe-column-2 form { padding: 30px; }
    .contact-equipe-form-line label { font-size: 14px; }
    form input, form textarea { font-size: 14px; padding: 15px; }
    .submit-btn { font-size: 16px; padding: 15px; }
}
</style>