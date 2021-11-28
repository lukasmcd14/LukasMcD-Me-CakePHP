function toggleMenu() {
    document.querySelector('#menu-wrapper').classList.toggle('active');
}
var dropdowns = document.querySelectorAll("li.has-dropdown");
dropdowns.forEach(function (drop) {
    drop.addEventListener("click", function (e) {
        var dropdown = e.target.parentElement.querySelector("ul.dropdown");
        dropdown.classList.toggle('expanded');
    });
});
/*function toggleDropdown(dropdown) {
    dropdown.parent.querySelector("ul.dropdown").classList.toggle("active");
}*/
