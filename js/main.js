$(document).ready(function(){
    console.log( "JS on ready function has loaded." );
    // Button that should call Ajax to check the password user has submitted
    $("button").click(function(){
        console.log( "????" );
    });
    // Prevent form from resetting the page during debugging ... do I need to remove this???
    $("#form_id").submit(function(e) {
            e.preventDefault();
    });
});
