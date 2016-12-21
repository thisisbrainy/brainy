/* Hyphenator */
Hyphenator.config({
	minwordlength: 2,
	selectorfunction: function() {
		return $('.post-content').get();
	}
});

Hyphenator.run();

/* DOM Ready stuff */
$(function() {

});
