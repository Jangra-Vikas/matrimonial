var $j = jQuery.noConflict();
$(function() {
  $j( ".datepicker" ).datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: 'yy-mm-dd',
    yearRange: '1990:2030'
  });
  $('#Upload').click(function(){ 
    $('#imgupload').trigger('click');
  });
	$('#Upload1').click(function(){ 
    $('#imgupload1').trigger('click');
  });
	$('#Upload2').click(function(){ 
    $('#imgupload2').trigger('click');
  });
	$('#Upload3').click(function(){ 
    $('#imgupload3').trigger('click');
  });
	$('#Upload4').click(function(){ 
    $('#imgupload4').trigger('click');
  });
	$('#Upload5').click(function(){ 
    $('#imgupload5').trigger('click');
  });
	$('#Upload6').click(function(){ 
    $('#imgupload6').trigger('click');
  });
	$('#Upload7').click(function(){ 
    $('#imgupload7').trigger('click');
  });
	$('#Upload8').click(function(){ 
    $('#imgupload8').trigger('click');
  });
	$('#Upload9').click(function(){ 
    $('#imgupload9').trigger('click');
  });
	$('#Upload0').click(function(){ 
    $('#imgupload0').trigger('click');
  });
});
