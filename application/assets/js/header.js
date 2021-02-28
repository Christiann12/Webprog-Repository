
var element1 = document.getElementById('element1');
var element2 = document.getElementById('element2');
var element3 = document.getElementById('element3');
var element4 = document.getElementById('element4');
var element5 = document.getElementById('element5');
var element6 = document.getElementById('element6');
var element7 = document.getElementById('element7');
    
function setActive(num){
    
    if (num == 1){
        sessionStorage.setItem('activeTab', num);
    }
    else if (num == 2){
        sessionStorage.setItem('activeTab', num);
    }
    else if (num == 3){
        sessionStorage.setItem('activeTab', num);
    }
    else if (num == 4){
        sessionStorage.setItem('activeTab', num);
    }
    else if (num == 5){
        sessionStorage.setItem('activeTab', num);
    }
    else if (num == 6){
        sessionStorage.setItem('activeTab', num);
    }
    else if (num == 7){
        sessionStorage.setItem('activeTab', num);
    }

}



var activeTab = sessionStorage.getItem('activeTab');
var temp = sessionStorage.getItem('temp');



element1.className = 'nav-link';
element2.className = 'nav-link';
element3.className = 'nav-link';
element4.className = 'nav-link';
element5.className = 'nav-link';
element6.className = 'nav-link';
element7.className = 'nav-link';

if(temp == null || temp == 0){
    
    sessionStorage.setItem('activeTab', 1);
    sessionStorage.setItem('temp', 1);
}

 activeTab = sessionStorage.getItem('activeTab');
 temp = sessionStorage.getItem('temp');

if (activeTab == 1){
    element1.className += ' active';
}
else if (activeTab == 2){
    element2.className += ' active';
}
else if (activeTab == 3){
    element3.className += ' active';
}
else if (activeTab == 4){
    element4.className += ' active';
}
else if (activeTab == 5){
    element5.className += ' active';
}
else if (activeTab == 6){
    element6.className += ' active';
}
else if (activeTab == 7){
    element7.className += ' active';
}

