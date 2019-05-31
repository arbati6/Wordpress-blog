




(function myJs() {



  let getArticle = document.querySelectorAll('.single-post')[3],
    newsletterContainer = document.querySelector('.newsletter--js-insert');

  if (newsletterContainer != null) {
    document.querySelector('.new-posts').insertBefore(newsletterContainer, getArticle);
  }

  let newsletterPlaceholder = document.querySelector('.mailpoet_text');

  if (newsletterPlaceholder != null) {
    newsletterPlaceholder.setAttribute('placeholder', 'Adres e-mail');
  }




  paginationNext = document.querySelector('.next.page-numbers'),
    paginationPrev = document.querySelector('.prev.page-numbers');

  if (paginationPrev != null) {
    paginationPrev.innerHTML = 'Poprzednia';
  }
  if (paginationNext != null) {
    paginationNext.innerHTML = 'Następna';
  }

  function openNav() {
    hamburger.setAttribute('class', 'menu-icon F-CLOSE')
    document.querySelector(".main-menu-mobile").style.right = "0";
    document.querySelector(".open-menu-overlay").style.opacity = "0.85";
    document.querySelector(".open-menu-overlay").style.pointerEvents = "auto";
    document.querySelector('.hamburger-menu').style.position = "fixed";
  }

  function closeNav() {
    hamburger.setAttribute('class', 'menu-icon F-MENU')
    document.querySelector(".main-menu-mobile").style.right = "-100%";
    document.querySelector(".open-menu-overlay").style.opacity = "0";
    document.querySelector(".open-menu-overlay").style.pointerEvents = "none";
    document.querySelector('.hamburger-menu').style.position = "absolute";
  }

  let hamburger = document.querySelector(".menu-icon");

  hamburger.addEventListener('click', () => hamburger.classList.contains('F-CLOSE') ? closeNav() : openNav());

  closeNav();

  let avatar = document.querySelector('.post-author__photo')

  if (avatar) {
    avatar.setAttribute('src', 'https://www.rafalfuczynski.com/blog/wp-content/themes/blog_v1/img/author_photo.jpg');
  }

  let submitNewsletter = document.querySelector('.mailpoet_submit');

  if (submitNewsletter) {

    submitNewsletter.addEventListener('click', () => {
      setTimeout(() => {
        let newsletterError = document.querySelector('.parsley-custom-error-message');
        newsletterError.innerText = 'Nieprawidłowy format adresu e-mail';
      }, 10);
    });
  }

}());



