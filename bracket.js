

var ro64sub = function(changedElement, addcode, modder){
    let position = changedElement - addcode - 17;
    if(addcode === 0){
        if(modder === 0){
            bracketarray[position] = 0;
            console.log(bracketarray);
        }else{
            bracketarray[position] = 1;
            console.log(bracketarray);
        }
    }else if (addcode === 30){
        position = position + 14;
        if(modder === 0){
            bracketarray[position] = 0;
            console.log(bracketarray);
        }else{
            bracketarray[position] = 1;
            console.log(bracketarray);
        }
    }else if (addcode ===66){
        position = position + 28;
        if(modder === 0){
            bracketarray[position] = 0;
            console.log(bracketarray);
        }else{
            bracketarray[position] = 1;
            console.log(bracketarray);
        }
    }else if(addcode === 96){
        position = position + 42;
        if(modder === 0){
            bracketarray[position] = 0;
            console.log(bracketarray);
        }else{
            bracketarray[position] = 1;
            console.log(bracketarray);
        }
    }
}

var ro64select = function(currentElement, addcode){
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
    ro64sub(changedelement, addcode, currentElement.id % 2);

    var locofswitch = document.getElementById(changedelement.toString());
    locofswitch.getElementsByClassName("ranking")[0].getElementsByClassName("ranking-text")[0].innerHTML = currentElement.getElementsByClassName("ranking")[0].getElementsByClassName("ranking-text")[0].innerHTML;
    locofswitch.getElementsByClassName("team-name")[0].getElementsByClassName("team-name-text")[0].innerHTML = currentElement.getElementsByClassName("team-name")[0].getElementsByClassName("team-name-text")[0].innerHTML;
    console.log(locofswitch);
}

ro32select = (currentElement, addcode) =>{
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

    ro64sub(changedelement, addcode, currentElement.id % 2);

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
    
    ro64sub(changedelement, addcode, currentElement.id % 2);

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
        bracketarray[56] = 1;
    }else if(currentelementid === 30){
        changedelement = 61;
        bracketarray[56] = 0;
    }else if(currentelementid === 95){
        changedelement = 62;
        bracketarray[57] = 1;
    }else if(currentelementid === 96){
        changedelement = 62;
        bracketarray[57] = 0;
    }
    else if(currentelementid === 59){
        changedelement = 65;
        bracketarray[58] = 1;
    }else if(currentelementid === 60){
        changedelement = 65;
        bracketarray[58] = 0;
    }
    else if(currentelementid === 125){
        changedelement = 66;
        bracketarray[59] = 1;
    }else if(currentelementid === 126){
        changedelement = 66;
        bracketarray[59] = 0;
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
        bracketarray[60] = 1;
    }else if(currentelementid === 62){
        changedelement = 63;
        bracketarray[60] = 0;
    }else if(currentelementid === 65){
        changedelement = 64;
        bracketarray[61] = 1;
    }else if(currentelementid === 66){
        changedelement = 64;
        bracketarray[61] = 0;
    }

    var locofswitch = document.getElementById(changedelement.toString());
    locofswitch.getElementsByClassName("ranking")[0].getElementsByClassName("ranking-text")[0].innerHTML = currentElement.getElementsByClassName("ranking")[0].getElementsByClassName("ranking-text")[0].innerHTML;
    locofswitch.getElementsByClassName("team-name")[0].getElementsByClassName("team-name-text")[0].innerHTML = currentElement.getElementsByClassName("team-name")[0].getElementsByClassName("team-name-text")[0].innerHTML;
    console.log(locofswitch);
}

function champselect(currentElement){
    champion = currentElement.getElementsByClassName("team-name")[0].getElementsByClassName("team-name-text")[0].innerHTML;
    document.getElementById("finalchamp").innerHTML = currentElement.getElementsByClassName("team-name")[0].getElementsByClassName("team-name-text")[0].innerHTML;
}

function yourbracketsave(){
    var champ = document.getElementById("finalchamp").innerHTML;
    var convertedBracket = bracketarray.toString().replace(/,/g, '');
    if(champ === ""){
        document.getElementById("saveupdate").innerHTML = "Please Finish Filling out the Bracket!";
    }else{
        document.getElementById("saveupdate").innerHTML = "Your bracket was saved!";
        document.cookie = "bracketarray="+convertedBracket;
        document.cookie = "champion="+champion;
        console.log(document.cookie);
    }
}