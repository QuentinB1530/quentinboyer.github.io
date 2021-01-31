<h5>Contactez-moi ou Envoyez-moi votre recette</h5>

	<form method="post">
    	<input type="email" name="email" placeholder="Votre e-mail" required><br>
     	<input type="subject" name="sujet" placeholder="L'objet de votre message" required><br>
  		<textarea name="message" placeholder="Votre message ou votre recette ici..." required></textarea><br>
  		<input type="submit" value="Envoyer" id="bouton_d_envoi">
	    <style>#bouton_d_envoi {font-size: 1.5em; background-color: #DCDCDC;} #bouton_d_envoi:hover {background-color: #AC0000; color: #FFFFFF;cursor: pointer; transition: 0.3s ease-in-out;}</style>
    </form>
    <?php
    	if (isset($_POST['message'])) {
        	$position_arobase = strpos($_POST['email'], '@');
       		if ($position_arobase === false)
            	echo '<p>Votre email doit comporter un arobase.</p>';
        	else {
            	$retour = mail('quentin.boyer1530@gmail.com', $_POST['sujet'], $_POST['message'], 'From: ' . $_POST['email']);
            	if($retour)
                	echo '<p>Votre message a été envoyé avec succès.</p>';
            	else
                	echo '<p>Erreur.</p>';
        	}
    	}
    ?>

	<div id="trait-footer"></div>

	<div id="copyright_icones">

		<div id="copyright">

			<span>© <a href="../cv/cv.html">QuentinBOYER</a> 2021</span>

		</div>

		<div id="icones">

			<a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>

			<a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>

			<a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a>

		</div>

	</div>