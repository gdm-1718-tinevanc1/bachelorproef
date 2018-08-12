// require('./bootstrap');
require('./materialize.js');
require('./charts.js');


      
$(document).ready(function(){
  $('.dropdown-trigger').dropdown({constrainWidth: false, coverTrigger: false, belowOrigin: false});

  $('.fixed-action-btn').floatingActionButton();

  $('.collapsible').collapsible();
});
    


var i=$('#add').val();  
$('#add').click(function(){  
    i++;  
    $('#dynamic_field').append('<div id="row'+i+'"><input type="text" class="form-control" id="characDiseases" name="characDiseases[]" /><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove right"><i class="fa fa-minus"></i></button></div>');  
});  


$(document).on('click', '.btn_remove', function(){  
    var button_id = $(this).attr("id");   
    $('#row'+button_id+'').remove();  
}); 