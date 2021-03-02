function addTransactionService(){

    var temporary =  localStorage.getItem('transactioncountservice');

    temporary++;

    localStorage.setItem('transactioncountservice', temporary);

    alert("Added 1 to service transaction count");

}

function addTransactionProduct(){

    var temporary =  localStorage.getItem('transactioncountproduct');

    temporary++;

    localStorage.setItem('transactioncountproduct', temporary);

    alert("Added 1 to product transaction count");

}