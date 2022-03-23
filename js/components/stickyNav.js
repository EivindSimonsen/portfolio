const nav = document.querySelector(".navbar");

const sticky = nav.offsetTop;

export function stickyNav() {
    if (window.pageYOffset >= sticky) {
        nav.classList.add("sticky")
    } else {
        nav.classList.remove("sticky");
    }
}