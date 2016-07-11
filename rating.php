
http://stackoverflow.com/questions/1987524/turn-a-number-into-star-rating-display-using-jquery-and-css<html>
<head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
	<script type="text/javascript">
   		$(function() {    		
			$('input[type=submit]').click(function() {
				$('p').html('<span class="stars">'+parseFloat($('input[name=amount]').val())+'</span>');
				$('span.stars').stars();
			});    		
			$('input[type=submit]').click();
		});

		$.fn.stars = function() {
			return $(this).each(function() {
				$(this).html($('<span />').width(Math.max(0, (Math.min(5, parseFloat($(this).html())))) * 16));
			});
		}
	</script>
	<style type="text/css">
		span.stars, span.stars span {
			display: block;
			background: url(stars.png) 0 -16px repeat-x;
			width: 80px;
			height: 16px;
		}
	
		span.stars span {
			background-position: 0 0;
		}
	</style>
</head>
<body>

	<input type="text" name="amount" />
	<input type="submit" value="update">
<p>
   <span class="stars"></span></p>

</body>
</html>

