<?php

get_header(); ?>
<main id="main">
	<!-- Tab panels -->


	<div id="modulIndhold">
		<?php
		if (is_front_page() ){
		?>
		<div class="modulIndhold" id="soegeResultat" role="tabpanel">
			<div class="row" id="soegeResultater">
			</div>
		</div>
		<div class="modulIndhold container-fluid nogutter" id="forside" role="tabpanel">
			<div class="row widgetModul">
				<div class="widgetKolonne widget_area_venstre col-sm-6 col-xs-12">
					<?php dynamic_sidebar( 'widget_area_venstre' ); ?>
				</div>
				<div class="widgetKolonne widget_area_hoejre col-sm-6 col-xs-12">
					<?php dynamic_sidebar( 'widget_area_hoejre' ); ?>
				</div>
			</div>
		</div>
		<?php
		}
		else {
			// Start the loop.
			while ( have_posts() ) : the_post();
				//get_template_part( 'template-parts/content', 'page' );
				$tags = get_the_tags();
				$tagNames = array();
			?>
				<div class="modulIndhold fundetDokument col-md-12 mb-1" id="" data-dokumentid="<?php the_id(); ?>">
					<div class="card hover">
					    <div class="card-header default-color-dark white-text">
					         <h4 class="card-title dokument-titel"><?php the_title();?></h4>
					    </div>
					    <div class="card-block" id="visTagsCard" data-test='[{"tag":"John"}, {"tag":"John"},]' data-tags='[<?php if ($tags) {foreach($tags as $name) {echo '{"tag": "' . $name->name . '"},';}} ?>]'>
							<div class="" id="visTags" ><input class="input ui-autocomplete-input" placeholder="Skriv nyt søgeord og tryk enter" autocomplete="off"></div>

					    </div>
					    <div class="card-block">
						     <a class="btn btn-blue-grey redigerDokument" href="<?php echo get_edit_post_link(); ?>" data-dokumentid="<?php the_id(); ?>">Rediger</a>
					        <div class="card-text"><article><?php the_content();?></article></div>
					    </div>
					</div>
				</div>
			<?php

			endwhile;
		}
	?>
	</div>
</main>

