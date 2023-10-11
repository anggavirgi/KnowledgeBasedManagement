$(document).ready(function () {
  
  // LAYOUT CUSTOMER
  // ======================= Password Visibilty Toggle =========================
  // Password Visibility Toggle
  $('#password-toggle').click(function() {
    var passwordInput = $('#password');
    var passwordToggleIcon = $('#password-toggle');
    if (passwordInput.attr('type') === 'password') {
      passwordInput.attr('type', 'text');
      passwordToggleIcon.removeClass('bi-eye-slash').addClass('bi-eye');
    } else {
      passwordInput.attr('type', 'password');
      passwordToggleIcon.removeClass('bi-eye').addClass('bi-eye-slash');
    }
  });
  // Confirm Password Visibilty Toggle
  $('#cpassword-toggle').click(function() {
    var cpasswordInput = $('#pass_confirm');
    var cpasswordToggleIcon = $('#cpassword-toggle');
    if (cpasswordInput.attr('type') === 'password') {
      cpasswordInput.attr('type', 'text');
      cpasswordToggleIcon.removeClass('bi-eye-slash').addClass('bi-eye');
    } else {
      cpasswordInput.attr('type', 'password');
      cpasswordToggleIcon.removeClass('bi-eye').addClass('bi-eye-slash');
    }
  });
  // ===========================================================================



  // ================== Select Condition Prject & User Type ====================
  var statusUserDropdown = $('#status_user');
  var projectDropdown = $('#id_project');
  var signupButton = $('#signup_button');

  // Event listener for change project if any change in user type
  statusUserDropdown.change(function() {
    setStatusProject();
  });

  // Call setStatusProject() when page is loaded
  setStatusProject();

  function setStatusProject() {
    if (statusUserDropdown.val() === 'new_user') {
      projectDropdown.prop('disabled', true);
      signupButton.prop('disabled', false);
    } else if (statusUserDropdown.val() === '') {
      projectDropdown.prop('disabled', true).val('');
      signupButton.prop('disabled', true);
    } else {
      projectDropdown.prop('disabled', false);
      signupButton.prop('disabled', false);
    }
  }
  // ===========================================================================



  // ======================== Dropdown General Question ========================
  $(".collapsible").click(function () {
    var icon = $(this).find(".icon");
    if (icon.hasClass("bi-chevron-down")) {
      icon.removeClass("bi-chevron-down");
      icon.addClass("bi-chevron-up");
      var title = $(this).attr("data-title");
      var title = "#" + title;
      $(title).addClass("text-sky-700");
    } else if (icon.hasClass("bi-chevron-up")) {
      icon.removeClass("bi-chevron-up");
      icon.addClass("bi-chevron-down");
      var title = $(this).attr("data-title");
      var title = "#" + title;
      $(title).removeClass("text-sky-700");
    }
    var target = $(this).attr("data-target");
    var id = "#" + target;
    $(id).slideToggle();
  });
  // ===========================================================================



  // ===================== Dropdown Sidebar General Article =====================
  $(".collapsiblesidebar").click(function () {
    var iconside = $(this).find(".icon");
    if (iconside.hasClass("bi-chevron-down")) {
      iconside.removeClass("bi-chevron-down").addClass("bi-chevron-up");
      var titlesidebar = $(this).attr("data-title");
      var titlesidebar = "#" + titlesidebar;
      $(titlesidebar).addClass("text-sky-700");
    } else if (iconside.hasClass("bi-chevron-up")) {
      iconside.removeClass("bi-chevron-up").addClass("bi-chevron-down");
      var titlesidebar = $(this).attr("data-title");
      var titlesidebar = "#" + titlesidebar;
      $(titlesidebar).removeClass("text-sky-700");
    }
    var targetside = $(this).attr("data-target");
    $("#" + targetside).slideToggle();
  });
  // ===========================================================================




  // LAYOUT ADMIN
  // =========================== Sidebar Menu Active ===========================
  const activePage = window.location.pathname;
  $("#sidebar-child a").each(function () {
    if (this.href.includes(activePage)) {
      $(this).addClass("bg-main text-white rounded-md");
    }
  });
  // Burger Sidebar
  $(".burger-icon").click(function () {
    $(".sidebar").toggleClass("hidden");
    $(".right-side").toggleClass(
      "md:ml-[22%] xl:ml-[18%] 2xl:ml-[14%] md:w-[78%] xl:w-[82%] 2xl:w-[86%]"
    );
  });
  // ===========================================================================



  // ========================= Delete Single Checkbox ==========================
  $(".delete-checkbox").on("change", function () {
    let checkbox = $(".delete-checkbox").length;
    let checkboxChecked = $(".delete-checkbox:checked").length;
    let checkboxCheckedItems = $(".delete-checkbox:checked").length > 0;
    if (checkboxCheckedItems) {
      if (checkboxChecked < checkbox) {
        $(".delete-all-checkbox").prop("checked", false);
      } else {
        $(".delete-all-checkbox").prop("checked", true);
      }
      $(".delete-batch").show();
    } else {
      $(".delete-all-checkbox").prop("checked", false);
      $(".delete-batch").hide();
    }
  });
  // Delete all checkbox
  $(".delete-all-checkbox").on("change", function () {
    const checkAll = document.querySelector(".delete-all-checkbox");
    if (checkAll.checked) {
      $(".delete-checkbox").prop("checked", false); // Uncheck all checkboxes first
      $(".delete-checkbox").each(function () {
        const row = $(this).closest("tr");
        if (row.css("display") !== "none") {
          $(this).prop("checked", true); // Check checkboxes for rows with display not "none"
        }
      });
      $(".delete-batch").show();
    } else {
      $(".delete-checkbox").prop("checked", false);
      $(".delete-batch").hide();
    }
  });
  // Send data delete batch using ajax 
  $(".delete-batch-btn").on("click", function () {
    const url = $(this).attr("data-action");
    let selectedItems = [];
    $(".delete-checkbox:checked").each(function () {
      selectedItems.push($(this).closest("td").data("id"));
    });
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: "POST",
          url: url,
          data: {
            ids: selectedItems,
          },
        });

        location.reload();
      }
    });
  });
  // ===========================================================================



  // ==================== Sidebar Toggle Expand Mobile View ====================
  var toggleClose = `
  <button type="button" data-drawer-hide="drawer-disabled-backdrop" aria-controls="drawer-disabled-backdrop" class="text-white bg-main rounded-lg text-sm w-14 h-10 absolute top-0 -right-12 inline-flex items-center justify-center">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
  </svg>
  <span class="sr-only">Close menu</span>
  </button>
  `;
  $("button[data-drawer-show='drawer-disabled-backdrop']").click(function () {
    // Append the button to the aside element
    $('#drawer-disabled-backdrop').append(toggleClose);
  });
  const aside = $('#drawer-disabled-backdrop');
  $(aside).on('click', "button[data-drawer-hide='drawer-disabled-backdrop']", function () {
    $(aside).removeClass('transform-none')
    $(aside).addClass('-translate-x-full')
    $(this).remove()
  });
  // =========================================================================== 



  // ======================== Initiate Status Complain =========================
  var initialValue = $("#status-entries").val();
  const statusComplainElement = $("#status-entries");
  const ddIconElement = $("#dd-icon svg path");
  const ddIconPos = $("#dd-icon");
  if (initialValue === "pending") {
    $(statusComplainElement)
      .removeClass("bg-solved-status text-solved-status-text")
      .removeClass("bg-progress-status text-progress-status-text")
      .addClass("bg-pending-status text-pending-status-text");
    $(ddIconPos).addClass("right-[4.5rem]");
    $(ddIconElement).attr("fill", "#CD6200").attr("stroke", "#CD6200");
  } else if (initialValue === "progress") {
    $(statusComplainElement)
      .removeClass("bg-pending-status text-pending-status-text")
      .removeClass("bg-solved-status text-solved-status-text")
      .addClass("bg-progress-status text-progress-status-text");
    $(ddIconPos).addClass("right-[3.5rem]");
    $(ddIconElement).attr("fill", "#1F9254").attr("stroke", "#1F9254");
  } else {
    $(statusComplainElement)
      .removeClass("bg-pending-status text-pending-status-text")
      .removeClass("bg-progress-status text-progress-status-text")
      .addClass("bg-solved-status text-solved-status-text");
    $(ddIconPos).addClass("right-[4rem]");
    $(ddIconElement).attr("fill", "#047FA6").attr("stroke", "#047FA6");
  }
  // ===========================================================================


  // ========================= Change Status Complain ==========================
  statusComplainElement.change(function () {
    initialValue = $(this).val();
    const id = $(this).data("id");
    if (initialValue === "pending") {
      $(statusComplainElement)
        .removeClass("bg-solved-status text-solved-status-text")
        .removeClass("bg-progress-status text-progress-status-text")
        .addClass("bg-pending-status text-pending-status-text");
      $(ddIconPos)
        .removeClass("right-[4.5rem]")
        .removeClass("right-[4rem]")
        .addClass("right-[4.5rem]");
      $(ddIconElement).attr("fill", "#CD6200").attr("stroke", "#CD6200");
    } else if (initialValue === "progress") {
      $(statusComplainElement)
        .removeClass("bg-pending-status text-pending-status-text")
        .removeClass("bg-solved-status text-solved-status-text")
        .addClass("bg-progress-status text-progress-status-text");
      $(ddIconPos)
        .removeClass("right-[4.5rem]")
        .removeClass("right-[4rem]")
        .addClass("right-[4rem]");
      $(ddIconElement).attr("fill", "#1F9254").attr("stroke", "#1F9254");
    } else {
      $(statusComplainElement)
        .removeClass("bg-pending-status text-pending-status-text")
        .removeClass("bg-progress-status text-progress-status-text")
        .addClass("bg-solved-status text-solved-status-text");
      $(ddIconPos)
        .removeClass("right-[4.5rem]")
        .removeClass("right-[4rem]")
        .addClass("right-[4.5rem]");
      $(ddIconElement).attr("fill", "#047FA6").attr("stroke", "#047FA6");
    }
    const data = {
      id: id,
      status: initialValue,
    };
    $.ajax({
      type: "POST",
      url: "/kb/administrator/complain/updateStatus",
      data: data,
    });
    location.reload();
  });
  // ===========================================================================



  // ======================= Initiate Open/Close Article =======================
  $('[id^="case-entries"]').each(function () {
    var $dropdown = $(this);
    var selectedValue = $dropdown.val();
    var iconElement = $dropdown.siblings('svg').find('path');
    if (selectedValue === "open") {
        $(this)
          .removeClass("bg-close-status text-close-status-text")
          .addClass("bg-solved-status text-solved-status-text");
        $(iconElement).attr("fill", "#1F9254").attr("stroke", "#1F9254");
      } else {
        $(this)
          .removeClass("bg-solved-status text-solved-status-text")
          .addClass("bg-close-status text-close-status-text");
        $(iconElement).attr("fill", "#A30D11").attr("stroke", "#A30D11");
      }
  });
  // ===========================================================================



  // ================ Change Condition Open/Close Article ======================
  $('[id^="case-entries"]').change(function () {
    var initialCaseValue = $(this).val();
    var id = $(this).data("id");
    var iconElement = $(this).siblings('svg').find('path');
    if (initialCaseValue === "open") {
      $(this)
        .removeClass("bg-close-status text-close-status-text")
        .addClass("bg-solved-status text-solved-status-text");
      $(iconElement).attr("fill", "#1F9254").attr("stroke", "#1F9254");
    } else {
      $(this)
        .removeClass("bg-solved-status text-solved-status-text")
        .addClass("bg-close-status text-close-status-text");
      $(iconElement).attr("fill", "#A30D11").attr("stroke", "#A30D11");
    }
    const data = {
      id: id,
      visibility: initialCaseValue,
    };
    console.log(data);
    $.ajax({
      type: "POST",
      url: "/kb/administrator/article/updateVisibility",
      data: data,
      success: function(response) {
      },
      error: function(jqXHR, textStatus, errorThrown) {
          console.error("AJAX request error:", textStatus, errorThrown);
      }
    });
  });
  // ===========================================================================


  
  // ======================= Clickable Row Complain =========================== 
  $(".clickable-row").click(function (event) {
    if (
      !$(event.target).closest("select").length &&
      !$(event.target).closest(".delete-checkbox").length
    ) {
      // Only navigate if the clicked element is not a select dropdown
      window.location = $(this).data("href");
    }
  });
  // ===========================================================================



  // ======================= Alert notification Message =======================
  const flashSuccessMessage = $(".flash-success-message").data("message");
  const flashErrorMessage = $(".flash-error-message").data("message");

  if (flashSuccessMessage) {
    const Toast = Swal.mixin({
      toast: true,
      position: "top-end",
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
      },
    });
    Toast.fire({
      icon: "success",
      title: flashSuccessMessage,
    });
  }
  if (flashErrorMessage) {
    const Toast = Swal.mixin({
      toast: true,
      position: "top-end",
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
      },
    });
    Toast.fire({
      icon: "error",
      title: flashErrorMessage,
    });
  }
  // ===========================================================================



  // ========================= Alert Notification CRUD =========================
  const flashSuccess = $(".flash-success").data("flashmessage");
  const flashError = $(".flash-error").data("flashmessage");

  if (flashSuccess) {
    Swal.fire({
      title: "Success",
      text: flashSuccess,
      showConfirmButton: false,
      icon: "success",
      timer: "1200",
    });
  }
  if (flashError) {
    Swal.fire({
      title: "Failed",
      text: flashError,
      showConfirmButton: false,
      icon: "error",
      timer: "1500",
    });
  }

  $(".btn-delete").on("click", function () {
    const id = $(this).attr("data-id");
    const url = $(this).attr("data-action");
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: "GET",
          url: url,
        });
        location.reload();
      }
    });
  });
  // ============================================================================



  // =============================== Row Per Page ===============================
  $('#row-entries').change(function() {
    var offset = 1;
    var selectedValue = $(this).val(); 
    var currentUrl = window.location.href;
    var parts = currentUrl.split("/");
    var lastPart = parts[parts.length - 1];
    var pages = lastPart.split("?")[0];
    fetchData(selectedValue, offset, pages); 
  });
  function fetchData(Data, offset, pages) {
    if(pages == 'subcategory'){
      const url = new URL(window.location.href);
      const categoryId = url.searchParams.get("category_id");
      var newUrl = '/kb/administrator/category/'+pages+'?category_id=' + categoryId + '&page=' + offset + '&perPage=' + Data;
      window.location.href = newUrl;
    }else{
      var newUrl = '/kb/administrator/'+pages+'?page=' + offset + '&perPage=' + Data;
      window.location.href = newUrl;
    }
  }
  // ================================================================================



  // =============== Select Category & Subcategory Condition Article ================
  $('#categorySelect').change(function() {
    var selectedCategory = $(this).val();
    var subcategorySelect = $('#subcategorySelect');
    subcategorySelect.prop('disabled', true);
    $('#subcategorySelect option').hide();

    if (selectedCategory === '') {
        $('#subcategorySelect option[value=""]').show();
    } else {
        $('#subcategorySelect option.' + selectedCategory).show();
        if ($('#subcategorySelect option.' + selectedCategory).length === 0) {
            $('#subcategorySelect option[value=""]').show();
        } else {
            subcategorySelect.prop('disabled', false);
        }
    }
    subcategorySelect.val('');
  });
  // ===================================================================================



  // ========================= Dynamically URL Article Details =========================
  var urlPattern = /http:\/\/localhost:8080\/kb\/administrator\/article\/detail\/\d+/;
  // Check if the current page URL matches the pattern run Timeago.js
  if (urlPattern.test(window.location.href)) {
    const nodes = $(".uploadTime").get();
    timeago.render(nodes, 'en_US');
  }
  // ===================================================================================

});

