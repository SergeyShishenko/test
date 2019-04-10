var mynumbers=new Array(1,2,3,6,8,9,10,12);
console.log("Начало первой группы: "+mynumbers[0]);
for(var i = 1; i < mynumbers.length; i++) {
    if(mynumbers[i] - mynumbers[i-1] != 1) {
        console.log("Начало следующей группы: "+mynumbers[i]);
        // break;
    }
}