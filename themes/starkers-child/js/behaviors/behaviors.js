jQuery(document).ready(function($) {
  // Code that uses jQuery's $ can follow here.
	Js.Behaviors.equalHeights = function(container){
		var children = container.children(),
		currentTallest = 0;

	//	children.each(function(){
	//		$(this).height(tallest());
	//	});

		console.log(tallest());

		$(window).load(function(){
			if($(window).width() > 480) {
				children.each(function(){
					$(this).height(tallest());
				});
			}
		});

		$(window).resize(function(){
			if($(window).width() > 720) {


				children.each(function(){
					$(this).outerHeight('auto');
					$(this).height(tallest());
				});

			} else {
				children.each(function() {
					$(this).outerHeight('auto');
				});
			}
		});

	//	$(window).resize(function(){
	//		children.each(function(){
	//			$(this).height(tallest());
	//		});
	//	});

		function tallest() {
			children.each(function(){
				if ($(this).height() > currentTallest) {
					currentTallest = $(this).height();
				}
			});
			return currentTallest;
		}
	}


	Js.Behaviors.flexslider = function(container){
		container.flexslider({
				controlNav: false,
				directionNav: false
		});
	}

	Js.Behaviors.maxImageWidth = function(container){
		container.children().maxImageWidth();
	}

	Js.Behaviors.freeSample = function(container) {
		console.log(container);
		$(container).submit(function(e){
			e.preventDefault();

			var formData = {
				'first_name'              : $('input[name="first_name"]').val(),
				'last_name'               : $('input[name="last_name"]').val(),
				'company_name'            : $('input[name="company_name"]').val(),
				'email'            			  : $('input[name="email"]').val(),
				'phone_number'            : $('input[name="phone_number"]').val(),
				'address'            		  : $('input[name="address"]').val(),
				'city'              			: $('input[name="city"]').val(),
				'state'             		  : $('select[name="state"]').val(),
				'zip_postal_code'					: $('input[name="zip_postal_code"]').val(),
				'country'            		  : $('input[name="country"]').val(),
				'product_type'            : $('select[name="product_type"]').val()
			}

			$.ajax({
					type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
					url         : '/wp-content/themes/starkers-child/_order-free-sample.php', // the url where we want to POST
					data        : formData // our data object
			}).done(function(data) {
			}).success(function(data){
				$(container).html("Thank you for your submission.");
			})
		});
	}
});
