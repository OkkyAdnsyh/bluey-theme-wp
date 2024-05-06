

const faqs = document.querySelectorAll('.accordion');

// accordion function
faqs.forEach( faq => {
    faq.addEventListener('click', () => {
        
        let isOpen = document.querySelector('.accordion.isOpen');
        isOpen.classList.remove('isOpen');

        faq.classList.add('isOpen');
    })
})

// slider function
let count = 0;
const imgSlides = document.querySelectorAll('.img-slide');
const radioBtn = document.querySelectorAll('.radio-btn');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');

prevBtn.addEventListener('click', () => {
    count++;
    if(count > imgSlides.length - 1) count = 0;

    let activeImg = document.querySelector('.img-slide.isActive');
    activeImg.classList.remove('isActive');
    imgSlides[count].classList.add('isActive');

    let activeRadioBtn = document.querySelector('.radio-btn.active');
    activeRadioBtn.classList.remove('active');
    radioBtn[count].classList.add('active');

});

nextBtn.addEventListener('click', () => {
    count--;
    if(count < 0) count = imgSlides.length - 1;

    let activeImg = document.querySelector('.img-slide.isActive');
    activeImg.classList.remove('isActive');
    imgSlides[count].classList.add('isActive');

    let activeRadioBtn = document.querySelector('.radio-btn.active');
    activeRadioBtn.classList.remove('active');
    radioBtn[count].classList.add('active');

});

radioBtn.forEach(btn => {
    btn.addEventListener('click', () => {
        count = btn.dataset.target;

        let activeImg = document.querySelector('.img-slide.isActive');
        activeImg.classList.remove('isActive');
        imgSlides[count].classList.add('isActive');

        let activeRadioBtn = document.querySelector('.radio-btn.active');
        activeRadioBtn.classList.remove('active');
        radioBtn[count].classList.add('active');
    })
})

setInterval(function(){
    count++;
    if(count > 2) count = 0;

    let activeImg = document.querySelector('.img-slide.isActive');
    activeImg.classList.remove('isActive');
    imgSlides[count].classList.add('isActive');

    let activeRadioBtn = document.querySelector('.radio-btn.active');
    activeRadioBtn.classList.remove('active');
    radioBtn[count].classList.add('active');

    console.log(count);
}, 3500);