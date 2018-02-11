<script>
    window.addEventListener('load',
            function () {
                document.getElementById("homeLink").classList.add("active");
            }, false);
</script>
<table>
    <tr>
        <td style="width: 300px;">
            <div class="outfit">
                <div id="head">
                    <table>
                        <tr>
                            <td><span style="margin-left: 88px; display: inline-block;"></span></td>
                            <td>
                                <div style="height: 15px;">
                                </div>
                                <div class="dropdown">
                                    <button id="headgear" class="gear dropbtn" style="background-image: url('/{headPath}');"></button>
                                    <div class="dropdown-content">
                                        <a href="#">Option 1</a>
                                        <a href="#">Option 2</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="body_hands">
                    <table>
                        <tr>
                            <td>
                                <div style="height: 35px;">
                                </div>
                                <span style="margin-left: 10px; display: inline-block;"></span>
                                <div class="dropdown">
                                    <button id="weapon" class="gear dropbtn" style="background-image: url('/{weaponPath}');"></button>
                                    <div class="dropdown-content">
                                        <a href="#">Option 1</a>
                                        <a href="#">Option 2</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div style="height: 10px;">
                                </div>
                                <div class="dropdown">
                                    <button id="armor" class="gear-body dropbtn" style="background-image: url('/{armorPath}');"></button>
                                    <div class="dropdown-content">
                                        <a href="#">Option 1</a>
                                        <a href="#">Option 2</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div style="height: 35px;">
                                </div>
                                <div class="dropdown">
                                    <button id="offhand" class="gear dropbtn" style="background-image: url('/{offhandPath}');"></button>
                                    <div class="dropdown-content">
                                        <a href="#">Option 1</a>
                                        <a href="#">Option 2</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="feet">
                    <table>
                        <tr>
                            <td><span style="margin-left: 88px; display: inline-block;"></span></td>
                            <td>
                                <div class="dropdown">
                                    <button id="footwear" class="gear dropbtn" style="background-image: url('/{footwearPath}');"></button>
                                    <div class="dropdown-content">
                                        <a href="#">Option 1</a>
                                        <a href="#">Option 2</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </td>
        <td>
            <table>
                <tr>
                    <th>
                        Total Attack: 
                    </th>
                    <td>
                        {atk}
                    </td>
                </tr>
                <tr>
                    <th>
                        Total Defense: 
                    </th>
                    <td>
                        {def}
                    </td>
                </tr>
                <tr>
                    <th>
                        Total Health: 
                    </th>
                    <td>
                        {hp}
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<div>
    <div class="dropdown">
        <button class="dropbtn-set">Select Set</button>
        <div class="dropdown-content">
            <a href="javascript:selectSet1()">Set 1</a>
            <a href="javascript:selectSet2()">Set 2</a>
        </div>
    </div>
</div>
<div id="testDiv"></div>