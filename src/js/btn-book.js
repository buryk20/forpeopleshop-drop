export let btnBook = function() {
    const arrBtnBook = document.querySelectorAll('[data-btn-book]');
    const formPopUpWrp = document.querySelector('[data-pop-up-form-wrp]');
    const btnClose = formPopUpWrp.querySelector('[data-pop-up-btn-close]');
    const formPopUp = formPopUpWrp.querySelector('[data-pop-up-form]');
    if(arrBtnBook){
        arrBtnBook.forEach((el) => {
            el.addEventListener('click', () => {
                formPopUpWrp.classList.add('active');
            })
        });

        btnClose.addEventListener('click', () => {
            delActive(formPopUpWrp);
        });

        formPopUpWrp.addEventListener('click', () => {
            delActive(formPopUpWrp);
        });

        formPopUp.addEventListener('click', function(event) {
            event.stopPropagation();
        });

        function delActive(param) {
            param.classList.remove('active');
        }
    }
}