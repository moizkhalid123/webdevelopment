<?php include('header.php');
?>
	
<!-- slider start -->
<?php require_once('slider.php');
?>
<!-- slider end -->












<?php require_once('footer.php');
?>
	<script type="text/javascript">
		var number = -20;
		if (number >= 33 && number <= 39){
			console.log("your Grade is E");
		}else if (number >= 40 && number <= 49){
			console.log("your Grade is D");

		}else if (number >= 50 && number <= 59){
			console.log("your Grade is C");

		}else if (number >= 60 && number <= 69){
			console.log("your Grade is B");

		}else if (number >= 70 && number <= 79){
			console.log("your Grade is A");

		}else if (number >= 80 && number <= 100){
			console.log("your Grade is A+");

		}else{
			console.log('invalid');
		}




	</script>	

</body>

</html> 