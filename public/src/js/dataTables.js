window.onload = function () {
  displayData();
};

let currentPage = 1; // Halaman saat ini
let entriesPerPage = 10; // Jumlah data per halaman
let totalEntries = 0; // Total jumlah data
let totalPages = 0; // Total jumlah halaman
let startIndex = 0; // Indeks awal data yang ditampilkan

$("#searchInput").on("keyup", function () {
  let input, filter, table, tr, i;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("dataTable");
  tr = table.getElementsByTagName("tr");

  for (i = 1; i < tr.length; i++) {
    let row = tr[i];
    let cells = row.getElementsByTagName("td");
    let rowText = "";

    for (let j = 0; j < cells.length; j++) {
      rowText += cells[j].textContent || cells[j].innerText;
    }

    if (rowText.toUpperCase().indexOf(filter) > -1) {
      row.style.display = "";
    } else {
      row.style.display = "none";
    }
  }
});

$("#entries").on("change", function () {
  entriesPerPage = parseInt($("#entries").val());
  startIndex = 0;
  currentPage = 1;
  displayData();
});

$("#prevBtn").on("click", function () {
  if (currentPage > 1) {
    currentPage--;
    startIndex -= entriesPerPage;
    displayData();
  }
});

$("#nextBtn").on("click", function () {
  if (currentPage < totalPages) {
    currentPage++;
    startIndex += entriesPerPage;
    displayData();
  }
});

// $(".btn-page").on("click", function () {
//   location.reload();
// });

$(document).on("click", ".btn-page", function () {
  let page = $(this).data("page");
  currentPage = page;
  startIndex = (page - 1) * entriesPerPage;
  displayData();
});

function displayData() {
  let input, filter, table, tr, i;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("dataTable");
  tr = table.getElementsByTagName("tr");

  // let noResultsMessage = document.getElementById("noResultsMessage");
  // let resultsFound = false;

  let endIndex = startIndex + entriesPerPage;
  startIndex = endIndex - entriesPerPage;

  for (i = 1; i < tr.length; i++) {
    let row = tr[i];
    let cells = row.getElementsByTagName("td");
    let rowText = "";

    for (let j = 0; j < cells.length; j++) {
      rowText += cells[j].textContent || cells[j].innerText;
    }

    if (rowText.toUpperCase().indexOf(filter) > -1) {
      if (i > startIndex && i <= endIndex) {
        row.style.display = "";
      } else {
        row.style.display = "none";
      }
    } else {
      row.style.display = "none";
    }
  }

  // Hitung total halaman
  totalEntries = tr.length - 1;
  totalPages = Math.ceil(totalEntries / entriesPerPage);

  // Tampilkan pesan jika tidak ada hasil ditemukan
  // if (!resultsFound) {
  //   noResultsMessage.style.display = "block";
  //   document.getElementById("pagination").style.display = "none";
  // } else {
  //   noResultsMessage.style.display = "none";
  //   document.getElementById("pagination").style.display = "block";
  // }

  // Tampilkan informasi halaman

  let pageIndicator = document.getElementById("pageIndicator");
  let prevBtn = document.getElementById("prevBtn");
  let nextBtn = document.getElementById("nextBtn");
  while (pageIndicator.firstChild) {
    pageIndicator.removeChild(pageIndicator.firstChild);
  }

  for (let i = 1; i <= totalPages; i++) {
    let button = document.createElement("button");
    button.className =
      "btn-page flex items-center justify-center px-3 h-8 leading-tight bg-white border hover:bg-gray-100 hover:text-gray-700  border-white dark:text-gray-400 dark:hover:bg-main dark:hover:text-white";
    button.setAttribute("data-page", i);
    button.setAttribute("type", "button");
    button.textContent = i;
    pageIndicator.appendChild(button);

    // if ()
  }

  for (let i = 0; i < $(".btn-page").length; i++) {
    let element = $(".btn-page")[i];
    let page = element.getAttribute("data-page");
    if (page == currentPage) {
      element.className =
        "btn-page flex items-center justify-center px-3 h-8 text-white border bg-blue-50 hover:text-blue-700 border-white dark:bg-main dark:hover:text-white";
    } else {
      element.className =
        "btn-page flex items-center justify-center px-3 h-8 leading-tight bg-white border hover:bg-gray-100 hover:text-gray-700  border-white dark:text-gray-400 dark:hover:bg-main dark:hover:text-white";
    }
  }

  if (totalPages > 1) {
    if (currentPage == 1) {
      prevBtn.disabled = true;
      nextBtn.disabled = false;
      prevBtn.classList.remove("dark:hover:bg-main");
      prevBtn.classList.remove("dark:hover:text-white");
      nextBtn.classList.add("dark:hover:bg-main");
      nextBtn.classList.add("dark:hover:text-white");
    }

    if (currentPage == totalPages) {
      prevBtn.disabled = false;
      nextBtn.disabled = true;
      prevBtn.classList.add("dark:hover:bg-main");
      prevBtn.classList.add("dark:hover:text-white");
      nextBtn.classList.remove("dark:hover:bg-main");
      nextBtn.classList.remove("dark:hover:text-white");
    }
  } else {
    prevBtn.disabled = true;
    nextBtn.disabled = true;
    prevBtn.classList.remove("dark:hover:bg-main");
    prevBtn.classList.remove("dark:hover:text-white");
    nextBtn.classList.remove("dark:hover:bg-main");
    nextBtn.classList.remove("dark:hover:text-white");
  }

  // document.getElementById("prevBtn").disabled = currentPage === 1;
  // document.getElementById("nextBtn").disabled = currentPage === totalPages;
}
