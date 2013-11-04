
{{ content() }}

<div class="login-or-signup">
	<div class="row">
        <div class="col-lg-3">
           	<div class="page-header">
               	<h2>Log In</h2>
           	</div>
            {{ form('user/login',  'role': 'form') }}

			<div class="form-group">

   				<label for="exampleInputEmail1">Email address</label>
   				{{ text_field('email', 'class':'form-control', 'id':'emailInput', 'placeholder':'Enter e-mail') }}
	  		</div>
	 		<div class="form-group">
	    		<label for="exampleInputPassword1">Password</label>
	    		{{ password_field('password', 'class':'form-control', 'id':'passwordInput', 'placeholder':'Password') }}
	  		</div>
	  		<div class="form-group">
	  			{{ submit_button('Login', 'class': 'btn btn-primary') }}
	  		</div>
	  		</form>
        </div>

		<div class="col-lg-3"></div>

		<div class="col-lg-6">
    		<div class="page-header">
        		<h2>Nog geen account?</h2>
            </div>

            <p>Maak een account aan door je te registreren:</p>
            <ul>
                <li>Meedoen !</li>
                <li>Bijhouden van al je voorspellignen</li>
                <li>Blijf op de hoogte van aanpassingen</li>
                <li>Gewoon omdat het leuk is... je weet toch</li>
                <li>Omdat je het wil!</li>
            </ul>

            <div>
                {{ link_to('user/register', 'Registreren', 'class': 'btn btn-primary btn-default btn-success') }}
            </div>
        </div>

    </div>
</div>
