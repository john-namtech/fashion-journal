jQuery("document").ready(function(){
	jQuery('.d_update_featured_action').on('click', function(){
		var _this = jQuery(this);
		
		jQuery.ajax({
			type: 'post',
			url: ajaxurl,
			data: {
				action: _this.data('action'),
				id: _this.data('id'),
				val: _this.data('val')
			},
			beforeSend: function(){
				_this.addClass('fa-spin');
			},
			success: function(o){
				_this.data('val',o);
				_this.removeClass('fa-spin');
				if(o == 0) {
					_this.removeClass('fa-star-o').addClass('fa-star');
				} else {
					_this.removeClass('fa-star').addClass('fa-star-o');
				}
			}
		});
		
	});
});