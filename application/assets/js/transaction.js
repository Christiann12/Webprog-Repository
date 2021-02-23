function displayPages(services) {
    var x = document.getElementById("svcs-page");
    var y = document.getElementById("prdct-page");

    if (services == "svcs-page") {
        x.style.display = "block";
        y.style.display = "none";
    } else if (services == "prdct-page") {
        x.style.display = "none";
        y.style.display = "block";
    } 
}

displayPages('svcs-page');