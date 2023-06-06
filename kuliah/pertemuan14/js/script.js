const keyword = document.getElementById('keyword');
const searchContainer = document.getElementById('search-container');
const searchButton = document.getElementById('search-button');


keyword.onkeyup = function() {
    fetch('ajax/search.php')
        .then((response) => (response.text()))
        .then((text) => (searchContainer.innerHTML = text));
};