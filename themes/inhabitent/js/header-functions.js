

function toggleSearch() {
    var x = document.getElementById('search-toggle');
    if (x.style.display === 'none'|| x.style.display=='') {
        x.style.display = 'block';
     document.getElementById('input-focus').focus();

      
    } else {
        x.style.display = 'none';
    }
}

document.getElementById('toogle-searchbar').onclick = function(){
       toggleSearch();
     };









