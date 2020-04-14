
var k = 0;
var allboxes = document.getElementsByClassName("team-box");
for(var i = 0;i<8;i++){
    if(returnedbracket[i]== '1'){
        ro64select(document.getElementsByClassName("team-box").item(k), 0);
    }
    if(returnedbracket[i]== '0'){
        ro64select(document.getElementsByClassName("team-box").item(k+1), 0);
    }
    k = k + 2;
}

for(var i = 8;i<12;i++){
    if(returnedbracket[i]== '1'){
        ro32select(document.getElementsByClassName("team-box").item(k), 0);
    }
    if(returnedbracket[i]== '0'){
        ro32select(document.getElementsByClassName("team-box").item(k+1), 0);
    }
    k = k + 2;
}

for(var i = 12;i<14;i++){
    if(returnedbracket[i]== '1'){
        ro16select(document.getElementsByClassName("team-box").item(k), 0);
    }
    if(returnedbracket[i]== '0'){
        ro16select(document.getElementsByClassName("team-box").item(k+1), 0);
    }
    k = k + 2;
}

k = 30;

for(var i = 14;i<22;i++){
    console.log(returnedbracket[i])
    if(returnedbracket[i]== '1'){
        ro64select(document.getElementsByClassName("team-box").item(k), 30);
    }
    if(returnedbracket[i]== '0'){
        ro64select(document.getElementsByClassName("team-box").item(k+1), 30);
    }
    k = k + 2;
}

for(var i = 22;i<26;i++){
    if(returnedbracket[i]== '1'){
        ro32select(document.getElementsByClassName("team-box").item(k), 30);
    }
    if(returnedbracket[i]== '0'){
        ro32select(document.getElementsByClassName("team-box").item(k+1), 30);
    }
    k = k + 2;
}

for(var i = 26;i<28;i++){
    if(returnedbracket[i]== '1'){
        ro16select(document.getElementsByClassName("team-box").item(k), 30);
    }
    if(returnedbracket[i]== '0'){
        ro16select(document.getElementsByClassName("team-box").item(k+1), 30);
    }
    k = k + 2;
}

k = 66;

for(var i = 28;i<36;i++){
    if(returnedbracket[i]== '1'){
        ro64select(document.getElementsByClassName("team-box").item(k), 66);
    }
    if(returnedbracket[i]== '0'){
        ro64select(document.getElementsByClassName("team-box").item(k+1), 66);
    }
    k = k + 2;
}

for(var i = 36;i<40;i++){
    if(returnedbracket[i]== '1'){
        ro32select(document.getElementsByClassName("team-box").item(k), 66);
    }
    if(returnedbracket[i]== '0'){
        ro32select(document.getElementsByClassName("team-box").item(k+1), 66);
    }
    k = k + 2;
}

for(var i = 40;i<42;i++){
    if(returnedbracket[i]== '1'){
        ro16select(document.getElementsByClassName("team-box").item(k), 66);
    }
    if(returnedbracket[i]== '0'){
        ro16select(document.getElementsByClassName("team-box").item(k+1), 66);
    }
    k = k + 2;
}

k = 96;

for(var i = 42;i<50;i++){
    if(returnedbracket[i]== '1'){
        ro64select(document.getElementsByClassName("team-box").item(k), 96);
    }
    if(returnedbracket[i]== '0'){
        ro64select(document.getElementsByClassName("team-box").item(k+1), 96);
    }
    k = k + 2;
}

for(var i = 50;i<54;i++){
    if(returnedbracket[i]== '1'){
        ro32select(document.getElementsByClassName("team-box").item(k), 96);
    }
    if(returnedbracket[i]== '0'){
        ro32select(document.getElementsByClassName("team-box").item(k+1), 96);
    }
    k = k + 2;
}

for(var i = 54;i<56;i++){
    if(returnedbracket[i]== '1'){
        ro16select(document.getElementsByClassName("team-box").item(k), 96);
    }
    if(returnedbracket[i]== '0'){
        ro16select(document.getElementsByClassName("team-box").item(k+1), 96);
    }
    k = k + 2;
}

for(var i = 56;i<62;i++){
    if(returnedbracket[i]== '1' && i == 56){
        eeselect(document.getElementsByClassName("team-box").item(28));
    }
    if(returnedbracket[i]== '0' && i == 56){
        eeselect(document.getElementsByClassName("team-box").item(29));
    }
    if(returnedbracket[i]== '1' && i == 57){
        eeselect(document.getElementsByClassName("team-box").item(94));
    }
    if(returnedbracket[i]== '0' && i == 57){
        eeselect(document.getElementsByClassName("team-box").item(95));
    }
    if(returnedbracket[i]== '1' && i == 58){
        eeselect(document.getElementsByClassName("team-box").item(58));
    }
    if(returnedbracket[i]== '0' && i == 58){
        eeselect(document.getElementsByClassName("team-box").item(59));
    }
    if(returnedbracket[i]== '1' && i == 59){
        eeselect(document.getElementsByClassName("team-box").item(124));
    }
    if(returnedbracket[i]== '0' && i == 59){
        eeselect(document.getElementsByClassName("team-box").item(125));
    }
    //switch here
    if(returnedbracket[i]== '1' && i == 60){
        ffselect(document.getElementsByClassName("team-box").item(60));
    }
    if(returnedbracket[i]== '0' && i == 60){
        ffselect(document.getElementsByClassName("team-box").item(61));
    }
    if(returnedbracket[i]== '1' && i == 61){
        ffselect(document.getElementsByClassName("team-box").item(64));
    }
    if(returnedbracket[i]== '0' && i == 61){
        ffselect(document.getElementsByClassName("team-box").item(65));
    }

    if(returnedbracket[i]== '1' && i == 61){
        ffselect(document.getElementsByClassName("team-box").item(64));
    }
    if(returnedbracket[i]== '0' && i == 61){
        ffselect(document.getElementsByClassName("team-box").item(65));
    }

    document.getElementById("finalchamp").innerHTML = returnedchamp;
    

}

