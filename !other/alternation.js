// var mynumbers=new Array(1,2,3,6,8,9,10,12);
// var mynumbers=new Array(1,2,3,6,8,9,10,12,14);
var mynumbers=new Array(1,2,3,4,5,6,7,8,9,10,11,12);
var endgroupp = mynumbers[1];
var first = mynumbers[0];
// console.log("Начало первой группы: "+mynumbers[0]);
var str=mynumbers[0];
for(var i = 1; i < mynumbers.length; i++) {    
    if(mynumbers[i] - mynumbers[i-1] != 1) {
         if(first !=endgroupp) {str=str+"-"+endgroupp;}       
        // console.log("Конец группы: "+endgroupp);
        // console.log("Начало следующей группы: "+mynumbers[i]);
        first=mynumbers[i];
        str=str+","+mynumbers[i];
        
    }
       endgroupp=mynumbers[i];
}

if(first !=endgroupp){str=str+"-"+endgroupp;}

console.log(str);
