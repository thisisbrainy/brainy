/* Search */
document.getElementById('search-button').onclick = function() {

	if(document.getElementsByTagName('form')[0].getAttribute('class') === 'hidden') {

		document.getElementsByTagName('form')[0].removeAttribute('class');

	} else {

		document.forms.search.submit();

	}

};