// USER

// Search Bar
document.addEventListener("DOMContentLoaded", function () {
  const navbarPage = window.location.pathname;
  const navbarLayout = document.getElementById("navbar-layout");

  if (navbarPage == "/kb" || navbarPage == "/kb/" || navbarPage == "/") {
    navbarLayout.classList.remove("md:block");
  } else {
    navbarLayout.classList.add("md:block");
  }
});

// ADMIN

// Show file name in drag & drop box
// Select the file input element by its id
const fileInput = document.getElementById("dropzone-file");

// Select the <p> element where you want to display the file name
const selectedFileName = document.getElementById("selected-file-name");

const dragdroptext = document.getElementById("dragdroptext");
const formatsizetext = document.getElementById("formatsizetext");

//Border
const dropzone = document.getElementById("dropzone");

// Add an event listener to the file input element
fileInput.addEventListener("change", (event) => {
  // Get the selected file
  const selectedFile = event.target.files[0];

  // Check if a file is selected
  if (selectedFile) {
    // Update the text content of the <p> element with the file name
    selectedFileName.textContent = `Selected file: ${selectedFile.name}`;
    selectedFileName.classList.add("-mt-8");
    dragdroptext.classList.remove("block");
    dropzone.classList.add("border-main");
    formatsizetext.classList.remove("block");
    dragdroptext.classList.add("hidden");
    formatsizetext.classList.add("hidden");
  } else {
    // If no file is selected, clear the text content
    selectedFileName.textContent = "";
    selectedFileName.classList.remove("-mt-8");
    dragdroptext.classList.remove("hidden");
    dropzone.classList.remove("border-main");
    formatsizetext.classList.remove("hidden");
    dragdroptext.classList.add("block");
    formatsizetext.classList.add("block");
  }
});

