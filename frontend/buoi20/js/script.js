$('button').click(function (e) { 
   $.ajax({
    url: 'server.php'
   })
   .done(function(data){
    $('.result').html(data);
    
    
    //console.log("seccess");
   })
   .fail(function(){
    //console.log("error");
   })
   .always(function(){
    //console.log("complete");
   })
});



