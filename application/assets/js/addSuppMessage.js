function addSupportmessage(){

    var temporary = localStorage.getItem('supportMessagecount');

    temporary++;

    localStorage.setItem('supportMessagecount', temporary);

    alert("Added 1 to support message to support count");
}