dropzone.addEventListener("dragover", (e) => {
  e.preventDefault();
  dropzone.classList.add("border-main"); // Add a class to highlight the drop area when dragging over it.
});

dropzone.addEventListener("dragleave", () => {
  dropzone.classList.remove("border-main"); // Remove the highlighting class when dragging leaves the drop area.
});

dropzone.addEventListener("drop", (e) => {
  e.preventDefault();
  dropzone.classList.remove("border-main"); // Remove the highlighting class when a file is dropped.

  const files = e.dataTransfer.files;
  handleFileChange(files);
});

function handleFileChange(files) {
  if (files.length > 0) {
    const file = files[0];
    selectedFileName.textContent = `Selected file: ${file.name}`;
    selectedFileName.classList.add("-mt-8");
    dragdroptext.classList.remove("block");
    dropzone.classList.add("border-main");
    formatsizetext.classList.remove("block");
    dragdroptext.classList.add("hidden");
    formatsizetext.classList.add("hidden");
    fileInput.files = files; // Assign the selected files to the hidden input for form submission.
  } else {
    selectedFileName.textContent = "";
    selectedFileName.classList.remove("-mt-8");
    dragdroptext.classList.remove("hidden");
    dropzone.classList.remove("border-main");
    formatsizetext.classList.remove("hidden");
    dragdroptext.classList.add("block");
    formatsizetext.classList.add("block");
  }
}
