check_validation=function(){
	// alert("test");
	// console.log(document);
	// console.log(document.getElementById("uname"));
	txt_name=document.getElementById("uname").value;
	// alert(txt_name);
	ans_name=validate_alpha_space(txt_name);
	// alert(ans_name);
	if(!ans_name){
		msg="invalid name";
	}
	else{
		txt_mobile=document.getElementById("umobile").value;
		// alert(txt_mobile);
		ans_mobile=validate_mobile(txt_mobile);
		// alert(ans_mobile);
		if(!ans_mobile){
			msg="invalid mobile";
		}
		else{
			txt_dob=document.getElementById("udob").value;
			ans_dob=validate_dob(txt_dob);

			if(!ans_dob){
				msg="invalid Date of Birth";
			}
			else{
				txt_username=document.getElementById("username").value;
				ans_username=validate_username(txt_username);

				if(!ans_username){
					msg="invalid Username";
				}
				else{
					txt_uemail=document.getElementById("uemail").value;
					ans_uemail=validate_email(txt_uemail);

					if(!ans_uemail){
						msg="invalid Email Id";
					}
					else{
						txt_upass=document.getElementById("upass").value;
						ans_upass=validate_password(txt_upass);

						if(!ans_upass){
							msg="invalid password";
						}
						else{
							txt_ucpass=document.getElementById("ucpass").value;
							if(txt_upass!=txt_ucpass){
								msg="confirm password invalid";
							}
							else{
								if(sum!=document.getElementById("rand_txt").value){
									msg="Captcha invalid";
								}
								else{
									msg="ok";
								}
							}
						}
					}
				}

			}

		}
	}	
	// alert(msg);
	document.getElementById("errormsg").innerHTML=msg;
}

get_random_number=function(){
	// alert(1);
	// console.log(10*Math.random());

	x1=Math.round(10*Math.random());
	x2=Math.round(10*Math.random());
	// console.log(x1);
	sum=x1+x2;
	// console.log(sum);
	str="Enter "+x1 + " + " +x2;
	// console.log(str);
	spanData=document.querySelector("#rand_data");
	// console.log(spanData);
	spanData.innerHTML=str;

}
