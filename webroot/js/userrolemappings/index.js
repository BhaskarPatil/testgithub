$(document).ready(function(){
    $("#search").click(function(){
        $.ajax({
            type: "GET",
            url: "users-by-username/"+$("#username").val(),
            context: document.body
          }).done(function(data) {
           if(data.data.length){
            $('.search_user').text(data.data[0].username);
           $('.search_name').text(data.data[0].first_name+" "+data.data[0].middle_name+" "+data.data[0].last_name);
           $('.search_email').text(data.data[0].email);
           $('.search_contact').text(data.data[0].phone_number);
           $('.give_access').attr('data',data.data[0].id);           
           //console.log(data.data);
          $(".search_result").removeClass('hidden');
          $(".bad_result").addClass('hidden');
           }else{
            $(".bad_result").removeClass('hidden');
            $(".search_result").addClass('hidden');
           }
          });
    });
    $(".give_access").click(function(){
      $.ajax({
          type: "POST",
          url: "give-access",
          data:{'user_id':$(this).attr('data')},
          context: document.body
        }).done(function(data) {        
            swal(data.message);
            setTimeout(function () {
              window.location.reload()
          }, 3000);
           
       
        }).fail(function(data) {      
          swal(data.responseJSON.message);
        })
      });
      $(".remove_access").click(function(){
        if(! confirm('Are you sure to delete')){
          return;
        }
        $.ajax({
            type: "DELETE",
            url: $(this).attr('data'),
            context: document.body
          }).done(function(data) {        
             swal(data.message);
             setTimeout(function () {
              window.location.reload()
          }, 3000);
         
          }).fail(function(data) {      
            swal(data.message);
          })
        });
});