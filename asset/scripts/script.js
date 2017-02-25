  $(document).ready(function() {
    $('#body').load(function()
    {
        $(".col-md-4").hide();
        $('#post').show();
    });
        $('.carousel').carousel({
            interval: 5000
        }); 
        $('.carousel').carousel('cycle');
    
   $('#top-nav').onePageNav({
                 currentClass: 'active',
                 changeHash: true,
                 scrollSpeed: 500
            });


});



  // animation
$(window).scroll(function() {
    $('#about,.album,.blogevent ul li').each(function(){
    var elementPos = $(this).offset().top;

    var topOfWindow = $(window).scrollTop();
      if (elementPos < topOfWindow+400) {
        $(this).addClass("animated fadeInUp");
      }
    });


    $('h3,h4').each(function(){
    var elementPos = $(this).offset().top;

    var topOfWindow = $(window).scrollTop();
      if (elementPos < topOfWindow+500) {
        $(this).addClass("animated fadeInUp");
      }
    });


  });

$('#modal-save').on('click', function(){
  $.ajax({
    method:'POST',
    url:url,
    data:{body:$('#edit-post').val(), postId:'', _token:token}
       })
   .done(function(msg){
      console.log(msg['message']);
    });
});

$('.profile_detail').on('click', function(event){
  event.preventDefault();
  var my_body=event.target.textContent;
  //alert(my_body);
  $.ajax({
    method:'post',
    url:url,
    data:{body:my_body, _token:token}
  })
  .done(function(msg){
  console.log(msg['message']);
});

  $('#member_profile_modal').modal();
})

$('#all_member').on('click', function()
{
  $(".col-md-4").hide();
  $('#div_members').show();
})

$('#edit_lastname').on('click', function(){
  $('#last_name').prop('disabled', false);
});

$('#edit_username').on('click', function(){
  $('#username').prop('disabled', false);
});

$('#edit_firstname').on('click', function(){
  $('#first_name').prop('disabled', false);
});

$('#edit_password').on('click', function(){
  $('#password').prop('disabled', false);
});

$('#edit_surname').on('click', function(){
  $('#surname').prop('disabled', false);
});

$('#edit_phone').on('click', function(){
  $('#phone').prop('disabled', false);
});

$('#edit_dob').on('click', function(){
  $('#dob').prop('disabled', false);
});

$('#edit_mob').on('click', function(){
  $('#mob').prop('disabled', false);
});

$('#edit_yob').on('click', function(){
  $('#yob').prop('disabled', false);
});

$('#edit_email').on('click', function(){
  $('#email').prop('disabled', false);
});
$('#edit_state').on('click', function(){
  $('#state').prop('disabled', false);
});

$('#edit_faculty').on('click', function(){
  $('#faculty').prop('disabled', false);
});

$('#edit_department').on('click', function(){
  $('#department').prop('disabled', false);
});

$('#edit_level').on('click', function(){
  $('#level').prop('disabled', false);
});

$('#edit_photo').on('click', function(){
  $('#photo').prop('disabled', false);
});

$('#complaint_prompt').on('click', function(){
   $('#complaint').show();
});


function maindiv()
       {
        $(document).ready(function() {
         $('.col-md-10').hide();
         $('#maindiv').show();
       })
       }


       function addpost()
       {
        $(document).ready(function() {
         $('.col-md-10').hide();
         $('#add_postform').show();
       })
       }
       function editpost()
       {
        $(document).ready(function() {
         $('.col-md-10').hide();
         $('#edit_postform').show();
       })
       }

       function deletepost()
       {
        $(document).ready(function() {
         $('.col-md-10').hide();
         $('#delete_postform').show();
       })
       }

       function approvepost()
       {
        $(document).ready(function() {
         $('.col-md-10').hide();
         $('#approve_postform').show();
       })
       }