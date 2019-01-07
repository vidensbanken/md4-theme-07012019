<?php get_header(); ?>
   
<main>
	<!-- Tab panels -->
	<div id="modulIndhold">
		<div class="modulIndhold" id="forside" role="tabpanel">
			<div class="row">
				<div class="col-sm-6">	
					<div class="jumbotron">
					    <h1 class="h1-responsive">DAGENS INFORMATIONv</h1>
					    <p class="lead">Tirsdag d. 11. oktober</p>
					    <hr class="m-y-2">
					    <ul>
						    <li>18:00 - Rundvisning i dag kl. 18:00 - 8 gæster</li>
						    <li>12:00O - OBS! HUSK vi er gået i lavsæson vedr små dobeltværelser til 1 eller 2 pax!</li>
					    </ul>
					    <p class="lead">
					        <a class="btn btn-primary btn-sm" role="button">Gå til Dagens Information</a>
					    </p>
					</div>
				</div>

				<div class="col-sm-6">	
					<div class="jumbotron">
					    <h1 class="h1-responsive">DAGENS OPGAVER</h1>
					    <p class="lead">Tirsdag d. 11. oktober</p>
					    <hr class="m-y-2">
					    <ul>
						    <li>12:00 - Print 20 velkomstkort og aflever til TL inden 12:00</li>
						    <li>Der skal laves sortering via Sortables på alle overskrifter og punkter</li>
					    </ul>
					    <p class="lead">
					        <a class="btn btn-primary btn-sm" role="button">Gå til nyheder</a>
					    </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">	
					<div class="jumbotron">
					    <h1 class="h1-responsive">NYHEDER</h1>
					    <hr class="m-y-2">
					    <p class="lead">Tirsdag d. 11. oktober</p>
					    <ul>
							Der er lavet en opdatering på vores SOP til at lave kreditnota. Læs denne hurtigst muligt under <a href="#" >manualer her</a>.
							Det forventes at alle har styr på dette inden der laves nye kreditnota. Ved spørgsmål kontakt Duty Manager.
					    </ul>
					    <p class="lead">
					        <a class="btn btn-primary btn-sm" role="button">Gå til Dagens Information</a>
					    </p>
					</div>
				</div>

				<div class="col-sm-6">	
					<div class="insta" style="background-image: url('https://scontent-arn2-1.cdninstagram.com/t51.2885-15/e35/14606988_1107477989340829_5558357528418451456_n.jpg?ig_cache_key=MTM1NzE4MzA2NDg0MTQ1NzU0Ng%3D%3D.2');">
					</div>	
				</div>
			</div>
		</div>	
	</div>
</main>

<div id="modulModals">
</div>
    
    <!-- SCRIPTS -->
    <!-- JQuery -->
    
    <script>
    jQuery(".button-collapse").sideNav();
        
    var el = document.querySelector('.custom-scrollbar');
    Ps.initialize(el);
    </script>
<?php 
include 'templates/preloaders.php';
?>

	<div class="col-xs-1" id="animatedOptions">
		<div class="aninmatedOptionsCirkel" id="animatedOptionsLeft">
	
			<a class="btn-floating btn-large red"><i class="fa fa-question"></i></a>
		</div>
<!--
		<div id="animatedOptionsCenter">
		</div>
-->
		<div class="aninmatedOptionsCirkel" id="animatedOptionsRight"></div>
		<div id="animatedOptionsIkon"><a class="btn-floating btn-large red"><i class="fa fa-bars"></i></a></div>
	</div>
</body>

</html>