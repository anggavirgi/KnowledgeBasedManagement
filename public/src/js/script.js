$(document).ready(function () {
  // LAYOUT CUSTOMER
  // DROPDOWN GENERAL QUESTION
  const navbarPage = window.location.pathname;
  const navbarLayout = document.getElementById("navbar-layout");
  if (navbarPage !== "/kb") {
    navbarLayout.classList.add("md:block");
    navbarLayout.classList;
  } else {
    navbarLayout.classList.remove("md:block");
  }

  $(".collapsible").click(function () {
    var icon = $(this).find(".icon");
    // console.log(icon);
    if (icon.hasClass("bi-chevron-down")) {
      icon.removeClass("bi-chevron-down");
      icon.addClass("bi-chevron-up");
      var title = $(this).attr("data-title");
      var title = "#" + title;
      $(title).addClass("text-main");
    } else if (icon.hasClass("bi-chevron-up")) {
      icon.removeClass("bi-chevron-up");
      icon.addClass("bi-chevron-down");
      var title = $(this).attr("data-title");
      var title = "#" + title;
      $(title).removeClass("text-main");
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
      $(titlesidebar).addClass("text-main");
    } else if (iconside.hasClass("bi-chevron-up")) {
      iconside.removeClass("bi-chevron-up").addClass("bi-chevron-down");
      var titlesidebar = $(this).attr("data-title");
      var titlesidebar = "#" + titlesidebar;
      $(titlesidebar).removeClass("text-main");
    }

    var targetside = $(this).attr("data-target");
    $("#" + targetside).slideToggle();
  });

  // LAYOUT ADMIN
  $(".burger-icon").click(function () {
    $(".sidebar").toggleClass("hidden");
    $(".right-side").toggleClass(
      "md:ml-[22%] xl:ml-[18%] 2xl:ml-[14%] md:w-[78%] xl:w-[82%] 2xl:w-[86%]"
    );
  });

  // SIDEBAR MENU ACTIVE
  const activePage = window.location.pathname;
  const parts = activePage.split("/");
  const menuPart = "/" + parts[3];

  // const navLink = document.querySelectorAll('.navbar a').forEach(link => {
  // if(link.href.includes(activePage) && !link.closest('#dropdownAvatarName') && !link.closest('#navbar-search')){
  const navLink = document
    .querySelectorAll(".sidebar-child a")
    .forEach((link) => {
      if (link.href.includes(activePage)) {
        link.classList.add("bg-main");
        link.classList.add("text-white");
        link.classList.add("rounded-md");
      }
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
    }
  }
});
