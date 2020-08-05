window.addEventListener("load", function(){
    
    //Social networks links
    let toolstips = document.getElementsByClassName('toolstips');

    console.log(toolstips.length);

    //Loop over toolstips elements in frontend for aply tooltip boostrap function
    for(i=0;i<=toolstips.length;i++){
        toolstips[i].addEventListener("mouseover" , function(){
        
            $('[data-toggle="tooltip"]').tooltip();
        
        });
    }

    /*
    for(tooltip in toolstips){
        
        toolstips[tooltip].addEventListener("mouseover" , function(){
        
            $('[data-toggle="tooltip"]').tooltip();
        
        });
        
        
    }
    */

});