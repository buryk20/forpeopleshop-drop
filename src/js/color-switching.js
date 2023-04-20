export let colorSwitching = function () {
    const colorSwitchingWrp = document.querySelector('[data-color-switching-wrp]');
    
    if(colorSwitchingWrp) {
        const btnColorSwitching = colorSwitchingWrp.querySelectorAll('[data-btn-color-switching]');
        colorSwitchingWrp.addEventListener('click', function () {
            btnColorSwitching.forEach(el => {
                checClass(el, 'active');
            });
            this.classList.toggle('active');
            addClassBlack('body');
            addClassBlack('svg');

        });

        function addClassBlack(par) {
            document.querySelectorAll(par).forEach(el => {
                checClass(el, 'black');
            });
        };

        function checClass(elem, className) {
            elem.classList.contains(className) ? elem.classList.remove(className) : elem.classList.add(className);
        };
    }
}