// alert(2);
var path="http://localhost/rohit/code_ingneter/index.php/sms/"
$(document).ready(function(){
  // alert(1);
  $(".btn_register").click(function(){
    // alert(21);
    $.ajax({
      type:"post",
      data:$("#register_form").serialize(),
      url:path+"register_action",
      success:function(res){
        // console.log(res);
        $(".msg").html(res);
      },
      error:function(errmsg){
        console.log(errmsg);

      }
    })
  })
  $(".btn_login").click(function(){
    // alert(2);
    $.ajax({
      type:"post",
      data:$("#login_form").serialize(),
      url:path+"login_action",
      success:function(res){
        // console.log(res);
        if(res==1){
          window.location.href=path;
        }
        else{
        $(".msg").html(res);
     }
      },
      error:function(errmsg){
        console.log(errmsg);

      }
    })
  })
})