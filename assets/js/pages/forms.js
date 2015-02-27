
$(function() {
	$('.summernote').summernote({
	  height: 200,
	  toolbar: [
	    ['style', ['style']], // no style button
	    ['style', ['bold', 'italic', 'underline']],
	    ['para', ['ul', 'ol', 'paragraph']],
	    ['help', ['help']],
	    //['insert', ['picture', 'link']], // no insert buttons
	    //['table', ['table']], // no table button
	    //['help', ['help']] //no help button
	  ]
	});
});
