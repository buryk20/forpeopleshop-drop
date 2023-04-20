export let headerNav = function() {
    const headerWrp = document.querySelector('[data-header]');
    if(headerWrp) {
        const languagesBtn = headerWrp.querySelector('[data-languages-btn]');
        const languagesItemWrp = headerWrp.querySelector('[data-languages-item-wrp]');
        const languagesItem = headerWrp.querySelectorAll('[data-languages-item]');
        let sumItem = languagesItem.length;

        window.getComputedStyle(languagesItemWrp).getPropertyValue('--hight-languages-item');
        languagesItemWrp.style.setProperty('--hight-languages-item', (sumItem * 44) + 'px');

        languagesBtn.addEventListener('click', function (event) {
            event.stopPropagation();
            this.classList.toggle('active');
            languagesItemWrp.classList.toggle('active')
        });

        languagesItemWrp.addEventListener('click', function(event) {
            event.stopPropagation();
        });

        delActive(document, languagesItemWrp);
        delActive(document, languagesBtn);

        function delActive(elem, par) {
            elem.addEventListener('click', () => {
                par.classList.remove('active');
            });
        }
    }    
}   