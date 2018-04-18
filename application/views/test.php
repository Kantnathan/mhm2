<h1>Bonjour</h1>

<p>
    Ceci est mon paragraphe !
</p>

<p>
    Votre prenom est <?php echo $nom; ?>.
</p>

<p>
    Votre email est <?php echo $email; ?>.
</p>
<p>
    Votre email est <?php echo $adresse_ip; ?>.
</p>

<p>
<?php if($en_ligne): ?>
    Vous êtes en ligne.
<?php else: ?>
    Vous n'êtes pas en ligne.
<?php endif; ?>
<?php echo site_url('test') ?>