<html>
	<head>
		<title></title>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($){
				var dat = '';
				setInterval(function(){
					$.ajax({
						url: 'ajax.php',
						type: 'get',
						dataType: 'json',
						success: function(data){
							if(data.data && data.data != dat) {
								dat = data.data;
								$('div').html('');
								$('div').append(dat);
							}
						}
					});
				}, 500);
			});
		</script>
	</head>
	<body>
		<div></div>
	</body>
</html>