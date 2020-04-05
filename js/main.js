const navToggle = document.querySelector('.nav-toggle');
const navLinks = document.querySelectorAll('.nav__link')

navToggle.addEventListener('click', () => {
    document.body.classList.toggle('nav-open');
});

navLinks.forEach(link => {
    link.addEventListener('click', () => {
        document.body.classList.remove('nav-open');
    })
});

// //material contact form animation
// $('.contact-form').find('.form-control').each(function() {
//     var targetItem = $(this).parent();
//     if ($(this).val()) {
//       $(targetItem).find('label').css({
//         'top': '10px',
//         'fontSize': '14px'
//       });
//     }
//   })
//   $('.contact-form').find('.form-control').focus(function() {
//     $(this).parent('.input-block').addClass('focus');
//     $(this).parent().find('label').animate({
//       'top': '10px',
//       'fontSize': '14px'
//     }, 300);
//   })
//   $('.contact-form').find('.form-control').blur(function() {
//     if ($(this).val().length == 0) {
//       $(this).parent('.input-block').removeClass('focus');
//       $(this).parent().find('label').animate({
//         'top': '25px',
//         'fontSize': '18px'
//       }, 300);
//     }
//   })