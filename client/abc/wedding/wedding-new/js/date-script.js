 $( function() {
    $( "#datepicker, #weddingdate, #taskdate" ).datepicker({
    	 

    });
    $( '#ui-datepicker-div' ).before('<div class="default-skin"></div>');
    $( '#ui-datepicker-div' ).appendTo( '.default-skin' ).contents();
  });