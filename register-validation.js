function validation()
	{
		var fname=document.getElementById('fname').value;
		var lname=document.getElementById('lname').value;
		var email=document.getElementById('email').value;
		var phone=document.getElementById('phone').value;
		var password=document.getElementById('password').value;
		var cpassword=document.getElementById('cpassword').value;
		var regix=/^[a-zA-Z]{3,10}$/
		var regix1=/^[a-zA-Z]([a-zA-Z1-9\.-]+)@([a-zA-Z]{5})\.([a-zA-Z]{2,3})$/
		var regix2=/^[1-9]{10}$/
		var regix3=/^[a-zA-Z1-9-\.@$]{6,10}$/;
		if(fname=="")
		{
			document.getElementById('message1').innerText="first name required";
		}
		else if(regix.test(fname)==false)
		{
			document.getElementById('message1').innerText="invalid first name";
		}   
		else
		{
			document.getElementById('message1').innerText="";
		}
		if(lname=="")
		{
			document.getElementById('message4').innerText="last name required";
		}
		else if(regix.test(lname)==false)
		{
			document.getElementById('message4').innerText="invalid last name";
		}
		else
		{
			document.getElementById('message4').innerText="";
		}
		if(email=="")
		 	{
		 		document.getElementById('message2').innerText="email required";
		 	}
		 	else if(regix1.test(email)==false)
		 	{
		 		document.getElementById('message2').innerText="invalid email";
		 	}
		 	else
		 	{
		 		document.getElementById('message2').innerText="";
		 	}
		 	 if(phone=="")
		 	{
		 		document.getElementById('message5').innerText="phone-no required";
		 	}
		 	else if(regix2.test(phone)==false)
		 	{
		 		document.getElementById('message5').innerText="invalid phone";
		 	}
		 	else
		 	{
		 		document.getElementById('message5').innerText="";
		 	}
		 	 if(password=="")
		 	{
		 		document.getElementById('message3').innerText="password required";
		 	}
		 	else if(regix3.test(password)==false)
		 	{
		 		document.getElementById('message3').innerText="invalid password";
		 	}
		 	else
		 	{
		 		document.getElementById('message3').innerText="";
		 	}
		 	 if(cpassword=="")
		 	{
		 		document.getElementById('message6').innerText="cpassword required";
		 	}
		 	else if(cpassword!=password)
		 	{
		 		document.getElementById('message6').innerText="cpassword not matched";
		 	}
		 	else
		 	{
		 		document.getElementById('message6').innerText="";
		 	}
	}