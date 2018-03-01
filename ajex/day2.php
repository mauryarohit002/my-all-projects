<form id="formdata">
	<input type="text" name="username">
	<input type="password" name="userpass">
	<input type="button" class="btn" value="enter">

</form>
<p id="msg">HELLO</p>
<script src="jquery-3.2.1.min.js"></script>
<script >
	$(function(){
		$(".btn").click(function(){
			//alert("test");
			rec= $("#formdata").serialize();
			console.log(rec);
			$.ajax({
				type:"post",
				data:rec,
				url:"form_action.php",
				success:function(xyz){
					$("#msg").html(xyz);
				},
				error:function(errmsg){
					console.log(errmsg);
				}
			})
		})
	})

</script>