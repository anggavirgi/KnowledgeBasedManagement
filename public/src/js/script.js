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
    if(link.href.includes(activePage) && !link.closest('#dropdownAvatarName')){
      link.classList.add('bg-main')
      link.classList.add('text-white')
      link.classList.add('rounded-md')
    }
  })

  // CKEDITOR 5 CLASSIC
  ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
        console.error( error );
    } );

  // Changing Status Complain
  var initialValue = $('#status-entries').val();
  const statusComplainElement = $('#status-entries')
  const ddIconElement = $('#dd-icon svg path')
  const ddIconPos = $('#dd-icon')
  if (initialValue === "pending") {
    $(statusComplainElement).removeClass('bg-solved-status text-solved-status-text').removeClass('bg-progress-status text-progress-status-text').addClass('bg-pending-status text-pending-status-text');
    $(ddIconPos).addClass('right-[4.5rem]')
    $(ddIconElement).attr('fill','#CD6200').attr('stroke','#CD6200')
  } else if((initialValue === "progress")){
    $(statusComplainElement).removeClass('bg-pending-status text-pending-status-text').removeClass('bg-solved-status text-solved-status-text').addClass('bg-progress-status text-progress-status-text');
    $(ddIconPos).addClass('right-[3.5rem]')
    $(ddIconElement).attr('fill','#1F9254').attr('stroke','#1F9254')
  }else{
    $(statusComplainElement).removeClass('bg-pending-status text-pending-status-text').removeClass('bg-progress-status text-progress-status-text').addClass('bg-solved-status text-solved-status-text');
    $(ddIconPos).addClass('right-[4rem]')
    $(ddIconElement).attr('fill','#047FA6').attr('stroke','#047FA6')
  }

  
  statusComplainElement.change(function() {
    initialValue = $(this).val();
    if (initialValue === "pending") {
      $(statusComplainElement).removeClass('bg-solved-status text-solved-status-text').removeClass('bg-progress-status text-progress-status-text').addClass('bg-pending-status text-pending-status-text');
      $(ddIconPos).removeClass('right-[4.5rem]').removeClass('right-[4rem]').addClass('right-[4.5rem]')
      $(ddIconElement).attr('fill','#CD6200').attr('stroke','#CD6200')
    } else if((initialValue === "progress")){
      $(statusComplainElement).removeClass('bg-pending-status text-pending-status-text').removeClass('bg-solved-status text-solved-status-text').addClass('bg-progress-status text-progress-status-text');
      $(ddIconPos).removeClass('right-[4.5rem]').removeClass('right-[4rem]').addClass('right-[4rem]')
      $(ddIconElement).attr('fill','#1F9254').attr('stroke','#1F9254')
    }else{
      $(statusComplainElement).removeClass('bg-pending-status text-pending-status-text').removeClass('bg-progress-status text-progress-status-text').addClass('bg-solved-status text-solved-status-text');
      $(ddIconPos).removeClass('right-[4.5rem]').removeClass('right-[4rem]').addClass('right-[4.5rem]')
      $(ddIconElement).attr('fill','#047FA6').attr('stroke','#047FA6')
    }
  });

  // Changing Status Case Complain
  var initialCaseValue = $('#case-entries').val();
  const statusCaseComplainElement = $('#case-entries')
  const ddCaseIconElement = $('#dd-case-icon svg path')
  if (initialCaseValue === "open") {
    $(statusCaseComplainElement).removeClass('bg-close-status text-close-status-text').addClass('bg-solved-status text-solved-status-text');
    $(ddCaseIconElement).attr('fill','#1F9254').attr('stroke','#1F9254')
  }else{
    $(statusCaseComplainElement).removeClass('bg-solved-status text-solved-status-text').addClass('bg-close-status text-close-status-text');
    $(ddCaseIconElement).attr('fill','#A30D11').attr('stroke','#A30D11')
  }

  statusCaseComplainElement.change(function() {
    initialCaseValue = $(this).val();
    if (initialCaseValue === "open") {
      $(statusCaseComplainElement).removeClass('bg-close-status text-close-status-text').addClass('bg-solved-status text-solved-status-text');
      $(ddCaseIconElement).attr('fill','#1F9254').attr('stroke','#1F9254')
    } else{
      $(statusCaseComplainElement).removeClass('bg-solved-status text-solved-status-text').addClass('bg-close-status text-close-status-text');
      $(ddCaseIconElement).attr('fill','#A30D11').attr('stroke','#A30D11')
    }
  });


  // Complain Details Row Selected
  $(".clickable-row").click(function(event) {
    if (!$(event.target).closest('select').length) {
      // Only navigate if the clicked element is not a select dropdown
      window.location = $(this).data("href");
    }
  });


});