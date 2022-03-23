const nav = document.querySelector(".navbar");
const activeHome = document.querySelector(".active-home");
const activeAbout = document.querySelector(".active-about");
const activeProjects = document.querySelector(".active-projects");
const activeContact = document.querySelector(".active-contact");

const sticky = nav.offsetTop;

export function stickyNav() {
    if (window.pageYOffset >= sticky) {
        nav.classList.add("sticky")
    } else {
        nav.classList.remove("sticky");
    }
};

activeHome.onclick = function() {
    activeAbout.classList.add("active");
}

activeAbout.onclick = function() {
    activeAbout.classList.add("active");
    activeProjects.classList.remove("active");
    activeContact.classList.remove("active");
}

activeProjects.onclick = function() {
    activeProjects.classList.add("active");
    activeAbout.classList.remove("active");
    activeContact.classList.remove("active");
}

activeContact.onclick = function() {
    activeContact.classList.add("active");
    activeProjects.classList.remove("active");
    activeAbout.classList.remove("active");
}