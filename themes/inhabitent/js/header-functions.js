jQuery( document ).ready(function () {
    // alert('hey1');


    
});

function toggleSearch(){
    var searchBar = document.getElementById('search-toggle');
    if (searchBar.style.display === 'none'|| searchBar.style.display=='') {
        searchBar.style.display = 'block';
        document.getElementById("input-focus").focus();
    } else {
        searchBar.style.display = 'none';
    }
}
// toggleSearch();
document.getElementById("toogle-searchbar").onclick = function(){
    toggleSearch();
};
