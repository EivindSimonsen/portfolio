import { stickyNav } from "./components/stickyNav.js";
import { projects } from "./components/projectsArray.js";
import { validateForm } from "./components/formValidation.js";

window.onscroll = function () {
  stickyNav();
};

validateForm();

const projectContainer = document.querySelector(".projects__container");

for (let i = 0; i < projects.length; i++) {
  // Catch link string
  const link = projects[i].websiteLink;

  projectContainer.innerHTML += `
    <div data-aos="fade-up" class="col-lg-4 col-sm-12 col-md-6">
            <button type="button" class="modal-btn" data-bs-toggle="modal" data-bs-target="#${projects[i].modalNr}">
              <div class="col-lg-4 col-sm-12 col-md-6">
                <img loading="lazy" src="${projects[i].image}" alt="${projects[i].name}" />
              </div>
            </button>
            <div class="modal fade" id="${projects[i].modalNr}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <img src="${projects[i].image}" alt="${projects[i].name}" />
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">${projects[i].name}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">${projects[i].content}</div>
                  <div class="modal-footer">
                    <a class="nav-link cta ${link ? link : "missing"}" href="${projects[i].websiteLink}">Website</a>
                    <a class="nav-link cta cta-github" href="${projects[i].githubLink}">GitHub</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    `;
}
