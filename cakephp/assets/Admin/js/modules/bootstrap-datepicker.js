/**
 * French translation for bootstrap-datepicker
 * Nico Mollet <nico.mollet@gmail.com>
 */
;(function($){
	$.fn.datepicker.dates['fr'] = {
		days: ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"],
		daysShort: ["dim.", "lun.", "mar.", "mer.", "jeu.", "ven.", "sam."],
		daysMin: ["di", "lu", "ma", "me", "je", "ve", "sa"],
		months: ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"],
		monthsShort: ["janv.", "févr.", "mars", "avril", "mai", "juin", "juil.", "août", "sept.", "oct.", "nov.", "déc."],
		today: "Aujourd'hui",
		monthsTitle: "Mois",
		clear: "Effacer",
		weekStart: 1,
		format: "dd/mm/yyyy"
	};
}(jQuery));


$('.hasDatepicker').datepicker({
    startDate: "today",
    autoclose: true,	
    language: "fr",
    clearBtn: true,
    todayHighlight: true
});
