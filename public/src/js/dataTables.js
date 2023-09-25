$("#searchInput").on("keyup", function () {
  var input, filter, table, tr, i;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  for (i = 1; i < tr.length; i++) {
    var row = tr[i];
    var cells = row.getElementsByTagName("td");
    var rowText = "";

    for (var j = 0; j < cells.length; j++) {
      rowText += cells[j].textContent || cells[j].innerText;
    }

    if (rowText.toUpperCase().indexOf(filter) > -1) {
      row.style.display = "";
      resultsFound = true;
    } else {
      row.style.display = "none";
    }
  }
});
