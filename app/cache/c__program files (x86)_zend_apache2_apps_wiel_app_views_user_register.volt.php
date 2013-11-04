
<?php echo $this->getContent(); ?>

<div class="login-or-signup">
	<div class="row">
        <div class="col-lg-6">
           	<div class="page-header">
               	<h2>Registreer</h2>
           	</div>
            <?php echo Phalcon\Tag::form(array('user/register', 'id' => 'registerForm', 'onbeforesubmit' => 'return false')); ?>

			<div class="form-group">
				<label for="voornaam">Voornaam</label>
		  		<div class="input-group">
	   				<?php echo Phalcon\Tag::textField(array('voornaam', 'class' => 'form-control', 'id' => 'voornaam', 'placeholder' => 'Voornaam')); ?>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
		  		</div>
		  		<div class="alert alert-danger" id="voornaam_alert">
	                    <strong>Verplicht!</strong> Voornaam is een verplicht veld
	            </div>
			</div>

			<div class="form-group">
				<label for="achternaam">Achternaam</label>
		  		<div class="input-group">
	   				<?php echo Phalcon\Tag::textField(array('achternaam', 'class' => 'form-control', 'id' => 'achternaam', 'placeholder' => 'Achternaam')); ?>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
		  		</div>
		  		<div class="alert alert-danger" id="achternaam_alert">
	                    <strong>Verplicht!</strong> Achternaam is een verplicht veld
	            </div>
	        </div>

			<div class="form-group">
				<label for="email">E-mail adres</label>
		  		<div class="input-group">
	   				<?php echo Phalcon\Tag::textField(array('email', 'class' => 'form-control', 'id' => 'email', 'placeholder' => 'E-mail')); ?>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
		  		</div>
		  		<div class="alert alert-danger" id="email_alert">
	                    <strong>Verplicht!</strong> E-mail adres is verplicht
	            </div>
		  		<div class="alert alert-danger" id="email_alert2">
	                    <strong>Onjuist!</strong> E-mail adres is ongeldig (neem contact op indien het volgens jou wel
	                    een correct e-mail adres is)
	            </div>
	        </div>

			<div class="form-group">
				<label for="password1">Wachtwoord</label>
		  		<div class="input-group">
	   				<?php echo Phalcon\Tag::passwordField(array('password1', 'class' => 'form-control', 'id' => 'password1', 'placeholder' => 'Wachtwoord')); ?>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
		  		</div>
		  		<div class="alert alert-danger" id="password1_alert">
	                    <strong>OH NEEeee<span style="font-size:.8em">ee</span>
	                    <span style="font-size:.5em">ee...</span></strong>
	                    Wachtwoord is verplicht
	            </div>
	            <div class="alert alert-danger" id="password1_alert2">
	                    <strong>Onoes!</strong> Wachtwoord moet minimaal 3 karaters bevatten
	            </div>
	        </div>

			<div class="form-group">
				<label for="password2">Wachtwoord verifi&euml;ren</label>
		  		<div class="input-group">
	   				<?php echo Phalcon\Tag::passwordField(array('password2', 'class' => 'form-control', 'id' => 'password2', 'placeholder' => 'Wachtwoord verifi&euml;ren')); ?>
	                <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
		  		</div>
		  		<div class="alert alert-danger" id="password2_alert">
	                    <strong>Oeps!</strong> Wachtwoord komt niet overeen.
	            </div>
	        </div>

	  		<div class="form-group">
	  			<?php echo Phalcon\Tag::submitButton(array('Registreren', 'class' => 'btn btn-primary', 'name' => 'register', 'onclick' => 'return SignUp.validate();')); ?>
	  		</div>
	  		</form>
        </div>


		<div class="col-lg-6">
    		<div class="page-header">
        		<h2>Registereren, waarom is het nodig?</h2>
            </div>

            <p>
            	Registreren is nodig zodat we de ingevulde gegevens kunnen koppelen aan een gebruiker. Het is anders
                onmogelijk om te weten wie wat heeft ingevuld.
            </p>

            <p>
                Een bijkomstigheid is dat je alle data op 1 plek hebt, en met alle data bedoel ik ook de historische
                data. Dus de Giro van 2014  terug bekijken? geen probleem! Updates ontvangen wanneer er nieuwe scores
                zijn? Kan allemaal, of niet... wat je wil!
            </p>

			<p>
				Er zal geen post/reclame verstuurd worden, of marketing strategieen worden gemaakt gebaseerd op sekse,
				leeftijd, etc. Dus alleen de minimale gegevens zijn nodig.
			</p>

			<p>
				Per spel kan je jezelf aanmelden en moet een nickname verzinnen.
			</p>
        </div>

    </div>
</div>
