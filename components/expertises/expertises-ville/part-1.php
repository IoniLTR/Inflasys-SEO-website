<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION
   -----------------------------------
<?php
    $part1_title = $ville_h2_contact; 
    $part1_paragraph_html = [
    "Donnez vie à votre projet web à " . $ville_nom . " avec une agence spécialisée :",
    "bénéficiez d'une vitrine unique."
    ];
    $part1_btn_label      = "Nous Contacter";
    $part1_btn_link       = "contact";
    require_once $base_path . 'components/expertises/expertises-ville/part-1.php';
    ?>
-------------------------------------------------------------- */

// Config Mail
$to      = $to      ?? 'contact@airtechnic.com';
$from    = $from    ?? 'no-reply@airtechnic.fr';
$subject = $subject ?? ('Contact Expertise Ville - ' . ($_SERVER['REQUEST_URI'] ?? ''));

$success = false;
$errors  = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!empty($_POST['website'])) { $errors[] = "Erreur d’envoi."; }
  $nom   = trim($_POST['nom'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $tel   = trim($_POST['tel'] ?? '');
  $msg   = trim($_POST['projet'] ?? '');

  if ($nom === '') { $errors[] = "Le nom est obligatoire."; }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $errors[] = "Email invalide."; }
  if ($tel === '') { $errors[] = "Le téléphone est obligatoire."; }
  if (mb_strlen($msg) < 5) { $errors[] = "Message trop court."; }

  if (empty($errors)) {
    $body = "Nom: $nom\nEmail: $email\nTel: $tel\nMessage:\n$msg";
    $headers = "From: $from\r\nReply-To: $email\r\nX-Mailer: PHP/".phpversion();
    if (@mail($to, $subject, $body, $headers)) { $success = true; } else { $errors[] = "Erreur serveur."; }
  }
}
?>

<section class="contact-ville">
  <div class="contact-ville-col-1">
    <h2><?= htmlspecialchars($part1_title ?? '', ENT_QUOTES, 'UTF-8') ?></h2>
    
    <div class="contact-ville-text">
        <?php if (is_array($part1_paragraph_html)): ?>
            <?php foreach ($part1_paragraph_html as $p): ?>
                <p><?= nl2br($p) // On autorise le HTML simple comme <br> ou <strong> si besoin ?></p>
            <?php endforeach; ?>
        <?php else: ?>
            <p><?= nl2br($part1_paragraph_html ?? '') ?></p>
        <?php endif; ?>
    </div>
    
    <a href="<?php echo $base_url ?><?= htmlspecialchars($part1_btn_link, ENT_QUOTES, 'UTF-8') ?>" class="contact-ville-btn">
      <div><?= htmlspecialchars($part1_btn_label, ENT_QUOTES, 'UTF-8') ?></div>
      <div class="contact-ville-icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
      </div>
    </a>
  </div>

  <div class="contact-ville-col-2">
    <?php if ($success): ?>
        <div style="background:#D1FAE5;color:#065F46;padding:15px;border-radius:4px;margin-bottom:20px;">Message envoyé !</div>
    <?php elseif (!empty($errors)): ?>
        <div style="background:#FEE2E2;color:#991B1B;padding:15px;border-radius:4px;margin-bottom:20px;"><?php foreach($errors as $e) echo htmlspecialchars($e)."<br>"; ?></div>
    <?php endif; ?>

    <form method="post" action="">
      <input type="text" name="website" style="display:none;">
      
      <div class="form-group">
        <label>Nom</label>
        <input type="text" name="nom" required value="<?= isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '' ?>">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" required value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
      </div>
      <div class="form-group">
        <label>Téléphone</label>
        <input type="tel" name="tel" required value="<?= isset($_POST['tel']) ? htmlspecialchars($_POST['tel']) : '' ?>">
      </div>
      <div class="form-group">
        <label>Projet</label>
        <textarea name="projet" required><?= isset($_POST['projet']) ? htmlspecialchars($_POST['projet']) : '' ?></textarea>
      </div>

      <input type="submit" value="ENVOYER" class="submit-btn">
    </form>
  </div>
