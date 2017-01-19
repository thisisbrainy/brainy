/* Hyphenator */
Hyphenator.config({
	minwordlength: 2,
	selectorfunction: function() {

		return $('p').get();

	}
});

Hyphenator.run();
