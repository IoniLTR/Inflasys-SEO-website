<?php
/* --------------------------------------------------------------
   EXEMPLE D’UTILISATION DANS UNE PAGE
   -----------------------------------
<?php
   // CONFIGURATION TEXTES
   $part11_kicker         = "Contactez nos équipes";
   $part11_title          = "Discutons de vos besoins";
   
   $part11_paragraph_html = "Vous cherchez <strong>une agence web</strong> de confiance pour votre projet ? <strong>Contactez-nous</strong> et découvrez comment nous pouvons vous aider.";

   require_once '../../components/nos-realisations/part-3.php';
   ?>
-------------------------------------------------------------- */
?>

<?php
// Logique PHP
$to      = $to      ?? 'contact@airtechnic.com';
$from    = $from    ?? 'no-reply@airtechnic.com'; 
$subject = $subject ?? ('Lead Site Web - ' . ($_SERVER['REQUEST_URI'] ?? ''));
$success = false; $errors  = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!empty($_POST['website'])) { $errors[] = "Erreur de validation."; }
  $nom = trim($_POST['nom'] ?? ''); $email = trim($_POST['email'] ?? ''); 
  $tel = trim($_POST['tel'] ?? ''); $msg = trim($_POST['projet'] ?? '');

  if ($nom === '') $errors[] = "Le nom est requis.";
  if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Email invalide.";
  if ($tel === '') $errors[] = "Téléphone requis.";
  if (mb_strlen($msg) < 5) $errors[] = "Message trop court.";

  if (empty($errors)) {
    $body = "Nouveau projet :\nNom: $nom\nEmail: $email\nTel: $tel\nProjet:\n$msg";
    $headers = ['From: Site Airtechnic <'.$from.'>', 'Reply-To: '.$email, 'Content-Type: text/plain; charset=UTF-8'];
    $success = @mail($to, "Nouveau Lead", $body, implode("\r\n", $headers));
    if (!$success) $errors[] = "Erreur serveur.";
  }
}
function e($str) { return htmlspecialchars((string)$str, ENT_QUOTES, 'UTF-8'); }
?>

<style>
/* Import Police */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

/* ----------- SECTION GLOBALE ----------- */
.contact-section-full {
  width: 100%;
  background-color: #0A1A2F; /* Fond Bleu Airtechnic */
  font-family: 'Poppins', sans-serif;
  padding-top: 6rem;
  padding-bottom: 6rem;
  overflow: hidden;
  position: relative;
}

/* Élément décoratif */
.contact-section-full::before {
    content: '';
    position: absolute;
    right: -10%;
    bottom: -20%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(61, 168, 255, 0.1) 0%, rgba(10, 26, 47, 0) 70%);
    border-radius: 50%;
    pointer-events: none;
}

/* ----------- WRAPPER STRICT 130PX ----------- */
.contact-equipe-wrapper {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  gap: 5vw;
  
  width: 100%;
  max-width: 2560px;
  margin: 0 auto;
  padding-left: 130px;  /* ALIGNEMENT HEADER */
  padding-right: 130px; /* ALIGNEMENT HEADER */
  box-sizing: border-box;
  position: relative;
  z-index: 2;
}

.contact-equipe-column-1,
.contact-equipe-column-2 {
  flex: 1;
}

/* ----------- TEXTES (GAUCHE) ----------- */
.kicker-tech {
  font-size: 1rem;
  font-weight: 600;
  color: #3DA8FF;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: 1rem;
}

.contact-equipe-column-1 h2 {
  font-size: clamp(2.5rem, 5vw, 4rem);
  font-weight: 700;
  color: white;
  line-height: 1.1;
  margin-bottom: 2rem;
}

.txt-content {
  font-size: 1.125rem;
  color: #9CA3AF;
  line-height: 1.6;
  max-width: 500px;
}

/* C'est ici que le style des strong est défini */
.txt-content strong, 
.txt-content b {
    color: white;
    font-weight: 600;
}

.tech-specs {
    margin-top: 2rem;
    display: flex;
    gap: 2rem;
}
.spec-item {
    color: white;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}
.dot-spec {
    width: 8px;
    height: 8px;
    background-color: #3DA8FF;
    border-radius: 50%;
}

/* ----------- FORMULAIRE (DROITE) ----------- */
.contact-equipe-column-2 form {
  background-color: #11223a; 
  border: 1px solid rgba(61, 168, 255, 0.15);
  box-shadow: 0 20px 40px rgba(0,0,0,0.2);
  display: flex;
  flex-direction: column;
  padding: 3rem;
  border-radius: 8px;
  width: 100%;
  max-width: 600px;
  margin-left: auto; /* Pousse le formulaire à droite si besoin */
}

.contact-grid-row {
    display: flex;
    gap: 1.5rem;
}
.half { flex: 1; }

.contact-equipe-form-line {
  display: flex;
  flex-direction: column;
  margin-bottom: 1.5rem;
  width: 100%;
}

