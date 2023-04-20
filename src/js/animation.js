export let animation = function () {
    const animWrp = document.querySelector('[data-animation-wrp]');
    console.log(animWrp);
    if(animWrp) {
        new WOW(
            {
              boxClass: 'wow',      // default
              animateClass: 'animated', // default
              offset: 0,          // default
              mobile: true,       // default
              live: true        // default
            }
          ).init();
    }

}