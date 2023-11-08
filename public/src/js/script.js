$(document).ready(function () {
  // DYNAMICALLY URL
  var originalURL = window.location.pathname;
  var modifiedURL = new RegExp(originalURL);

  // LAYOUT CUSTOMER
  // ======================= Password Visibilty Toggle =========================
  // Password Visibility Toggle
  $("#password-toggle").click(function () {
    var passwordInput = $("#password");
    var passwordToggleIcon = $("#password-toggle");
    if (passwordInput.attr("type") === "password") {
      passwordInput.attr("type", "text");
      passwordToggleIcon.removeClass("bi-eye-slash").addClass("bi-eye");
    } else {
      passwordInput.attr("type", "password");
      passwordToggleIcon.removeClass("bi-eye").addClass("bi-eye-slash");
    }
  });
  // Confirm Password Visibilty Toggle
  $("#cpassword-toggle").click(function () {
    var cpasswordInput = $("#pass_confirm");
    var cpasswordToggleIcon = $("#cpassword-toggle");
    if (cpasswordInput.attr("type") === "password") {
      cpasswordInput.attr("type", "text");
      cpasswordToggleIcon.removeClass("bi-eye-slash").addClass("bi-eye");
    } else {
      cpasswordInput.attr("type", "password");
      cpasswordToggleIcon.removeClass("bi-eye").addClass("bi-eye-slash");
    }
  });
  // ===========================================================================

  // ================== Select Condition Prject & User Type ====================
  var statusUserDropdown = $("#status_user");
  var projectDropdown = $("#id_project");
  var signupButton = $("#signup_button");

  // Event listener for change project if any change in user type
  statusUserDropdown.change(function () {
    setStatusProject();
  });

  // Call setStatusProject() when page is loaded
  setStatusProject();

  function setStatusProject() {
    if (statusUserDropdown.val() === "new_user") {
      projectDropdown.prop("disabled", true);
      signupButton.prop("disabled", false);
    } else if (statusUserDropdown.val() === "") {
      projectDropdown.prop("disabled", true).val("");
      signupButton.prop("disabled", true);
    } else {
      projectDropdown.prop("disabled", false);
      signupButton.prop("disabled", false);
    }
  }
  // ===========================================================================

  // ======================== Dropdown Condition Article =======================
  $(".dropdown-button").click(function () {
    const dropdownId = $(this).data("collapse-toggle");
    const dropdown = $("#" + dropdownId);

    // Change the SVG icon for the specific button that was clicked
    const dropdownIcon = $(this).find(".dropdown-icon");
    if (dropdown.hasClass("hidden")) {
      // Dropdown is collapsed
      dropdownIcon.html(
        '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />'
      );
    } else {
      // Dropdown is expanded
      dropdownIcon.html(
        '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 5 4-4 4 4" />'
      );
    }
  });
  // ===========================================================================

  // ======================== Dropdown Condition Article =======================
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

  // ======================== Dropdown Condition Article =======================
  const category = new URLSearchParams(window.location.search).get("category");
  const subcategory = new URLSearchParams(window.location.search).get(
    "subcategory"
  );
  var titlesidebar = $(".collapsiblesidebar:contains('" + category + "')");
  var subtitlesidebar = $(".sidebarcollapse a:contains('" + subcategory + "')");
  var iconside = titlesidebar.find(".icon");
  $("#breadcrumb-category").text(category);

  if (iconside.hasClass("bi-chevron-down")) {
    var targetside = titlesidebar.attr("data-target");
    $("#" + targetside).slideToggle();
    iconside.removeClass("bi-chevron-down").addClass("bi-chevron-up");
    var titlesidebarId = titlesidebar.attr("data-title");
    titlesidebarId = "#" + titlesidebarId;
    $(titlesidebarId).addClass("text-sky-700");
    $(subtitlesidebar).addClass("text-sky-700");
  }

  $(".collapsiblesidebar").on("click", function () {
    var iconside = $(this).find(".icon");
    var targetside = $(this).attr("data-target");

    if (iconside.hasClass("bi-chevron-down")) {
      $(".collapsiblesidebar .icon.bi-chevron-up").each(function () {
        var otherCategory = $(this).closest(".collapsiblesidebar");
        var otherTarget = otherCategory.attr("data-target");
        $("#" + otherTarget).slideUp();
        $(this).removeClass("bi-chevron-up").addClass("bi-chevron-down");
        var otherTitleId = otherCategory.attr("data-title");
        otherTitleId = "#" + otherTitleId;
        $(otherTitleId).removeClass("text-sky-700");
      });
      $("#" + targetside).slideDown();
      iconside.removeClass("bi-chevron-down").addClass("bi-chevron-up");
      var titlesidebarId = $(this).attr("data-title");
      titlesidebarId = "#" + titlesidebarId;
      $(titlesidebarId).addClass("text-sky-700");
    } else {
    }
  });

  // Handle subcategory link clicks when in detail article page
  if (window.location.pathname !== "/kb/generalarticle/generalarticledetail") {
    $(".subcategory-link").on("click", function (e) {
      e.preventDefault();
      $(".subcategory-link").removeClass("text-sky-700");
      const category = $(this).data("category");
      const subcategory = $(this).data("subcategory");
      $(this).addClass("text-sky-700");

      const origin = window.location.origin; // Get the origin (protocol, hostname, and port)
      const pathname = window.location.pathname; // Get the pathname (path and filename)
      const search = window.location.search; // Get the search part (query parameters)
      const fullURL = origin + pathname + search; // Combine them to get the full URL

      updateContent(category, subcategory, origin, pathname, search);

      // const newUrl = 'http://localhost:8080/kb/generalarticle?category=' + category + '&subcategory=' + subcategory;
      history.pushState({}, "", fullURL);
    });

    function updateContent(category, subcategory, origin, pathname, search) {
      $.ajax({
        type: "GET",
        url: origin + pathname + search,
        data: { category: category, subcategory: subcategory },
        success: function (response) {
          var tempElement = document.createElement("div");
          tempElement.innerHTML = response;
          var contentContainer =
            tempElement.querySelector("#content-container");

          if (contentContainer) {
            var contentHTML = contentContainer.innerHTML;
            $("#content-title").text(subcategory || category);
            $("#breadcrumb-category").text(category);
            $("#content-container").html(contentHTML);
          } else {
            console.error("#content-container not found in the response");
          }
        },
        error: function (error) {
          console.error("Error:", error);
        },
      });
    }
  }
  // ===========================================================================

  // ======================= Update Attribute Content Ajax =====================
  // Update Content Views
  $(".article-link").on("click", function () {
    const articleId = $(this).data("article-id");
    const href = $(this).attr("href");
    const data = {
      article: articleId,
      href: href,
    };
    $.ajax({
      type: "POST",
      url: "/kb/generalarticle/generalarticledetail/updateContentviews",
      data: data,
      success: function (response) {},
      error: function (error) {
        console.error("Error:", error);
      },
    });
  });

  let hasLiked = false;
  let hasDisliked = false;
  $(".reactions").on("click", "div[id]", function (event) {
    const id = $(this).data("id");
    const clickType = $(this).data("type");
    data = {
      id: id,
      type: clickType,
    };
    if (clickType === "like" && !hasLiked) {
      console.log("You liked!");
      hasLiked = true;
      hasDisliked = false;
      $.ajax({
        type: "POST",
        url: "/kb/generalarticle/generalarticledetail/updateReaction",
        data: data,
        success: function (response) {
        },
        error: function (error) {
          window.location.reload();
        },
      });
    } else if (clickType === "dislike" && !hasDisliked) {
      console.log("You disliked!");
      hasDisliked = true;
      hasLiked = false;
      $.ajax({
        type: "POST",
        url: "/kb/generalarticle/generalarticledetail/updateReaction",
        data: data,
        success: function (response) {
        },
        error: function (error) {
          window.location.reload();
        },
      });
    }
  });
  // =========================================================================

  // ======================== Reaction Icon Condition ========================
  $("#likes").hover(
    function () {
      $(this).find("svg path").css("fill", "#00d431");
    },
    function () {
      $(this).find("svg path").css("fill", "");
    }
  );
  $("#notlikes").hover(
    function () {
      $(this).find("svg path").css("fill", "#d10023");
    },
    function () {
      $(this).find("svg path").css("fill", "");
    }
  );
  // ===========================================================================

  // ===================== Open Close Modal Form Complain ======================
  // Select the modal element by its ID or other means
  const $modalElement = document.querySelector('#authentication-modal');
  const action = $('.form').attr('action');
  // Define the options for the modal
  const modalOptions = {
      placement: 'bottom-right',
      onHide: () => {
      },
      onShow: () => {
      },
      onToggle: () => {
      }
  };

  $(".tab-pane").on("click", function () {
    const target = $(this).attr("data-target");
    const method = $(target).attr("data-method");
    $("#method").val(method);
  });

  // Create a new Modal instance
  if (window.location.href === action) {
    const modal = new Modal($modalElement, modalOptions);
    if (fileMessage !== null) {
      modal.show();
    }
    $('[data-modal-hide="authentication-modal"]').click(function () {
      modal.hide();
    });
  }
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
  <button type="button" data-drawer-hide="drawer-disabled-backdrop" aria-controls="drawer-disabled-backdrop" class="text-white bg-main rounded-lg text-sm w-14 h-10 fixed top-[5rem] right-[6rem] inline-flex items-center justify-center">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
  </svg>
  <span class="sr-only">Close menu</span>
  </button>
  `;
  $("button[data-drawer-show='drawer-disabled-backdrop']").click(function () {
    // Append the button to the aside element
    $("#drawer-disabled-backdrop").append(toggleClose);
    $("body").removeClass("overflow-hidden");
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
  // ===========================================================================

  // ======================== Initiate Status Complain =========================
  $('[id^="status-entries"]').each(function () {
    var dropdown = $(this);
    var selectedValue = $(dropdown).val();
    var iconElement = $(dropdown).siblings("svg").find("path");
    var iconElementPos = $(dropdown).find("svg");
    if (selectedValue === "pending") {
      $(this)
        .removeClass("bg-solved-status text-solved-status-text")
        .removeClass("bg-progress-status text-progress-status-text")
        .addClass("bg-pending-status text-pending-status-text");
      $(iconElementPos).addClass("right-[4.5rem]");
      $(iconElement).attr("fill", "#CD6200").attr("stroke", "#CD6200");
    } else if (selectedValue === "progress") {
      $(this)
        .removeClass("bg-pending-status text-pending-status-text")
        .removeClass("bg-solved-status text-solved-status-text")
        .addClass("bg-progress-status text-progress-status-text");
      $(iconElementPos).addClass("right-[3.5rem]");
      $(iconElement).attr("fill", "#047FA6").attr("stroke", "#047FA6");
    } else {
      $(this)
        .removeClass("bg-pending-status text-pending-status-text")
        .removeClass("bg-progress-status text-progress-status-text")
        .addClass("bg-solved-status text-solved-status-text");
      $(iconElementPos).addClass("right-[4rem]");
      $(iconElement).attr("fill", "#1F9254").attr("stroke", "#1F9254");
    }
  });
  // ===========================================================================

  // ========================= Change Status Complain ==========================
  $('[id^="status-entries"]').change(function () {
    var initialStatusValue = $(this).val();
    var id = $(this).data("id");
    var iconElement = $(this).siblings("svg").find("path");
    var iconElementPos = $(this).find("svg");
    if (initialStatusValue === "pending") {
      $(this)
        .removeClass("bg-solved-status text-solved-status-text")
        .removeClass("bg-progress-status text-progress-status-text")
        .addClass("bg-pending-status text-pending-status-text");
      $(iconElementPos)
        .removeClass("right-[4.5rem]")
        .removeClass("right-[4rem]")
        .addClass("right-[4.5rem]");
      $(iconElement).attr("fill", "#CD6200").attr("stroke", "#CD6200");
    } else if (initialStatusValue === "progress") {
      $(this)
        .removeClass("bg-pending-status text-pending-status-text")
        .removeClass("bg-solved-status text-solved-status-text")
        .addClass("bg-progress-status text-progress-status-text");
      $(iconElementPos)
        .removeClass("right-[4.5rem]")
        .removeClass("right-[4rem]")
        .addClass("right-[4rem]");
      $(iconElement).attr("fill", "#047FA6").attr("stroke", "#047FA6");
    } else {
      $(this)
        .removeClass("bg-pending-status text-pending-status-text")
        .removeClass("bg-progress-status text-progress-status-text")
        .addClass("bg-solved-status text-solved-status-text");
      $(iconElementPos)
        .removeClass("right-[4.5rem]")
        .removeClass("right-[4rem]")
        .addClass("right-[4.5rem]");
      $(iconElement).attr("fill", "#1F9254").attr("stroke", "#1F9254");
    }
    const data = {
      id: id,
      status: initialStatusValue,
    };
    $.ajax({
      type: "POST",
      url: "/kb/administrator/complain/updateStatus",
      data: data,
      success: function (response) {},
      error: function (jqXHR, textStatus, errorThrown) {
        console.error("AJAX request error:", textStatus, errorThrown);
      },
    });
  });
  // ===========================================================================

  // ============ Initiate Open/Close Article & Complain =======================
  $('[id^="case-entries"]').each(function () {
    var dropdown = $(this);
    var selectedValue = dropdown.val();
    var iconElement = dropdown.siblings("svg").find("path");
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

  // =========== Change Condition Open/Close Article & Complain ================
  $('[id^="case-entries"]').change(function () {
    var initialCaseValue = $(this).val();
    var id = $(this).data("id");
    var iconElement = $(this).siblings("svg").find("path");
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
    if (window.location.pathname.includes("/administrator/complain")) {
      $.ajax({
        type: "POST",
        url: "/kb/administrator/complain/updateVisibility",
        data: data,
        success: function (response) {},
        error: function (jqXHR, textStatus, errorThrown) {
          console.error("AJAX request error:", textStatus, errorThrown);
        },
      });
    } else {
      $.ajax({
        type: "POST",
        url: "/kb/administrator/article/updateVisibility",
        data: data,
        success: function (response) {
          console.log("success");
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.error("AJAX request error:", textStatus, errorThrown);
        },
      });
    }
  });
  // ===========================================================================

  // ======================= Clickable Row Complain ===========================
  $(".clickable-row").click(function (event) {
    if (
      !$(event.target).closest("select").length &&
      !$(event.target).closest(".delete-checkbox").length
    ) {
      // Only navigate if the clicked element is not a select dropdown
      // window.location = $(this).data("href");
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
  $("#row-entries").change(function () {
    var offset = 1;
    var selectedValue = $(this).val();
    var currentUrl = window.location.href;
    var parts = currentUrl.split("/");
    var lastPart = parts[parts.length - 1];
    var pages = lastPart.split("?")[0];
    fetchData(selectedValue, offset, pages);
  });

  function fetchData(Data, offset, pages) {
    if (pages == "subcategory") {
      const url = new URL(window.location.href);
      const categoryId = url.searchParams.get("category_id");
      var newUrl =
        "/kb/administrator/category/" +
        pages +
        "?category_id=" +
        categoryId +
        "&page=" +
        offset +
        "&perPage=" +
        Data;
      window.location.href = newUrl;
    } else {
      var newUrl =
        "/kb/administrator/" + pages + "?page=" + offset + "&perPage=" + Data;
      window.location.href = newUrl;
    }
  }
  // ================================================================================

  // =============== Select Category & Subcategory Condition Article ================
  var categorySelect = $("#categorySelect");
  var subcategorySelect = $("#subcategorySelect");
  if (categorySelect.val() === null) {
    subcategorySelect.prop("disabled", true);
  } else if (categorySelect.val() !== "") {
    var selectedCategory = categorySelect.val();
    var subcategoryOptions = $("#subcategorySelect option");

    subcategoryOptions.each(function () {
      var option = $(this);
      if (option.hasClass(selectedCategory) || option.val() === "") {
        option.show();
      } else {
        option.hide();
      }
    });

    subcategorySelect.prop(
      "disabled",
      $("#subcategorySelect option." + selectedCategory).length === 0
    );
  }
  $("#categorySelect").change(function () {
    var selectedCategory = $(this).val();
    var subcategorySelect = $("#subcategorySelect");
    subcategorySelect.prop("disabled", true);
    $("#subcategorySelect option").hide();

    if (selectedCategory === "") {
      $('#subcategorySelect option[value=""]').show();
    } else {
      $("#subcategorySelect option." + selectedCategory).show();
      if ($("#subcategorySelect option." + selectedCategory).length === 0) {
        $('#subcategorySelect option[value=""]').show();
      } else {
        subcategorySelect.prop("disabled", false);
      }
    }
    subcategorySelect.val("");
  });
  // ===================================================================================

  // ========================= Dynamically URL Article Details =========================
  if (modifiedURL.test(window.location.href)) {
    if ($(".uploadTime").length > 0) {
      const nodes = $(".uploadTime").get();
      timeago.render(nodes, "en_US");
    }
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
const $fileInput = $("#dropzone-file");
const $selectedFileName = $("#selected-file-name");
const $dragdroptext = $("#dragdroptext");
const $formatsizetext = $("#formatsizetext");
const $dropzone = $("#dropzone");

// Add an event listener to the file input element
$fileInput.on("change", function (event) {
  // Get the selected file
  const selectedFile = event.target.files[0];

  // Check if a file is selected
  if (selectedFile) {
    // Update the text content of the <p> element with the file name
    $selectedFileName.text(`Selected file: ${selectedFile.name}`);
    $selectedFileName.addClass("-mt-8");
    $dragdroptext.removeClass("block md:block");
    $dropzone.addClass("border-main");
    $formatsizetext.removeClass("block md:block");
    $dragdroptext.addClass("hidden");
    $formatsizetext.addClass("hidden");
  } else {
    // If no file is selected, clear the text content
    $selectedFileName.text("");
    $selectedFileName.removeClass("-mt-8");
    $dragdroptext.removeClass("hidden");
    $dropzone.removeClass("border-main");
    $formatsizetext.removeClass("hidden");
    $dragdroptext.addClass("block");
    $formatsizetext.addClass("block");
  }
});

$dropzone.on("dragover", function (e) {
  e.preventDefault();
  $dropzone.addClass("border-main"); // Add a class to highlight the drop area when dragging over it.
});

$dropzone.on("dragleave", function () {
  $dropzone.removeClass("border-main"); // Remove the highlighting class when dragging leaves the drop area.
});

$dropzone.on("drop", function (e) {
  e.preventDefault();
  $dropzone.removeClass("border-main"); // Remove the highlighting class when a file is dropped.

  const files = e.originalEvent.dataTransfer.files;
  handleFileChange(files);
});

function handleFileChange(files) {
  if (files.length > 0) {
    const file = files[0];
    $selectedFileName.text(`Selected file: ${file.name}`);
    $selectedFileName.addClass("-mt-8");
    $dragdroptext.removeClass("block md:block");
    $dropzone.addClass("border-main");
    $formatsizetext.removeClass("block md:block");
    $dragdroptext.addClass("hidden");
    $formatsizetext.addClass("hidden");
    $fileInput[0].files = files; // Assign the selected files to the hidden input for form submission.
  } else {
    $selectedFileName.text("");
    $selectedFileName.removeClass("-mt-8");
    $dragdroptext.removeClass("hidden");
    $dropzone.removeClass("border-main");
    $formatsizetext.removeClass("hidden");
    $dragdroptext.addClass("block");
    $formatsizetext.addClass("block");
  }
}
