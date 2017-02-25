/*var Id=0;
var postbodyelement=null;

$('.edit').on('click', function(event){
	event.preventDefault();
	postbodyelement=event.target.parentNode.parentNode.childNodes[1];
	var getbody=postbodyelement.textContent;
	Id=event.target.parentNode.parentNode.dataset['postid'];
	$('#edit-post').val(getbody);
	$('#edit-modal').modal();

});

$('#modal-save').on('click', function(){
	$.ajax({
   	method:'POST',
   	url:url,
   	data:{body:$('#edit-post').val(), postId:Id, _token:token}
   	   })
   .done(function(msg){
      $(postbodyelement).text(msg['new_body']);
      $('#edit-modal').modal('hide');
   	});
});

$('#member_profile').on('click', function(){
//$('#edit-post').val(getbody);
   //$('#member_profile_modal').modal();
   alert('okay');
});
*/