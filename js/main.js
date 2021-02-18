$(document).ready(function(){
    console.log( "JS on ready function has loaded." );
    // Prevent form from resetting the page during debugging ... do I need to remove this???
    $("#form_id").submit(function(e) {
        e.preventDefault();
        var formValues = $(this).serialize();        
        // Send the form data using post
        console.log( 'Serialized values are: ' + formValues );
        $.post("checkPass.php", formValues, function(data){
            // Display the returned data in browser
            console.log( data );
            setTimeout(function(){ window.location = 'sched.php'; }, 1000 );
        });
    });
});
