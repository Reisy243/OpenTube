const txt = [...document.querySelectorAll('input[required]')];
txt.forEach(text => text.addEventListener('input', () => send.disabled = txt.some(field => !field.value.length)));
