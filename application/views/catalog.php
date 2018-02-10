<script>
    window.addEventListener('load',
            function () {
                document.getElementById("catalogLink").classList.add("active");
            }, false);
</script>
<h1>Headgear</h1>
<div id="headTable">
    <table>
        <tr>
            {headTable}
            <td style="width: 192px;">
                {picture}<br/>
                <div style="font-weight: 900;text-decoration: underline;">{name}</div>
                ({description})<br/>
                <p>Attack: {attack}<br/>
                Defense: {defense}<br/>
                Health: {health}</p><br/>
            </td>
            {/headTable}
        </tr>
    </table>
</div>
<h1>Armor</h1>
<div id="armorTable">
    <table>
        <tr>
            {armorTable}
            <td style="width: 192px;">
                {picture}<br/>
                <div style="font-weight: 900;text-decoration: underline;">{name}</div>
                ({description})<br/>
                <p>Attack: {attack}<br/>
                Defense: {defense}<br/>
                Health: {health}</p><br/>
            </td>
            {/armorTable}
        </tr>
    </table>
</div>
<h1>Footwear</h1>
<div id="footTable">
    <table>
        <tr>
            {footTable}
            <td style="width: 192px;">
                {picture}<br/>
                <div style="font-weight: 900;text-decoration: underline;">{name}</div>
                ({description})<br/>
                <p>Attack: {attack}<br/>
                Defense: {defense}<br/>
                Health: {health}</p><br/>
            </td>
            {/footTable}
        </tr>
    </table>
</div>
<h1>Weapons</h1>
<div id="weaponTable">
    <table>
        <tr>
            {weaponTable}
            <td style="width: 192px;">
                {picture}<br/>
                <div style="font-weight: 900;text-decoration: underline;">{name}</div>
                ({description})<br/>
                <p>Attack: {attack}<br/>
                Defense: {defense}<br/>
                Health: {health}</p><br/>
            </td>
            {/weaponTable}
        </tr>
    </table>
</div>
<h1>Offhands</h1>
<div id="offhandTable">
    <table>
        <tr>
            {offhandTable}
            <td style="width: 192px;">
                {picture}<br/>
                <div style="font-weight: 900;text-decoration: underline;">{name}</div>
                ({description})<br/>
                <p>Attack: {attack}<br/>
                Defense: {defense}<br/>
                Health: {health}</p><br/>
            </td>
            {/offhandTable}
        </tr>
    </table>
</div>