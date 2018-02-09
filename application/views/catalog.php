<script>
    window.addEventListener('load',
            function () {
                document.getElementById("catalogLink").classList.add("active");
            }, false);
</script>
<h2 class="catalogHeader">Headgear</h2>
<div id="div1"></div>
<h2 class="catalogHeader">Weapon</h2>
<div id="div2"></div>
<h2 class="catalogHeader">Armor</h2>
<div id="div3"></div>
<h2 class="catalogHeader">Offhand</h2>
<div id="div4"></div>
<h2 class="catalogHeader">Footwear</h2>
<div id="div5"></div>

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
        
        var imageRow = document.createElement("tr");
        for (var i = 0; i < cellsInRow; i++) {
            var imageCell = document.createElement("th");
            
            var image = document.createElement("img");
            //imageCell.style.backgroundImage = "url('/assets/images/headgear1.PNG')";
            //image.src = "url('/assets/images/headgear1.PNG')";
            image.src = "/assets/images/headgear1.PNG";
            image.alt = "image";
            image.width = "128";
            image.height = "128";
            
            imageCell.appendChild(image);
            imageRow.appendChild(imageCell);
        }
        tbl.appendChild(imageRow);
 
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
window.onload=drawTable('div2'); 
window.onload=drawTable('div3');
window.onload=drawTable('div4');
window.onload=drawTable('div5');

</script>