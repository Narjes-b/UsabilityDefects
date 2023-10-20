function AddRow(){
// Find a <table> element with id="myTable":
var table = document.getElementById("components");
var rowCount = table.rows.length;
var row = table.insertRow(rowCount);

// Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);


// Add some text to the new cells:
cell1.innerHTML = "div";
cell2.innerHTML = "123";
cell3.innerHTML = "156";
cell4.innerHTML = "50";
cell5.innerHTML = "50";
}