.contact-equipe-form-line label {
  font-size: 0.9rem;
  font-weight: 500;
  color: white;
  margin-bottom: 0.5rem;
}

.contact-equipe-form-line span {
  color: #3DA8FF;
}

form input, form textarea {
  font-family: 'Poppins', sans-serif;
  font-size: 0.95rem;
  padding: 0.8rem 1rem;
  border-radius: 4px;
  background-color: #0A1A2F; 
  border: 1px solid #2d3b55;
  color: white;
  transition: all 0.3s ease;
  width: 100%;
}

form input:focus, form textarea:focus {
    outline: none;
    border-color: #3DA8FF;
    box-shadow: 0 0 0 3px rgba(61, 168, 255, 0.1);
}

.contact-equipe-form-line textarea {
  min-height: 120px;
  resize: vertical;
}

.honeypot { position:absolute; left:-9999px; opacity:0; }

.submit-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  background: linear-gradient(135deg, #0A1A2F 0%, #3DA8FF 100%);
  color: white;
  font-size: 1rem;
  font-weight: 600;
  padding: 1rem 2rem;
  border: 1px solid #3DA8FF;
  border-radius: 4px;
  cursor: pointer;
  transition: all 0.3s ease;
  text-transform: uppercase;
}

.submit-btn:hover {
  background: linear-gradient(135deg, #3DA8FF 0%, #0A1A2F 100%);
  box-shadow: 0 5px 15px rgba(61, 168, 255, 0.3);
}

.submit-btn svg { fill: currentColor; width: 20px; height: 20px; }

.form-feedback { padding: 1rem; border-radius: 4px; margin-bottom: 1rem; width: 100%; max-width: 600px; }
.success { background: #d4edda; color: #155724; }
.error { background: #f8d7da; color: #721c24; }

/* ============================= */
/* RESPONSIVE < 1024px           */
/* ============================= */
@media (max-width: 1024px) {
  .contact-equipe-wrapper {
    flex-direction: column;
    padding-left: 20px;  /* Adaptation Tablette */
    padding-right: 20px; /* Adaptation Tablette */
  }
  
  .contact-equipe-column-1 {
      text-align: center;
      margin-bottom: 3rem;
  }
  
  .txt-content { margin: 0 auto; }
  .tech-specs { justify-content: center; }
  
  .contact-equipe-column-2 form {
      margin: 0 auto;
      padding: 1.5rem;
  }

  .contact-grid-row {
      flex-direction: column;
      gap: 0;
  }
}
</style>

<section class="contact-section-full">
    <div class="contact-equipe-wrapper">
      
      <div class="contact-equipe-column-1">
        <!-- On échappe le titre et le kicker par sécurité avec e() -->
        <div class="kicker-tech"><?= e($part11_kicker ?? 'Contact') ?></div>
        <h2><?= e($part11_title ?? 'Démarrer un projet') ?></h2>
        
        <!-- ICI : On autorise le HTML (strong, br, etc.) tout en sécurisant le reste avec strip_tags -->
        <div class="txt-content">
            <?= strip_tags($part11_paragraph_html ?? '', '<strong><b><br><em><u>') ?>
        </div>
        
      </div>

      <div class="contact-equipe-column-2">
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
          <div class="form-feedback <?= $success ? 'success' : 'error' ?>">
            <?= $success ? "Message transmis à nos ingénieurs." : "Erreur : " . implode(', ', $errors) ?>
          </div>
        <?php endif; ?>

        <form method="post" action="" novalidate>
          <input type="text" name="website" class="honeypot" aria-hidden="true">

          <div class="contact-equipe-form-line">
            <label for="nom">Nom <span>*</span></label>
            <input type="text" id="nom" name="nom" value="<?= e($_POST['nom'] ?? '') ?>" required placeholder="Ex: Jean Dupont - Airbus">
          </div>

          <div class="contact-grid-row">
              <div class="contact-equipe-form-line half">
                <label for="email">Email <span>*</span></label>
                <input type="email" id="email" name="email" value="<?= e($_POST['email'] ?? '') ?>" required placeholder="email@societe.com">
              </div>

              <div class="contact-equipe-form-line half">
                <label for="tel">Téléphone <span>*</span></label>
                <input type="tel" id="tel" name="tel" value="<?= e($_POST['tel'] ?? '') ?>" required placeholder="06 00 00 00 00">
              </div>
          </div>

          <div class="contact-equipe-form-line">
            <label for="projet">Votre projet<span>*</span></label>
            <textarea id="projet" name="projet" required placeholder="Décrivez votre besoin technique..."><?= e($_POST['projet'] ?? '') ?></textarea>
          </div>

          <button type="submit" class="submit-btn">
              Envoyer
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M6 18h2v-7.17l8.59 8.58 1.41-1.41L9.41 9.42H16.58V7.41H6z"/></svg>
          </button>
        </form>
      </div>

    </div>
</section>