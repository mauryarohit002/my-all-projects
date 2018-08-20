index page
<?php 
// $this->load->helper('html');
// echo br(3);
// $arr=array(100,200,30);
// // print_r($arr);
// pre($arr);
//  echo base_url();
// css("test");
// js("test");
// pre($this);
 ?>

<br/>
<a href="<?php echo ctrl('about'); ?>">About</a>
<br/>
<a href="<?php echo ctrl('service'); ?>">service</a>
<br/>
<a href="<?php echo ctrl('product/jeens/1000'); ?>">product</a>

<!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url().'assets/css/test.css' ?>   ">
<script type="text/javascript" src="<?php //echo base_url().'assets/js/test.js' ?> "></script>
 -->
<!-- <form method="post" action="<?php //echo ctrl('form_action'); ?>">
	<input type="" name="x1">
	<input type="" name="x2">
	<input type="submit" >

</form>-->
<?php 
echo form_open(ctrl('form_action'));
echo form_input("x1","");
echo form_input("x2","");
echo form_submit("","ENTER");
echo form_close();



 ?>

<form id="formdata">
	<input type="" name="x1">
	<input type="" name="x2">
	<input type="button" value="add" class="add_data" />

</form>
<div class="err"></div>
<?php 
js("jquery");
// js("test");
 ?>
 <script >
 	$(function(){
 		$(".add_data").click(function(){
 			$.ajax({
 				type:"post",data:$("#formdata").serialize(),url:"<?php echo ctrl('form_action'); ?>",
 				success:function(res){
 					$(".err").html(res);
 				}
 			})
 		})
 	})
 </script>




