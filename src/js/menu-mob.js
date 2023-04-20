export let menuMob = function() {
    const mobMenu = document.querySelector('[data-mob-menu]');
    if(mobMenu) {
        const menuWrpMob = mobMenu.querySelector('[data-wrp-menu-mob]');
        const menuBtn = mobMenu.querySelector('[data-mob-menu-btn]');
        const menuMobConteiner = mobMenu.querySelector('[data-menu-mob-conteiner]');
        const body = document.querySelector('body');
        const itemPage = document.querySelectorAll('[data-item-nav-page]');
        const itemNavHeader = mobMenu.querySelectorAll('[data-nav-header]');
        // вызов меню моб
        menuBtn.addEventListener('click', function() {
            !menuWrpMob.classList.contains('active') ? menuWrpMob.classList.remove('none') : setTimeout(none, 300);
            setTimeout(() => activClassToggle(menuWrpMob, 'active'), 50);
            activClassToggle(menuMobConteiner, 'active');
            activClassToggle(body, 'overflov');
            activClassToggle(menuBtn, 'active');
        });

        function activClassToggle(param, className) {
            param.classList.toggle(className);
        }

        function none() {
            menuWrpMob.classList.add('none');
        }

        function delActiveClass(param, className) {
            param.classList.remove(className);
        }

        //навигация по странице
        // document.addEventListener("DOMContentLoaded", ready);
        // function ready() {
        //     window.scrollTo(0, 0);
        // }

        itemNavHeader.forEach((el, index) => {
            el.addEventListener('click', () => {
                delActiveClass(body, 'overflov');
                delActiveClass(menuWrpMob, 'active');
                delActiveClass(menuMobConteiner, 'active');
                delActiveClass(menuBtn, 'active')
            })
        });
    }
}
