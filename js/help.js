$(function(){
	$('a[data-help]').click(function(){
		if ($('.help.alert').length == 0){
			help = $(this);
			$.ajax({
				url: '<?php echo url() ?>'+help.data('help'),
				dataType: 'text',
				success: function(data){
					$('#alerts').append('<div class="col-12">\
											<div class="help alert alert-info fade in">\
												<button data-dismiss="alert" class="close" type="button">×</button>\
												<h4 class="alert-heading"><?php echo icon('far fa-life-ring').' '.$this->lang('Aide') ?></h4>\
												'+data+'\
											</div>\
										</div>')
				}
			});
		}
		return false;
	});
});
