$(function(){

  $("#create_new_page_link").click(function(){
    new_page_id = '';
    $.post('/pages/create','',function(data){
       
       new_page_id = data['new_page_id'];
       
       $("#create_new_page_link").after('<span id="new_page_notification"><strong>New page created!</strong></span>');
       $("#new_page_notification").fadeOut('slow');
       $('#pages_list').append(
        '<li id="page_'+new_page_id+'"><a href="/pages/show?id='+new_page_id+'">View</a> <a href="/pages/edit?id='+new_page_id+'">Edit</a> <a href="/pages/delete?id='+new_page_id+'">Delete</a></li>' 
       );
    }, 'json');
    alert(' '+new_page_id);
    $("#page_"+new_page_id).effect("highlight", {}, 3000);

    return false;
    
  });

});

