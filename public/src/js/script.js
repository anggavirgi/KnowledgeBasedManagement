$(document).ready(function () {
  // LAYOUT CUSTOMER

  // DROPDOWN GENERAL QUESTION
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

  // DROPDOWN SIDEBAR ARTICLE
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

  // LAYOUT ADMIN

  // Sidebar Menu Active
  $(document).ready(function () {
    const activePage = window.location.pathname;

    $("#sidebar-child a").each(function () {
      if (this.href.includes(activePage)) {
        $(this).addClass("bg-main text-white rounded-md");
      }
    });
  });

  // Burger Sidebar
  $(".burger-icon").click(function () {
    $(".sidebar").toggleClass("hidden");
    $(".right-side").toggleClass(
      "md:ml-[22%] xl:ml-[18%] 2xl:ml-[14%] md:w-[78%] xl:w-[82%] 2xl:w-[86%]"
    );
  });

  // CKEDITOR 5 CLASSIC
  ClassicEditor.create(document.querySelector("#editor")).catch((error) => {
    console.error(error);
  });

  // Changing Status Complain
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

  statusComplainElement.change(function () {
    initialValue = $(this).val();
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
  });

  // Changing Status Case Complain
  var initialCaseValue = $("#case-entries").val();
  const statusCaseComplainElement = $("#case-entries");
  const ddCaseIconElement = $("#dd-case-icon svg path");
  if (initialCaseValue === "open") {
    $(statusCaseComplainElement)
      .removeClass("bg-close-status text-close-status-text")
      .addClass("bg-solved-status text-solved-status-text");
    $(ddCaseIconElement).attr("fill", "#1F9254").attr("stroke", "#1F9254");
  } else {
    $(statusCaseComplainElement)
      .removeClass("bg-solved-status text-solved-status-text")
      .addClass("bg-close-status text-close-status-text");
    $(ddCaseIconElement).attr("fill", "#A30D11").attr("stroke", "#A30D11");
  }

  statusCaseComplainElement.change(function () {
    initialCaseValue = $(this).val();
    if (initialCaseValue === "open") {
      $(statusCaseComplainElement)
        .removeClass("bg-close-status text-close-status-text")
        .addClass("bg-solved-status text-solved-status-text");
      $(ddCaseIconElement).attr("fill", "#1F9254").attr("stroke", "#1F9254");
    } else {
      $(statusCaseComplainElement)
        .removeClass("bg-solved-status text-solved-status-text")
        .addClass("bg-close-status text-close-status-text");
      $(ddCaseIconElement).attr("fill", "#A30D11").attr("stroke", "#A30D11");
    }
  });

  // Complain Details Row Selected
  $(".clickable-row").click(function (event) {
    if (!$(event.target).closest("select").length) {
      // Only navigate if the clicked element is not a select dropdown
      window.location = $(this).data("href");
    }
  });

  // Sidebar Mobile Toggle Aside Expand
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
    $("#drawer-disabled-backdrop").append(toggleClose);
  });

  const aside = $("#drawer-disabled-backdrop");
  $(aside).on(
    "click",
    "button[data-drawer-hide='drawer-disabled-backdrop']",
    function () {
      $(aside).removeClass("transform-none");
      $(aside).addClass("-translate-x-full");
      $(this).remove();
    }
  );

  // Alert notification CRUD
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
      text: flashSuccess,
      showConfirmButton: false,
      icon: "error",
      timer: "1500",
    });
  }

  $(".btn-delete").on("click", function () {
    const id = $(this).attr("data-id");
    const url = $(this).attr("data-action");
    // console.log(href);

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
