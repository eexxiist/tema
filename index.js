let humburger = document.querySelector('.header__humburger'),
    nav = document.getElementById('test'),
    links = document.querySelectorAll('#menu_link');

humburger.addEventListener('click', () => {
    nav.classList.toggle('navigation__active')
})


for(let i = 0; i < links.length; i++){
    links[i].addEventListener('click', () => {
        nav.classList.toggle('navigation__active')
    })
}