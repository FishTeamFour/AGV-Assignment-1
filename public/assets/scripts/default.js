/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function selectSet(id) {
    /*var head = document.getElementById("headgear");
     var weapon = document.getElementById("weapon");
     var armor = document.getElementById("armor");
     var offhand = document.getElementById("offhand");
     var feet = document.getElementById("footwear");
     
     head.style.backgroundImage = "url('/assets/images/headgear1.PNG')";
     weapon.style.backgroundImage = "url('/assets/images/weapon1.PNG')";
     armor.style.backgroundImage = "url('/assets/images/armor1.PNG')";
     offhand.style.backgroundImage = "url('/assets/images/offhand1.PNG')";
     feet.style.backgroundImage = "url('/assets/images/footwear1.PNG')";*/

    var host = window.location.hostname;
    var link = "http://";
    host = link.concat(host);
    host = host.concat("/welcome/getSet/");
    host = host.concat(id);

    window.location = host;
}

function updateHead(id) {
    //var head = document.getElementById("headgear").value;
    
    var weapon = document.getElementById("weapon").value;
    
    var armor = document.getElementById("armor").value;
    
    var offhand = document.getElementById("offhand").value;
    
    var feet = document.getElementById("footwear").value;

    var host = window.location.hostname;
    var link = "http://";
    host = link.concat(host);
    host = host.concat("/welcome/updateItem/");
    host = host.concat(id);
    host = host.concat("-");
    host = host.concat(weapon);
    host = host.concat("-");
    host = host.concat(armor);
    host = host.concat("-");
    host = host.concat(offhand);
    host = host.concat("-");
    host = host.concat(feet);

    window.location = host;
}

function updateWeapon(id) {
    var head = document.getElementById("headgear").value;
    //var weapon = document.getElementById("weapon");
    
    var armor = document.getElementById("armor").value;
    
    var offhand = document.getElementById("offhand").value;
    
    var feet = document.getElementById("footwear").value;

    var host = window.location.hostname;
    var link = "http://";
    host = link.concat(host);
    host = host.concat("/welcome/updateItem/");
    host = host.concat(head);
    host = host.concat("-");
    host = host.concat(id);
    host = host.concat("-");
    host = host.concat(armor);
    host = host.concat("-");
    host = host.concat(offhand);
    host = host.concat("-");
    host = host.concat(feet);

    window.location = host;
}

function updateArmor(id) {
    var head = document.getElementById("headgear").value;
    
    var weapon = document.getElementById("weapon").value;
    
    //var armor = document.getElementById("armor").value;
    
    var offhand = document.getElementById("offhand").value;
    
    var feet = document.getElementById("footwear").value;

    var host = window.location.hostname;
    var link = "http://";
    host = link.concat(host);
    host = host.concat("/welcome/updateItem/");
    host = host.concat(head);
    host = host.concat("-");
    host = host.concat(weapon);
    host = host.concat("-");
    host = host.concat(id);
    host = host.concat("-");
    host = host.concat(offhand);
    host = host.concat("-");
    host = host.concat(feet);

    window.location = host;
}

function updateOffhand(id) {
    var head = document.getElementById("headgear").value;
    
    var weapon = document.getElementById("weapon").value;
    
    var armor = document.getElementById("armor").value;
    
    //var offhand = document.getElementById("offhand").value;
    
    var feet = document.getElementById("footwear").value;

    var host = window.location.hostname;
    var link = "http://";
    host = link.concat(host);
    host = host.concat("/welcome/updateItem/");
    host = host.concat(head);
    host = host.concat("-");
    host = host.concat(weapon);
    host = host.concat("-");
    host = host.concat(armor);
    host = host.concat("-");
    host = host.concat(id);
    host = host.concat("-");
    host = host.concat(feet);

    window.location = host;
}

function updateFeet(id) {
    var head = document.getElementById("headgear").value;
    
    var weapon = document.getElementById("weapon").value;
    
    var armor = document.getElementById("armor").value;
    
    var offhand = document.getElementById("offhand").value;
    
    //var feet = document.getElementById("footwear").value;

    var host = window.location.hostname;
    var link = "http://";
    host = link.concat(host);
    host = host.concat("/welcome/updateItem/");
    host = host.concat(head);
    host = host.concat("-");
    host = host.concat(weapon);
    host = host.concat("-");
    host = host.concat(armor);
    host = host.concat("-");
    host = host.concat(offhand);
    host = host.concat("-");
    host = host.concat(id);

    window.location = host;
}