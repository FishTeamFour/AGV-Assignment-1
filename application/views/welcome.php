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
                                    <button id="headgear" class="gear dropbtn" value="{currHead}" style="background-image: url('/{headPath}');"></button>
                                    <div class="dropdown-content">
                                        {head}
                                        <a href="#" onclick="updateHead({id})">Option {idText}</a>
                                        {/head}
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
                                    <button  id="weapon" class="gear dropbtn" value="{currWeapon}" style="background-image: url('/{weaponPath}');"></button>
                                    <div class="dropdown-content">
                                        {weapon}
                                        <a href="#" onclick="updateWeapon({id})">Option {idText}</a>
                                        {/weapon}
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div style="height: 10px;">
                                </div>
                                <div class="dropdown">
                                    <button id="armor" class="gear-body dropbtn" value="{currArmor}" style="background-image: url('/{armorPath}');"></button>
                                    <div class="dropdown-content">
                                        {armor}
                                        <a href="#" onclick="updateArmor({id})">Option {idText}</a>
                                        {/armor}
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div style="height: 35px;">
                                </div>
                                <div class="dropdown">
                                    <button id="offhand" class="gear dropbtn" value="{currOffhand}" style="background-image: url('/{offhandPath}');"></button>
                                    <div class="dropdown-content">
                                        {offhand}
                                        <a href="#" onclick="updateOffhand({id})">Option {idText}</a>
                                        {/offhand}
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
                                    <button id="footwear" class="gear dropbtn" value="{currFeet}" style="background-image: url('/{footwearPath}');"></button>
                                    <div class="dropdown-content">
                                        {feet}
                                        <a href="#" onclick="updateFeet({id})">Option {idText}</a>
                                        {/feet}
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
            {set}
            <a href="javascript:void(0)" onclick="selectSet({id})">Set {idText}</a>
            {/set}
        </div>
    </div>
</div>