</section>

<style>
.contact-ville {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    background-color: #0A1A2F; /* Bleu Foncé */
    width: 100%;
    min-height: 100vh;
    
    /* Marges Standards */
    padding: 140px 130px 6.94vw 130px; 
    max-width: 2560px;
    margin: 0 auto;
    
    gap: 5.55vw;
    color: white;
    font-family: 'Poppins', sans-serif;
}

.contact-ville-col-1, .contact-ville-col-2 { width: 50%; }

.contact-ville-col-1 h2 {
    font-size: 2.78vw; font-weight: 800; margin-bottom: 2vw; line-height: 1.2;
}

/* Style du texte paragraphe */
.contact-ville-text p {
    font-size: 1.2vw; line-height: 1.6; color: #9CA3AF; margin-bottom: 1.5vw;
}
.contact-ville-text { margin-bottom: 3vw; }

/* Bouton Gradient */
.contact-ville-btn {
    display: flex; justify-content: space-between; align-items: center;
    background: linear-gradient(100deg, #3DA8FF 0%, #3DA8FF 50%, #ffffff 50%, #ffffff 100%);
    background-size: 210% 100%; background-position: left;
    transition: background-position 0.6s ease;
    padding: 0.8vw 1.5vw; border-radius: 50px;
    color: #fff; font-size: 1.042vw; font-weight: 600; text-transform: uppercase; text-decoration: none;
    width: fit-content; min-width: 200px;
    gap: 1vw;
}
.contact-ville-btn:hover { background-position: right; color: #0A1A2F; }

.contact-ville-icon {
    background: #fff; border-radius: 50%; width: 2vw; height: 2vw;
    display: flex; align-items: center; justify-content: center; transition: 0.3s; color: #0A1A2F;
}
.contact-ville-btn:hover .contact-ville-icon { background: #0A1A2F; color: #fff; }
.contact-ville-icon svg { width: 1.2vw; height: 1.2vw; transition: transform 0.3s; }
.contact-ville-btn:hover .contact-ville-icon svg { transform: rotate(45deg); }

/* Formulaire */
.contact-ville-col-2 form {
    background-color: #ffffff; padding: 3vw; border-radius: 4px; color: #0A1A2F;
}
.form-group { display: flex; flex-direction: column; margin-bottom: 1.5vw; }
.form-group label { font-size: 0.9vw; font-weight: 600; margin-bottom: 0.5vw; }
.form-group input, .form-group textarea {
    width: 100%; padding: 1vw; border: 1px solid #E5E7EB; background-color: #F9FAFB;
    border-radius: 4px; font-family: 'Poppins', sans-serif; font-size: 1vw;
}
.submit-btn {
    width: 100%; background: linear-gradient(100deg, #3DA8FF 0%, #3DA8FF 50%, #0A1A2F 50%, #0A1A2F 100%);
    background-size: 210% 100%; background-position: left; color: white;
    padding: 1vw; border: none; border-radius: 4px; font-size: 1.1vw; font-weight: 700;
    text-transform: uppercase; cursor: pointer; transition: background-position 0.6s ease;
}
.submit-btn:hover { background-position: right; }

@media (max-width: 1024px) {
    .contact-ville { flex-direction: column; padding: 140px 20px 60px 20px; gap: 40px; height: auto; }
    .contact-ville-col-1, .contact-ville-col-2 { width: 100%; }
    .contact-ville-col-1 h2 { font-size: 28px; }
    .contact-ville-text p { font-size: 16px; }
    .contact-ville-btn { width: 100%; font-size: 14px; padding: 12px 24px; justify-content: center; }
    .contact-ville-icon { width: 30px; height: 30px; }
    .contact-ville-icon svg { width: 18px; height: 18px; }
    .contact-ville-col-2 form { padding: 30px; }
    .form-group label { font-size: 14px; }
    .form-group input, .form-group textarea { font-size: 14px; padding: 15px; }
    .submit-btn { font-size: 16px; padding: 15px; }
}
</style>