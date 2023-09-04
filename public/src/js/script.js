$(document).ready(function() {

  // LAYOUT CUSTOMER
  $('.collapsible').click(function() {
      var icon = $(this).find('.icon');
      // console.log(icon);
      if (icon.hasClass('bi-chevron-down')) {
          icon.removeClass('bi-chevron-down');
          icon.addClass('bi-chevron-up')
          var title = $(this).attr('data-title')
          var title = '#' + title;
          $(title).addClass('text-main');
      } else if (icon.hasClass('bi-chevron-up')) {
          icon.removeClass('bi-chevron-up');
          icon.addClass('bi-chevron-down')
          var title = $(this).attr('data-title')
          var title = '#' + title;
          $(title).removeClass('text-main');
      }
      var target = $(this).attr('data-target');
      var id = "#" + target;
      $(id).slideToggle();
  });

  // LAYOUT ADMIN
  $('.burger-icon').click(function() {
    $('.sidebar').toggleClass('hidden');
    $('.right-side').toggleClass('md:ml-[22%] xl:ml-[18%] 2xl:ml-[14%] md:w-[78%] xl:w-[82%] 2xl:w-[86%]');
  });

  // SIDEBAR MENU ACTIVE
  const activePage = window.location.pathname
  const parts = activePage.split('/');
  const menuPart = '/' + parts[3];

  const navLink = document.querySelectorAll('.navbar a').forEach(link => {
    console.log('oke');
    if(link.href.includes(activePage)){
      link.classList.add('bg-main')
      link.classList.add('text-white')
      link.classList.add('rounded-md')
    }
  })
  
});