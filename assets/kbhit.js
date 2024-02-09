//Function 1
        $(document).ready(function()
         {
            $('#bn').on('keypress', function(event)
             {
                var charCode = event.which ? event.which : event.keyCode;

                // Allowing A-Z, a-z, and 0-9 based on ASCII values
                if (!(charCode >= 48 && charCode <= 57) && // 0-9
                    !(charCode >= 65 && charCode <= 90) && // A-Z
                    !(charCode >= 97 && charCode <= 122) &&
                    !(charCode != 32)) // a-z
                    { 
                    event.preventDefault();
                    window.alert('Please Enter only AlphaNumeric Value');
                    }
            });
        });


//Function 2
        $(document).ready(function()
         {
            $('#phn').on('keypress', function(event)
             {
                var charCode = event.which ? event.which : event.keyCode;

                // Allowing A-Z, a-z, and 0-9 based on ASCII values
                if (!(charCode >= 48 && charCode <= 57) && // 0-9
                    !(charCode >= 65 && charCode <= 90) && // A-Z
                    !(charCode >= 97 && charCode <= 122) ) // a-z
                    { 
                    event.preventDefault();
                    window.alert('Please Enter only Numeric Value');
                    }
            });
        });

//Function 3
$(document).ready(function()
{
   $('#web').on('keypress', function(event)
    {
       var charCode = event.which ? event.which : event.keyCode;

       // Allowing A-Z, a-z, and 0-9 based on ASCII values
       if (!(charCode >= 48 && charCode <= 57) && // 0-9
           !(charCode >= 65 && charCode <= 90) && // A-Z
           !(charCode >= 97 && charCode <= 122) &&
           !(charCode == 46) ) // a-z
           { 
           event.preventDefault();
           window.alert('Please Enter only Website Value');
           }
   });
});