<div id="modulModals">
	<div class="modal fade hoverable" id="visDokumentModal" data-dokumentid="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-fluid" role="document">
		    <div class="modal-content">
					<div class="dokument jumbotron hoverable ui-sortable-handle">
							<div class="row" id="dokumentTitelHolder">
								<!-- <h3 class="widgetTitel" id="dokumentTitel"></h3> -->
								<div class="col-2" id="dokumentTitelHolderFanerSoeg">
									<input type="text" placeholder="Søg..." id="bibliotekSoegeFaneInput" class="waves-effect">
								</div>
								<div class="col-6" id="dokumentTitelHolderFaner">
								</div>
								<div class="col-4">
									<button type="button" class="btn btn-sm btn-rounded btn-amber redigerDokumentKnap" id="redigerDokumentKnap" data-titel="" data-dokumentid=""><i class="fa fa-pencil pr-2" aria-hidden="true"></i>Redigér</button>
									<button type="button" class="btn btn-sm btn-rounded btn-amber " id="visOpretOpgaveModal" data-toggle="modal" data-target="#opretDokumentDialogModal"><i class="fa fa-pencil pr-2" aria-hidden="true"></i>Opret nyt</button>
								</div>
							</div>
							<div id="dokumentSoeg" class="container-fluid">
								<div class="row" id="soegeResultaterModalDokumenter">

								</div>
			        </div>
							<div id="dokumentIndholdsViser" class=" skjul container-fluid">
								<div class="row">
									<div class="col-sm-9" id="dokumentTekst" data-spy="scroll" data-offset="0" data-target="#indholdsfortegnelseListe">
									</div>
									<div class="col-sm-3 sticky indholdsfortegnelse" id="DokumentIndholdsfortegnelse">
										<ul class="nav nav-pills smooth-scroll flex-column" id="indholdsfortegnelseListe">
										</ul>
									</div>
								</div>
			        </div>
							<div class="container-fluid skjul redigerDokumentKolonne" id="redigerDokumentTekst">
								<dl class="row">
									<dt class="col-sm-2" id="">
										<div class="vaelgAfdelingLabel">Vælg afdelinger</div>
									</dt>
									<dd class="col-sm-10" id="">
										<?php
										$afdelingsliste = hent_afdeling_liste_helper();
										echo '<select id="vaelgAfdelingListeBibliotek" class="vaelg-afdeling-liste colorful-select dropdown-primary" multiple><option value="" disabled selected>Klik her for at vælge afdelinger</option>';
										foreach ( $afdelingsliste as $afdelingsid => $afdelingsnavn ) {
											$term = get_term_by( 'id', $afdelingsid, 'afdeling' );
												echo '<option value="' . $term->term_id . '" selected>' . $term->name . '</option>';
										}
										echo '</select>';
										echo '<script type="text/javascript">',
										     'jQuery(".vaelg-afdeling-liste").material_select("destroy");',
										     '</script>';
										echo '<script type="text/javascript">',
										     'jQuery(".vaelg-afdeling-liste").material_select();',
										     '</script>';
										?>
									</dd>
								</dl>
								<hr class="m-y-2">
								<div class="row">
									<div class="col-sm-12" id="">

										<textarea id="dokumentRedigering">
										</textarea>
									</div>
								</div>
			        </div>
					</div>

		        <!-- <div class="modal-header" id="sticky-stopper">
		            <h1 class="heading lead h1-responsive" id="dokumentTitel">Ingen data</h1>
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="white-text">×</span></button>
		        </div>
		        <div class="modal-body container-fluid" id="dokumentIndholdsViser">
							<div class="row">
								<div class="col-sm-9" id="dokumentTekst" data-spy="scroll" data-target="#indholdsfortegnelseListe">
								</div>
								<div class="col-sm-3 sticky indholdsfortegnelse" id="DokumentIndholdsfortegnelse">
									<ul class="nav nav-pills smooth-scroll flex-column" id="indholdsfortegnelseListe">
									</ul>
								</div>
							</div>
		        </div>
-->
<!--
		        <div class="col-md-3 skjul redigerDokumentKolonne">

		        </div>
-->

		    </div>
		</div>
	</div>
	<div class="modal fade" id="redigerDokumentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-fluid modal-notify modal-success" role="document">
		    <div class="modal-content">
		        <div class="modal-header">
		            <p class="heading lead" id="dokumentTitel">Modal Success</p>
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="white-text">×</span></button>
		        </div>
		        <div class="modal-body" id="dokumentTekst">

		        </div>
		        <div class="modal-footer">
		        <div id="redigerKnap">
		        </div>

		        </div>
		    </div>
		</div>
	</div>
    <div class="modal fade" id="opretDokumentDialogModal" tabindex="-1" role="dialog" aria-labelledby="dialogModalOverskrift" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Luk">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="opretDokumentDialogModalOverskrift">Opret nyt dokument</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="md-form">
                            <input type="text" class="form-control" id="opretDokumentDialogModalDokumentTitel">
                            <label for="opretDokumentDialogModalDokumentTitel">skriv titel på dokument her</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuller</button>
                    <button type="button" id="OpretNytDokumentVisEditor" class="btn btn-primary" data-dismiss="modal" data-kilde="opretDokumentModal">Opret Dokument</button>
                </div>
            </div>
        </div>
    </div>


</div>
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
	<div class="skjul">
		<?php wp_editor( '', 'dummyeditor' ); ?>
	</div>
</body>

</html>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script>
    jQuery(".button-collapse").sideNav();

    var el = document.querySelector('.custom-scrollbar');
    Ps.initialize(el);
    </script>
<?php
	get_footer();
