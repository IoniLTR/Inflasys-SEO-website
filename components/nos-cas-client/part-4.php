<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION
   ---------------------
<?php
   $part11_kicker = "Contactez nos équipes";
   $part11_title  = "Discutons de vos besoins";
   
   $part11_paragraph_html = "Vous cherchez <strong>une agence web</strong> de confiance pour votre projet ? <strong>Contactez-nous</strong> et découvrez comment nous pouvons vous aider.";

   require_once '../../components/nos-cas-client/part-4.php';
   ?>
-------------------------------------------------------------- */
?>

<?php
/* Traitement PHP (Mail) */
$to      = $to      ?? 'contact@airtechnic.com';
$from    = $from    ?? 'no-reply@airtechnic.com';
$subject = $subject ?? ('Nouveau lead - Site Web - ' . ($_SERVER['REQUEST_URI'] ?? ''));

$success = false;
$errors  = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!empty($_POST['website'])) { $errors[] = "Erreur de validation."; }
  $nom   = trim($_POST['nom']    ?? '');
  $email = trim($_POST['email']  ?? '');
  $tel   = trim($_POST['tel']    ?? '');
  $msg   = trim($_POST['projet'] ?? '');

  if ($nom === '') $errors[] = "Le nom est requis.";
  if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Email invalide.";
  if ($tel === '') $errors[] = "Téléphone requis.";
  if ($msg === '' || mb_strlen($msg) < 10) $errors[] = "Message trop court.";

  if (empty($errors)) {
    $body  = "Nouveau contact:\nNom: $nom\nEmail: $email\nTel: $tel\n\nMsg:\n$msg";
    $headers = ['From: Site <'.$from.'>', 'Reply-To: '.$email];
    $success = @mail($to, $subject, $body, implode("\r\n", $headers));
    if (!$success) $errors[] = "Erreur serveur.";
  }
}

if (!function_exists('e')) { function e($str) { return htmlspecialchars((string)$str, ENT_QUOTES, 'UTF-8'); } }
?>

<style>
/* ----------- CONTENEUR GLOBAL ----------- */
.contact-equipe {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  background-color: #0A1A2F;
  
  width: 100%;
  
  /* ALIGNEMENT STRICT SELON MODELE */
  max-width: 2560px;
  margin: 0 auto;
  padding-left: 130px;
  padding-right: 130px;
  
  box-sizing: border-box;
  min-height: 80vh;
  padding-top: 5rem;
  padding-bottom: 5rem;
  gap: 5vw;
  font-family: 'Poppins', sans-serif;
}

.contact-equipe-column-1,
.contact-equipe-column-2 {
  width: 50%;
}

/* ----------- TEXTES ----------- */
.contact-kicker {
  font-size: 1.25rem;
  font-weight: 600;
  color: #3DA8FF;
  margin-bottom: 1rem;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.contact-equipe-column-1 h2 {
  font-size: clamp(2.5rem, 4vw, 3.5rem);
  font-weight: 800;
  color: white;
  margin-bottom: 1.5rem;
  line-height: 1.1;
  margin-top: 0;
}

.contact-equipe-column-1 p {
  font-size: 1.125rem;
  color: #9CA3AF;
  line-height: 1.6;
}

/* AJOUT : Style pour les balises strong/b à l'intérieur du paragraphe */
.contact-equipe-column-1 p strong,
.contact-equipe-column-1 p b {
    color: white;
    font-weight: 600;
}

/* ----------- FORMULAIRE ----------- */
.contact-equipe-column-2 {
  display: flex;
  flex-direction: column;
}

.contact-equipe-column-2 form {
  background-color: #ffffff;
  display: flex;
  flex-direction: column;
  padding: 40px;
  border-radius: 8px;
  width: 100%;
  box-sizing: border-box;
  box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

.contact-equipe-form-line {
  display: flex;
  flex-direction: column;
  color: #0A1A2F;
  margin-bottom: 20px;
}

.contact-equipe-form-line label {
  font-size: 0.9rem;
  font-weight: 600;
  margin-bottom: 8px;
  color: #0A1A2F;
}

.contact-equipe-form-line span { color: #3DA8FF; }

form input:not([type="submit"]), 
form textarea {
  width: 100%;
  box-sizing: border-box;
  font-size: 1rem;
  padding: 12px 15px;
  border-radius: 4px;
  background-color: #F3F4F6;
  border: 1px solid #E5E7EB;
  font-family: 'Poppins', sans-serif;
}

form input:not([type="submit"]):focus, 
form textarea:focus {
    outline: none;
    border-color: #3DA8FF;
    background-color: #ffffff;
}

.contact-equipe-form-line textarea {
  min-height: 120px;
  resize: vertical;
}

form input[type="submit"] {
  background: linear-gradient(100deg, #0A1A2F 0%, #0A1A2F 50%, #3DA8FF 50%, #3DA8FF 100%);
  background-size: 210% 100%;
  background-position: left;
  transition: background-position 0.6s ease;
  color: white;
  font-size: 1rem;
  font-weight: 600;
  text-transform: uppercase;
  border: none;
  padding: 15px;
  border-radius: 4px;
  cursor: pointer;
  margin-top: 10px;
  width: 100%;
}

form input[type="submit"]:hover { background-position: right; }

.alert-box { padding: 15px; border-radius: 4px; margin-bottom: 20px; font-size: 0.9rem; }
.alert-success { background: #d1fae5; color: #065f46; border: 1px solid #34d399; }
.alert-error { background: #fee2e2; color: #991b1b; border: 1px solid #f87171; }

/* --- Responsive (Basé sur le modèle) --- */
@media (max-width: 1024px) {
  .contact-equipe {
    flex-direction: column;
    /* Aligné mobile : 20px */
    padding-left: 20px;
    padding-right: 20px;
    
    gap: 3rem;
    height: auto;
  }
  .contact-equipe-column-1, .contact-equipe-column-2 { width: 100%; }
  .contact-equipe-column-1 { text-align: center; }
}

@media (max-width: 425px) {
    .contact-equipe-column-2 form { padding: 20px; }
}
</style>

<section class="contact-equipe">
  <div class="contact-equipe-column-1">
    <div class="contact-kicker"><?= e($part11_kicker ?? 'Contact') ?></div>
    <h2><?= e($part11_title ?? 'Parlons de votre projet') ?></h2>
    
    <!-- Modification ICI : utilisation de strip_tags pour autoriser le HTML sécurisé -->
    <p><?= strip_tags($part11_paragraph_html ?? 'Remplissez le formulaire pour discuter avec nos experts techniques.', '<strong><b><br><em><u>') ?></p>
  
  </div>

  <div class="contact-equipe-column-2">
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
      <?php if ($success): ?>
        <div class="alert-box alert-success">Merci, votre message a bien été transmis.</div>
      <?php else: ?>
        <div class="alert-box alert-error">
          <strong>Erreur :</strong><br>
          <?php foreach ($errors as $err): echo "• ".e($err)."<br>"; endforeach; ?>
        </div>
      <?php endif; ?>
    <?php endif; ?>

    <form method="post" action="" novalidate>
      <input type="text" name="website" autocomplete="off" tabindex="-1" style="display:none;" aria-hidden="true">

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
        <label for="projet">Votre projet<span>*</span></label>
        <textarea id="projet" name="projet" required><?= e($_POST['projet'] ?? '') ?></textarea>
      </div>

      <input type="submit" value="ENVOYER LA DEMANDE">
    </form>
  </div>
</section>