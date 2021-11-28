function toggleMenu() {
    document.querySelector('#menu-wrapper').classList.toggle('active');
}

let dropdowns = document.querySelectorAll("li.has-dropdown");

dropdowns.forEach((drop) => {
    drop.addEventListener("click", (e) => {
        let dropdown = (e.target as HTMLElement).parentElement.querySelector("ul.dropdown");
        dropdown.classList.toggle('expanded');
    });
})

/*function toggleDropdown(dropdown) {
    dropdown.parent.querySelector("ul.dropdown").classList.toggle("active");
}*/
