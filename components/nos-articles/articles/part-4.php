<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION DANS UNE PAGE
   -----------------------------------
   <?php
   $part11_kicker         = "Contactez nos équipes";
   $part11_title          = "Discutons de vos besoins";
   
   $part11_paragraph_html = "Vous cherchez <strong>une agence web</strong> de confiance pour votre projet ? <strong>Contactez-nous</strong> et découvrez comment nous pouvons vous aider.";

   require_once $base_path . 'components/nos-articles/articles/part-4.php';
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
/* Import Police */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

/* ----------- SECTION GLOBALE ----------- */
.contact-section-full {
  width: 100%;
  background-color: #0A1A2F; /* Bleu Airtechnic */
  font-family: 'Poppins', sans-serif;
  padding-top: 6rem;
  padding-bottom: 6rem;
  overflow: hidden;
  position: relative;
}

/* Élément décoratif */
.contact-section-full::before {
    content: '';
    position: absolute; right: -10%; bottom: -20%; width: 500px; height: 500px;
    background: radial-gradient(circle, rgba(61, 168, 255, 0.1) 0%, rgba(10, 26, 47, 0) 70%);
    border-radius: 50%; pointer-events: none;
}

/* ----------- WRAPPER STRICT 130PX ----------- */
.contact-equipe-wrapper {
  display: flex; flex-direction: row; align-items: center; justify-content: space-between; gap: 5vw;
  width: 100%; max-width: 2560px; margin: 0 auto;
  padding-left: 130px; padding-right: 130px; /* ALIGNEMENT STRICT */
  box-sizing: border-box; position: relative; z-index: 2;
}

.contact-equipe-column-1, .contact-equipe-column-2 { flex: 1; }

/* ----------- TEXTES ----------- */
.kicker-tech {
  font-size: 1rem; font-weight: 600; color: #3DA8FF;
  text-transform: uppercase; letter-spacing: 2px; margin-bottom: 1rem;
}
.contact-equipe-column-1 h2 {
  font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 700; color: white;
  line-height: 1.1; margin-bottom: 2rem;
}
.txt-content { font-size: 1.1rem; color: #9CA3AF; line-height: 1.6; max-width: 500px; }

/* AJOUT : Style pour strong/b */
.txt-content strong, 
.txt-content b { 
    color: white; 
    font-weight: 600; 
}

.tech-specs { margin-top: 2rem; display: flex; gap: 2rem; }
.spec-item { color: white; font-size: 0.9rem; display: flex; align-items: center; gap: 0.5rem; }
.dot-spec { width: 8px; height: 8px; background-color: #3DA8FF; border-radius: 50%; }

/* ----------- FORMULAIRE ----------- */
.contact-equipe-column-2 form {
  background-color: white; /* Formulaire Blanc pour contraste articles */
  padding: 3rem; border-radius: 4px; width: 100%; max-width: 550px; margin-left: auto;
}

.contact-equipe-form-line { display: flex; flex-direction: column; margin-bottom: 1.5rem; }
.contact-equipe-form-line label { font-size: 0.9rem; font-weight: 600; color: #0A1A2F; margin-bottom: 0.5rem; }
.contact-equipe-form-line span { color: #3DA8FF; }

form input, form textarea {
  font-family: 'Poppins', sans-serif; font-size: 0.95rem; padding: 0.8rem 1rem;
  border-radius: 4px; background-color: #F8FAFC; border: 1px solid #E2E8F0;
  color: #0A1A2F; width: 100%;
}
form input:focus, form textarea:focus { outline: none; border-color: #3DA8FF; }
.contact-equipe-form-line textarea { min-height: 120px; }

/* BOUTON AVEC EFFET SLIDE ET BORDS CARRÉS */
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

.form-feedback { padding:1rem; margin-bottom:1rem; border-radius:4px; }
.success { background:#d4edda; color:#155724; } .error { background:#f8d7da; color:#721c24; }

/* ----------- RESPONSIVE ----------- */
@media (max-width: 1024px) {
  .contact-equipe-wrapper { flex-direction: column; padding-left: 20px; padding-right: 20px; }
  .contact-equipe-column-1 { text-align: center; margin-bottom: 3rem; }
  .txt-content { margin: 0 auto; }
  .tech-specs { justify-content: center; }
  .contact-equipe-column-2 form { margin: 0 auto; padding: 1.5rem; }
  
  .submit-btn { font-size: 16px; padding: 15px; }
}
</style>