document.addEventListener("DOMContentLoaded", function() {
	if (document.getElementById('back')) {
		document.querySelector('form').action = document.referrer;
	}
	const txt = [...document.querySelectorAll('input[required]')];
	txt.forEach(text => text.addEventListener('input', () => send.disabled = txt.some(field => !field.value.length)));
	setTimeout(function() {
		window.location.href = location.origin;
	}, 3600000);
});
