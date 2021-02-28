
var elementadmin1 = document.getElementById('elementadmin1');
var elementadmin2 = document.getElementById('elementadmin2');
var elementadmin3 = document.getElementById('elementadmin3');
var elementadmin4 = document.getElementById('elementadmin4');
var elementadmin5 = document.getElementById('elementadmin5');
var elementadmin6 = document.getElementById('elementadmin6');
var elementadmin7 = document.getElementById('elementadmin7');
    
function setActiveAdmin(num){
    
    if (num == 1){
        sessionStorage.setItem('activeTabadmimn', num);
    }
    else if (num == 2){
        sessionStorage.setItem('activeTabadmimn', num);
    }
    else if (num == 3){
        sessionStorage.setItem('activeTabadmimn', num);
    }
    else if (num == 4){
        sessionStorage.setItem('activeTabadmimn', num);
    }

}



var activeTabadmimn = sessionStorage.getItem('activeTabadmimn');
var tempadmin = sessionStorage.getItem('tempadmin');



elementadmin1.className = 'list-group-item list-group-item-action mt-1';
elementadmin2.className = 'list-group-item list-group-item-action mt-1';
elementadmin3.className = 'list-group-item list-group-item-action mt-1';
elementadmin4.className = 'list-group-item list-group-item-action mt-1';

if(tempadmin == null || tempadmin == 0){
    
    sessionStorage.setItem('activeTabadmimn', 1);
    sessionStorage.setItem('tempadmin', 1);
}

 activeTabadmimn = sessionStorage.getItem('activeTabadmimn');
 tempadmin = sessionStorage.getItem('tempadmin');

if (activeTabadmimn == 1){
    elementadmin1.className += ' active';
}
else if (activeTabadmimn == 2){
    elementadmin2.className += ' active';
}
else if (activeTabadmimn == 3){
    elementadmin3.className += ' active';
}
else if (activeTabadmimn == 4){
    elementadmin4.className += ' active';
}


