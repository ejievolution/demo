<!DOCTYPE html> 
<html>
<head>
	<title> DEMO </title>
	<style type="text/css" media="screen">

		@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300,600);
		* {
		  margin: 0;
		  padding: 0;
		}
		body {
		  background: #111;
		  color: #fff;
		  font-family: 'Open sans', sans-serif;
		  font-weight: 300;
		  font-size: 20pt;
		}
		a {
		  color: #fff;
		  text-decoration: none;
		}

		.menu {
		  width: 570px;
		  margin: 30px auto;
		}
		.menu a {
		  width: 180px;
		  line-height: 180px;
		  display: block;
		  margin: 5px;
		  text-align: center;
		  float: left;
		  opacity: 0.3;
		}
		.yellow { background: #fdd22a; }
		.blue { background: #009fe3; }
		.purple { background: #574696; }
		.orange { background: #ee7202; }
		.pink { background: #e61c67; }
		.green { background: #96c11f; }

	</style>
	<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/custom.js" type="text/javascript"></script>
	<script>
		//  $(document).ready(function() {

		//   $('.menu a').hover(function() {
		//     $(this).stop().animate({
		//        opacity: 1
		//      }, 200);
		//         }, function() {
		//    $(this).stop().animate({
		//     opacity: 0.3
		//      }, 200);
		//   });

		// });
     
	</script>
</head>
<body>
<?php
	$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
	$base_url .= "://".$_SERVER['HTTP_HOST'];
	$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
?>

	<div class="menu">
        <a target="_blank" class="yellow" href="<?php echo $base_url; ?>feed">FEED & RSS</a>
        <a target="_blank" class="green" href="<?php echo $base_url; ?>selectajax">Select Ajax</a>
        <!-- <a target="_blank" class="pink" href="#">Kureshki</a> -->
        <!-- <a target="_blank" class="purple" href="#">Themes</a> -->
        <!-- <a target="_blank" class="blue" href="#">Madenca</a> -->
        <!-- <a target="_blank" class="orange" href="#">Contact</a> --> 
    </div>
</body>
</html>