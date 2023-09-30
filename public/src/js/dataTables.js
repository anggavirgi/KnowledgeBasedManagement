$("#searchInput").on("keyup", function () {
  let input, filter, table, tr, i;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
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
      resultsFound = true;
    } else {
      row.style.display = "none";
    }
  }
});
