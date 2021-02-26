function displayTables(servicesOrProducts) {
    var x = document.getElementById("servicestable");
    var y = document.getElementById("productstable");

    if (servicesOrProducts == "servicestable") {
        x.style.display = "block";
        y.style.display = "none";
    } else if (servicesOrProducts == "productstable") {
        x.style.display = "none";
        y.style.display = "block";
    } 
}

displayTables('servicestable');