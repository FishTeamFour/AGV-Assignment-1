<div>
    <ul>
        <li><a href="/welcome">Home</a></li>
        <li><a class="active" href="/catalog">Catalog</a></li>
        <li><a href="#">About</a></li>
    </ul>
</div>
<h2 class="catalogHeader">Headgear</h2>
<div id="div1"></div>

<script>
var totalRows = 5;
var cellsInRow = 5;

    function drawTable(divID) {
        // get the reference for the body
        //var div1 = document.getElementById('div1');
        var divId = document.getElementById(divID);

        // creates a <table> element
        var tbl = document.createElement("table");
        
        var titles = ["Name", "Description", "Health", "Attack", "Defense"];
 
        // creating rows
        for (var r = 0; r < totalRows; r++) {
            var row = document.createElement("tr");
	     
	     // create cells in row
             for (var c = 0; c < cellsInRow; c++) {
                var cell = document.createElement("td");
                if (c === 0) {
                    var cellText = document.createTextNode(titles[r]);
                } else {
                    var cellText = document.createTextNode("stuff");
                }
                cell.appendChild(cellText);
                row.appendChild(cell);
            }           
            
	tbl.appendChild(row); // add the row to the end of the table body
        }
    
     divId.appendChild(tbl); // appends <table> into <div1>
}
window.onload=drawTable('div1'); 
</script>


