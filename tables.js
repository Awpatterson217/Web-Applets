// NEEDS AN EMPTY TABLE
// Toggle display of table
function toggleTable(choice, tableID) {
    var table = document.getElementById(table);
    if (choice === 'on')
        table.style.display = 'block';
      else if(choice === 'off')
        table.style.display = 'none';
}
// Adds column to row
function addColumn(data, row){
    const column = document.createElement("td");
    const value  = document.createTextNode(data);
    column.appendChild(value);
    row.appendChild(column);
}
// Adds data to table
// Must run clearTable() first
function addRow(tableChoice, classObject){
    const table    = tableChoice;
    const rowCount = table.rows.length;
    const thisRow  = table.insertRow(rowCount);
    // Example
    addColumn(exampleData, thisRow);
  }
// Removes all rows from table
// Useful when refreshing data
function clearTable(tableChoice){
    const table  = tableChoice;
    let rowCount = table.rows.length;
    if(rowCount > 1){
        for(rowCount; rowCount > 1; rowCount--){
            table.deleteRow(rowCount-1);
        }
    }
}
// Makes a GET/POST request, expecting JSON
let getJSON = function(requestUrl, type){
    let data;
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            data = JSON.parse(xhr.responseText);
            data.forEach( function (dataObj) {
              // Handle JSON here
            });
        }
    };
    xhr.open(type, requestURL);
    xhr.send();
    return false;
}