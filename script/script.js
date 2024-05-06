

const faqs = document.querySelectorAll('.accordion');
console.log(faqs)

// accordion function
faqs.forEach( faq => {
    faq.addEventListener('click', () => {
        
        let isOpen = document.querySelector('.accordion.isOpen');
        isOpen.classList.remove('isOpen');

        faq.classList.add('isOpen');
    })
})