(function(){
	load('templates/home.php', function(xhr) {
		document.getElementById('content').innerHTML = xhr.responseText;
		console.log("load");
	});
	function load(url, callback) {
		var xhr;

		if (typeof XMLHttpRequest != 'undefined')
			xhr = new XMLHttpRequest();
		xhr.onreadystatechange = ensureReadiness;

		function ensureReadiness() {
			if (xhr.readyState < 4) {
				return;
			}

			if (xhr.status !== 200) {
				return;
			}
			if (xhr.readyState === 4) {
				callback(xhr);
			}
		}

		xhr.open('GET', url, true);
		xhr.send(' ');
	}
})();