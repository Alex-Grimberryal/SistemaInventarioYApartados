// sidebar.js
function showDropdown(button) {
    var dropdown = button.getElementsByClassName('dropdown-content')[0];
    dropdown.style.display = 'block';
}

function hideDropdown(button) {
    var dropdown = button.getElementsByClassName('dropdown-content')[0];
    dropdown.style.display = 'none';
}
