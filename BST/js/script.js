window.addEventListener('scroll', function() {
    var navBar = document.querySelector('nav');
    var scrollPosition = window.scrollY;

    if (scrollPosition > 1) {
        navBar.classList.add('scrolled');
    } else {
        navBar.classList.remove('scrolled');
    }
});

function toggleAccordion(faqNumber) {
    var faqContent = document.getElementById('faq' + faqNumber);
    var allFaqs = document.querySelectorAll('.faq-content');
    allFaqs.forEach(function(faq) {
        faq.classList.remove('active');
    });
    faqContent.classList.toggle('active');
}
