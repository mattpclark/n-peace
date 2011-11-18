// JavaScript Document
jQuery(document).ready(function() {
	jQuery(".map-marker", this).mouseenter(function() {
		var label = this.id+"-label";
		jQuery('#'+label).fadeIn("slow");
	});
	jQuery(".map-marker", this).mouseleave(function() {
			var label = this.id+"-label";
			jQuery('#'+label).fadeOut("fast");
	});
});