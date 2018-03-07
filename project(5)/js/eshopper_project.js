// alert("test1");
$(function(){
	// alert("test2");
	/*******************************************/
	$(".btn_register").click(function(){
		// alert("test3");
		rec = $("#register_form").serialize();
		// alert(rec);
		$.ajax({
			type:"post",data:rec,url:"register-action.php",
			success:function(response){
				$(".err_register").html(response);
			},
			error:function(errmsg){
				console.log(errmsg);
			},
		})
	})
	/*******************************************/
	$(".btn_login").click(function(){
		// alert("test3");
		rec = $("#login_form").serialize();
		// alert(rec);
		$.ajax({
			type:"post",data:rec,url:"login-action.php",
			success:function(response){
				if(response == "ok"){
					window.location.href="index.php";
				}
				else{
					$(".err_login").html(response);
				}
			},
			error:function(errmsg){
				console.log(errmsg);
			},
		})
	})
	/*******************************************/
	$(".btn_password").click(function(){
		// alert("test3");
		rec = $("#password_form").serialize();
		// alert(rec);
		$.ajax({
			type:"post",data:rec,url:"password-action.php",
			success:function(response){
				$(".err_password").html(response);
			},
			error:function(errmsg){
				console.log(errmsg);
			},
		})
	})
	/*******************************************/
	$(".filter_brand").click(function(aobj){
		// alert(11)
		// console.log(aobj);
		aobj.preventDefault();

		rec= $(this).attr("for");
		// alert(rec);

		$.post("filter_brand_action.php" ,"xyz="+rec , function(response){
			// console.log(response);
			$(".padding-right").html(response);
		})
	});
	/*******************************************/
	// $(".add-in-cart").click(function(aobj){
	$(document).on("click",".add-in-cart",function(aobj){	
		// alert(11)
		// console.log(aobj);
		aobj.preventDefault();

		rec= $(this).attr("for");
		// alert(rec);

		$.post("cart_action.php" ,"xyz="+rec , function(response){
			// console.log(response);
			alert(response);
			window.location.reload();

		})
	});
	/*******************************************/
	$(".delete-from-cart").click(function(aobj){
		aobj.preventDefault();

		rec= $(this).attr("for");
		// alert(rec);
		$.post("delete_cart_action.php" ,"xyz="+rec , function(response){
			// console.log(response);
			if(response == "ok"){
				window.location.reload();
			}
		})
	})
	/*******************************************/

});