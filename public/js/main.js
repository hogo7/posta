$(document).ready(function(){
   
    $("#loader").css("display", "none");
    $(".app").css("display", "inline");


    window.setTimeout(function() {
        $(".alert").fadeTo(2000,0).slideUp(1000, function(){
            $(this).remove();});},3000);
           
     $("#demo-editor-bootstrap").Editor(); 
});

