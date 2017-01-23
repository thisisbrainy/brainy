/* Hyphenator */
Hyphenator.config({
	minwordlength: 2,
	selectorfunction: function() {

		return $('.post-entry p').get();

	}
});

Hyphenator.run();

/* Particles */
particlesJS.load('particles', js_location + '/particles.json', function() {

	console.log('all good');

});
