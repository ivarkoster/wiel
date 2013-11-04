
{{ content() }}

<div class="login-or-signup">
	<div class="row">
        <div class="col-lg-6">
           	<div class="page-header">
               	<h2>Renner</h2>
           	</div>
            {{ form('renner/add', 'id': 'registerForm',  'onbeforesubmit': 'return false') }}

			<div class="form-group">
				<label for="voornaam">Voornaam</label>
		  		<div class="input-group">
	   				{{ text_field('voornaam', 'class':'form-control', 'id':'voornaam', 'placeholder':'Voornaam') }}
	                <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
		  		</div>
		  		<div class="alert alert-danger" id="voornaam_alert">
	                    <strong>Verplicht!</strong> Voornaam is een verplicht veld
	            </div>
			</div>

			<div class="form-group">
				<label for="tussenvoegsel">Tussenvoegsel</label>
		  		<div class="input-group">
	   				{{ text_field('tussenvoegsel', 'class':'form-control', 'id':'tussenvoegsel', 'placeholder':'Tussenvoegsel') }}
		  		</div>
	        </div>

			<div class="form-group">
				<label for="achternaam">Achternaam</label>
		  		<div class="input-group">
	   				{{ text_field('achternaam', 'class':'form-control', 'id':'achternaam', 'placeholder':'Achternaam') }}
	                <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
		  		</div>
		  		<div class="alert alert-danger" id="achternaam_alert">
	                    <strong>Verplicht!</strong> Achternaam is een verplicht veld
	            </div>
	        </div>

			<div class="form-group">
				<label for="dob">Geboren op</label>
		  		<div class="input-group">
	   				{{ text_field('dob', 'class':'form-control datepicker', 'id':'datepicker', 'placeholder':'Geboorte datum') }}
		  		</div>
	        </div>

	        <div class="form-group">
			    <label for="skillKlimmen">Klimmen:</label>
			    <input type="text" id="skillKlimmen" style="border: 0; color: #f6931f; font-weight: bold;" />
	        	<div id="skillSliderKlimmen" style="width:300px"></div>
	        </div>
	        <script language="Javascript">
	        $(document).ready(function () {
	            //klimmen
	            $( "#skillSliderKlimmen" ).slider({
	                range: "max",
	                min: 0,
	                max: 10,
	                value: 0,
	                slide: function( event, ui ) {
	                  $( "#skillKlimmen" ).val( ui.value );
	                }
	              });
            	  $("#skillKlimmen").val( $("#skillSliderKlimmen").slider("value") );
	        });
	        </script>

	        <div class="form-group">
			    <label for="skillSprinten">Sprinten:</label>
			    <input type="text" id="skillSprinten" style="border: 0; color: #f6931f; font-weight: bold;" />
	        	<div id="skillSliderSprinten" style="width:300px"></div>
	        </div>
	        <script language="Javascript">
	        $(document).ready(function () {
	            //klimmen
	            $("#skillSliderSprinten").slider({
	                range: "max",
	                min: 0,
	                max: 10,
	                value: 0,
	                slide: function( event, ui ) {
	                  $("#skillSprinten").val( ui.value );
	                }
	              });
            	  $("#skillSprinten").val( $("#skillSliderSprinten").slider("value") );
	        });
	        </script>

	        <div class="form-group">
			    <label for="skillAanvallen">Aanvallen:</label>
			    <input type="text" id="skillAanvallen" style="border: 0; color: #f6931f; font-weight: bold;" />
	        	<div id="skillSliderAanvallen" style="width:300px"></div>
	        </div>
	        <script language="Javascript">
	        $(document).ready(function () {
	            //klimmen
	            $("#skillSliderAanvallen").slider({
	                range: "max",
	                min: 0,
	                max: 10,
	                value: 0,
	                slide: function( event, ui ) {
	                  $("#skillAanvallen").val( ui.value );
	                }
	              });
            	  $("#skillAanvallen").val( $("#skillSliderAanvallen").slider("value") );
	        });
	        </script>

	        <div class="form-group">
			    <label for="skillTijdrijden">Tijdrijden:</label>
			    <input type="text" id="skillTijdrijden" style="border: 0; color: #f6931f; font-weight: bold;" />
	        	<div id="skillSliderTijdrijden" style="width:300px"></div>
	        </div>
	        <script language="Javascript">
	        $(document).ready(function () {
	            //klimmen
	            $("#skillSliderTijdrijden").slider({
	                range: "max",
	                min: 0,
	                max: 10,
	                value: 0,
	                slide: function( event, ui ) {
	                  $("#skillTijdrijden").val( ui.value );
	                }
	              });
            	  $("#skillTijdrijden").val( $("#skillSliderTijdrijden").slider("value") );
	        });
	        </script>

	  		<div class="form-group">
	  		<br />
	  			{{ submit_button('Opslaan', 'class': 'btn btn-primary', 'name': 'opslaan', 'onclick': 'return Renner.validate();') }}
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
