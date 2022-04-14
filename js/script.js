//Mouseover cabinet
//console.log('aaa');
// const cabinet = document.querySelector('.cabinet');
//
// document.addEventListener("click", listFunc);
// function  listFunc(event){
//     if(event.target.closest('.cabinet__link')){
//         cabinet.classList.toggle('_active');
//     }
//     if(!event.target.closest('.cabinet')){
//         cabinet.classList.remove('_active');
//     }
// }

// Header
const headerElement = document.querySelector('header');

const callback = function (entries, observer) {
    if (entries[0].isIntersecting) {
        headerElement.classList.remove('_scroll');
    } else {
        headerElement.classList.add('_scroll');
    }
};

const headerObserver = new IntersectionObserver(callback);
headerObserver.observe(headerElement);


