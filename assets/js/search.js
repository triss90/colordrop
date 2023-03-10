const search = document.getElementById('search');
search.focus();
const length = search.value.length;
search.setSelectionRange(length, length);