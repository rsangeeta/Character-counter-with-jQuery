<!DOCTYPE html>
<html>
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
				<script type="text/javascript" src="jquery-1.9.1.js"></script>
				<script type="text/javascript" src="srcharactercounter.js"></script>
		</head>
		<body>

		<textarea name="description" cols="50" rows="5" id="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</textarea>
		<div style="color:#a94442"><span class="characterRemain">160</span> Characters remain</div>
		<script>
			$(document).ready(function () {
			
				$('#description').srcount({
                        infodiv: '.characterRemain',
                        maxCount: 140,
                });
			})
        </script>
		
		</body>
</html>