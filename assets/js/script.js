$(document).ready(function () {

    // $(function(){
    //     var dtToday = new Date();
        

        
    //     var month = dtToday.getMonth()+1;
    //     var day = dtToday.getDate();
    //     var year = dtToday.getFullYear();
    //     if(month < 10)
    //         month = '0' + month.toString();
    //     if(day < 10)
    //         day = '0' + day.toString();
        
    //     var maxDate = year + '-' + month + '-' + day;
    //     $('#txtDate').attr('max', maxDate);                                                   
    // });


    $('.username').keypress(function (evt) { 
    
    
           var inputValue = (evt.which) ? evt.which : evt.keyCode;
           if(!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)  && inputValue != 46) { 
            evt.preventDefault(); 
        }
        

    });


    $('.height').keypress(function (evt) { 
    
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode != 46 && charCode > 31 
        && (charCode < 48 || charCode > 57))
        return false;
  
        return true;
         
   

    });

    
    $('.weight').keypress(function (evt) { 
    
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode != 46 && charCode > 31 
        && (charCode < 48 || charCode > 57))
        return false;
  
        return true;
         
   

    });

    
    $('.ph-no').keypress(function (evt) { 
    
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode != 46 && charCode > 31 
        && (charCode < 48 || charCode > 57))
        return false;
  
        return true;
         
   

    });




});        