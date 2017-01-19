/* Hyphenator */
Hyphenator.config({
	minwordlength: 2,
	selectorfunction: function() {

		return $('.post-entry p').get();

	}
});

Hyphenator.run();
