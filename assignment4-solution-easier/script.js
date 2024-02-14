var arr = new Array("harsh","Jivan", "sivan", "Jarnail");
for(i=0; i<arr.length; i++){
    for(j=0; j<i; j++){
        if((arr[i][j] == "J") || (arr[i][j] == "j")){
            console.log("GoodBye ", arr[i])
        }else{
            console.log("Hello ", arr[i])
        }
    }
}
