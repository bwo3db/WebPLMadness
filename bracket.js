function ro64select(currentElement, addcode){
    let currentelementid = Number(currentElement.id);
    let changedelement = 0; 
    if(currentelementid  === 1 + addcode){
        changedelement = 17 + addcode;
    }else if(currentelementid === 2 + addcode){
        changedelement = 17 + addcode;
    }else if(currentelementid === 3 + addcode){
        changedelement = 18 + addcode;
    }else if(currentelementid === 4 + addcode){
        changedelement = 18 + addcode;
    }
    else if(currentelementid  === 5 + addcode){
        changedelement = 19 + addcode;
    }else if(currentelementid === 6 + addcode){
        changedelement = 19 + addcode;
    }else if(currentelementid === 7 + addcode){
        changedelement = 20 + addcode;
    }else if(currentelementid === 8 + addcode){
        changedelement = 20 + addcode;
    }
    else if(currentelementid  === 9 + addcode){
        changedelement = 21 + addcode;
    }else if(currentelementid === 10 + addcode){
        changedelement = 21 + addcode;
    }else if(currentelementid === 11 + addcode){
        changedelement = 22 + addcode;
    }else if(currentelementid === 12 + addcode){
        changedelement = 22 + addcode;
    }
    else if(currentelementid  === 13 + addcode){
        changedelement = 23 + addcode;
    }else if(currentelementid === 14 + addcode){
        changedelement = 23 + addcode;
    }else if(currentelementid === 15 + addcode){
        changedelement = 24 + addcode;
    }else if(currentelementid === 16 + addcode){
        changedelement = 24 + addcode;
    }

    var locofswitch = document.getElementById(changedelement.toString());
    locofswitch.getElementsByClassName("ranking")[0].getElementsByClassName("ranking-text")[0].innerHTML = currentElement.getElementsByClassName("ranking")[0].getElementsByClassName("ranking-text")[0].innerHTML;
    locofswitch.getElementsByClassName("team-name")[0].getElementsByClassName("team-name-text")[0].innerHTML = currentElement.getElementsByClassName("team-name")[0].getElementsByClassName("team-name-text")[0].innerHTML;
    console.log(locofswitch);
}

function ro32select(currentElement, addcode){
    let currentelementid = Number(currentElement.id);
    let changedelement = 0; 
    if(currentelementid  === 17 + addcode){
        changedelement = 25 + addcode;
    }else if(currentelementid === 18 + addcode){
        changedelement = 25 + addcode;
    }else if(currentelementid === 19 + addcode){
        changedelement = 26 + addcode;
    }else if(currentelementid === 20 + addcode){
        changedelement = 26 + addcode;
    }
    else if(currentelementid  === 21 + addcode){
        changedelement = 27 + addcode;
    }else if(currentelementid === 22 + addcode){
        changedelement = 27 + addcode;
    }else if(currentelementid === 23 + addcode){
        changedelement = 28 + addcode;
    }else if(currentelementid === 24 + addcode){
        changedelement = 28 + addcode;
    }

    var locofswitch = document.getElementById(changedelement.toString());
    locofswitch.getElementsByClassName("ranking")[0].getElementsByClassName("ranking-text")[0].innerHTML = currentElement.getElementsByClassName("ranking")[0].getElementsByClassName("ranking-text")[0].innerHTML;
    locofswitch.getElementsByClassName("team-name")[0].getElementsByClassName("team-name-text")[0].innerHTML = currentElement.getElementsByClassName("team-name")[0].getElementsByClassName("team-name-text")[0].innerHTML;
    console.log(locofswitch);
}

function ro16select(currentElement, addcode){
    let currentelementid = Number(currentElement.id);
    let changedelement = 0; 
    if(currentelementid  === 25 + addcode){
        changedelement = 29 + addcode;
    }else if(currentelementid === 26 + addcode){
        changedelement = 29 + addcode;
    }else if(currentelementid === 27 + addcode){
        changedelement = 30 + addcode;
    }else if(currentelementid === 28 + addcode){
        changedelement = 30 + addcode;
    }

    var locofswitch = document.getElementById(changedelement.toString());
    locofswitch.getElementsByClassName("ranking")[0].getElementsByClassName("ranking-text")[0].innerHTML = currentElement.getElementsByClassName("ranking")[0].getElementsByClassName("ranking-text")[0].innerHTML;
    locofswitch.getElementsByClassName("team-name")[0].getElementsByClassName("team-name-text")[0].innerHTML = currentElement.getElementsByClassName("team-name")[0].getElementsByClassName("team-name-text")[0].innerHTML;
    console.log(locofswitch);
}

function eeselect(currentElement){
    let currentelementid = Number(currentElement.id);
    let changedelement = 0; 
    if(currentelementid  === 29){
        changedelement = 61;
    }else if(currentelementid === 30){
        changedelement = 61;
    }else if(currentelementid === 95){
        changedelement = 62;
    }else if(currentelementid === 96){
        changedelement = 62;
    }
    else if(currentelementid === 59){
        changedelement = 65;
    }else if(currentelementid === 60){
        changedelement = 65;
    }
    else if(currentelementid === 125){
        changedelement = 66;
    }else if(currentelementid === 126){
        changedelement = 66;
    }

    var locofswitch = document.getElementById(changedelement.toString());
    locofswitch.getElementsByClassName("ranking")[0].getElementsByClassName("ranking-text")[0].innerHTML = currentElement.getElementsByClassName("ranking")[0].getElementsByClassName("ranking-text")[0].innerHTML;
    locofswitch.getElementsByClassName("team-name")[0].getElementsByClassName("team-name-text")[0].innerHTML = currentElement.getElementsByClassName("team-name")[0].getElementsByClassName("team-name-text")[0].innerHTML;
    console.log(locofswitch);
}

function ffselect(currentElement){
    let currentelementid = Number(currentElement.id);
    let changedelement = 0; 
    if(currentelementid  === 61){
        changedelement = 63;
    }else if(currentelementid === 62){
        changedelement = 63;
    }else if(currentelementid === 65){
        changedelement = 64;
    }else if(currentelementid === 66){
        changedelement = 64;
    }

    var locofswitch = document.getElementById(changedelement.toString());
    locofswitch.getElementsByClassName("ranking")[0].getElementsByClassName("ranking-text")[0].innerHTML = currentElement.getElementsByClassName("ranking")[0].getElementsByClassName("ranking-text")[0].innerHTML;
    locofswitch.getElementsByClassName("team-name")[0].getElementsByClassName("team-name-text")[0].innerHTML = currentElement.getElementsByClassName("team-name")[0].getElementsByClassName("team-name-text")[0].innerHTML;
    console.log(locofswitch);
}

function champselect(currentElement){
    document.getElementById("finalchamp").innerHTML = currentElement.getElementsByClassName("team-name")[0].getElementsByClassName("team-name-text")[0].innerHTML;
    console.log(locofswitch);
}