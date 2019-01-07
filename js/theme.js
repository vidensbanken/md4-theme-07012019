jQuery( document ).ready(function($) {

    jQuery(".sticky").sticky({
        topSpacing: 800
        , zIndex: 2
    });

	jQuery('.mdb-select').material_select();

	jQuery('.sidenav-ikoner').on('click', '.aktiverModulIndhold', function(){ //Oprydning ved skift mellem moduler
		//jQuery('.modulIndhold').html('');
		//jQuery('#modulModals').html('');
		//jQuery(jQuery(this).attr('href')).show();
		//console.log(jQuery(this).attr('href'));
		jQuery("#forside").hide();

	});

jQuery(document).live('focusin', function(e) {
    if ($(e.target).closest('[class^="mce"]').length) {
        e.stopImmediatePropagation();
    }
    if ($(e.target).closest('[class^="wp-"]').length) {
        e.stopImmediatePropagation();
    }
    if ($(e.target).closest('[id^="wp-"]').length) {
        e.stopImmediatePropagation();
    }
    if ($(e.target).closest("[id^=mce]").length) {
        e.stopImmediatePropagation();
    }
});

	jQuery("#forside").show();

	jQuery.extend($.fn.pickadate.defaults, {
	  monthsFull: ['januar', 'februar', 'marts', 'april', 'maj', 'juni', 'juli', 'august', 'september', 'oktober', 'november', 'december'],
	  weekdaysFull: ['Søndag', 'Mandag', 'Tirsdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lørdag'],
	  weekdaysShort: ['Søn', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'Lør'],
	  today: 'idag',
	  clear: 'nulstil',
	  close: 'luk',
	  formatSubmit: 'yyyy/mm/dd',
	  format: 'dddd !d. dd. mmmm yyyy',
		labelMonthNext: 'Næste måned',
		labelMonthPrev: 'Forrige måned',
		labelMonthSelect: 'Vælg måned',
		labelYearSelect: 'Vælg år',
	})

	jQuery.extend($.fn.pickatime.defaults, {
		done: 'ok',
		closeOnSelect: true,
	})


	jQuery(".button-collapse").sideNav();


	jQuery('#animatedOptionsIkon').on('click', function() {
		i = 1;
		jQuery("#animatedOptionsLeft a").each(function(){
			nybredde = i * 100;
			i++;
		});
		jQuery('#animatedOptionsLeft').width(nybredde + 50);
	})

	$( "#animatedOptions" ).mouseleave(function() {
		jQuery('#animatedOptionsLeft').css('width', '50px');
	});

	$( ".widgetKolonne" ).sortable({
		connectWith: ".widgetKolonne",
		handle: ".widgetTitel",
		cancel: ".visFundetDokument",
		placeholder: "widgetPlaceholder",
		scroll: true,
		stop: function( event, ui ) {
			opdaterSidebar();
		},

	});

	jQuery.ajax({
		type : "post",
		url : ajaxurl,
		dataType: 'JSON',
		data : {
			action: "hentWidgetNavn",
		},
		beforeSend: function() {

		},
		success: function(svar) {
			widgetsVenstre = jQuery('.widget_area_venstre .widgetBeholder');
			widgetsHoejre = jQuery('.widget_area_hoejre .widgetBeholder');
			i = 0;
			$.each( svar.venstre, function( key, value ) {
				//console.log( key + ": " + value );
				widgetsVenstre[i]['id'] = value;
				i++
			});
			i = 0;
			$.each( svar.hoejre, function( key, value ) {
				widgetsHoejre[i]['id'] = value;
				i++
			});
		},
	});
});

function opdaterSidebar(){
	widgetsVenstre = jQuery('.widget_area_venstre .widgetBeholder');
	widgetsHoejre = jQuery('.widget_area_hoejre .widgetBeholder');
	hoejre = [];
	venstre = [];
	i = 0;
	jQuery('.widget_area_venstre .widgetBeholder').each( function() {
		venstre[i] = widgetsVenstre[i]['id']
		i++
	});
	i = 0;
	jQuery('.widget_area_hoejre .widgetBeholder').each( function() {
		hoejre[i] = widgetsHoejre[i]['id']
		i++
	});
	jQuery.ajax({
		type : "post",
		url : ajaxurl,
		//dataType: 'JSON',
		data : {
			action: "opdaterSidebar",
			venstre: venstre,
			hoejre: hoejre,
		},
		beforeSend: function() {

		},
		success: function(svar) {
			console.log(svar);
		},
		error: function(svar) {
			console.log(svar);
		},
	});
}

var opdaterBruger = function (){console.log('Opdater bruger fra forside');}

var opdaterAfdeling = function (){console.log('Opdater afdeling fra forside');}


function getParameterByName(name, url) {

}

var aktivtModul = 'forside';
