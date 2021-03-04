function addPing(){

    var temporary = localStorage.getItem('pingCount');

    temporary++;

    localStorage.setItem('pingCount', temporary);

    alert("Added 1 ping count");
}
