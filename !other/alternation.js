// var prod=new Array(1,2,3,6,8,9,10,12);
// var prod=new Array(1,2,3,6,8,9,10,12,14);
// var prod=new Array(1,2,3,4,5,6,7,8,9,10,11,12);
var prod=new Array(1,5,6,7,9,10,11,12,15,16,18);
var endgroupp = prod[1];
var first = prod[0];
console.log("Начало первой группы: "+prod[0]);
var str=prod[0];
for(var i = 1; i < prod.length; i++) {    
    if(prod[i] - prod[i-1] != 1) {
         if(first != endgroupp)
          {             
            if(first == (endgroupp-1))

             {str = str+","+endgroupp;}

             else if (i!=1){str = str+"-"+endgroupp;}
          }  
        console.log(str);     
        console.log("Конец группы: "+endgroupp);
        console.log("Начало следующей группы: "+prod[i]);
        first=prod[i];
        str=str+","+prod[i];
        
    }
       endgroupp=prod[i];
}

if(first != endgroupp)
          {             
            if(first == (endgroupp-1))
             {str = str+","+endgroupp;}
             else{str = str+"-"+endgroupp;}
          } 

console.log(str);
