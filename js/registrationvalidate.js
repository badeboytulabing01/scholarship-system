function valReg(){





   //end of firstname


      if (frmReg.fname.value == "") 
	{
		Swal.fire({
			  background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
               allowOutsideClick: false,
               allowEscapeKey:false,
               text: 'Required to write your First Name'       
             })
		frmReg.fname.focus();
		return false;
	}

   //end of username


      if (frmReg.mname.value == "") 
	{
		Swal.fire({
			  background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               allowOutsideClick: false,
              allowEscapeKey:false,
               title: 'ERROR...',
               text: 'Required to write your Middle Name'       
             })
		frmReg.mname.focus();
		return false;
	}

   //end of contact


 
    


	if (frmReg.password.value == "") 
	{
		Swal.fire({
			background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
               allowOutsideClick: false,
              allowEscapeKey:false,
              text: 'Required to insert your password'       
             })
		frmReg.password.focus();
		return false;
	}

   /*end of password*/


	if (frmReg.cpass.value == "")
	 {
		Swal.fire({
			background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
               allowOutsideClick: false,
              allowEscapeKey:false,
               text: 'Required to Confirm your Password'       
             })
		frmReg.cpass.focus();
		return false;
	}

	/*end of confirm password*/

	if ((frmReg.password.value).length < 8)
	 {
		Swal.fire({
			background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
               allowOutsideClick: false,
               allowEscapeKey:false,
               text: 'The Password Must be 8 and up Long'     
             })
		frmReg.password.focus();
		return false;
	}

	

	if (frmReg.password.value != frmReg.cpass.value)
	 {
		Swal.fire({
			background: '#0B7636',  
            color: '#fff', 
              icon: 'error',
              title: 'ERROR...',
              allowOutsideClick: false,
              allowEscapeKey:false,
              text: 'Your Password Mismatched!'     
             })
		frmReg.password.value="";
		frmReg.cpass.value="";
		frmReg.password.focus();
		return false;
	}




	return true;

}


 function validateForm(event) {
  event.preventDefault(); // Ito ay para maiwasan ang pagsu-submit ng form at mag-refresh ang page


  // Kunin ang mga input field values

  var password = document.getElementById('password').value;
  var email = document.getElementById('email').value;
  var lastname = document.getElementById('lastname').value;
  var fname = document.getElementById('fname').value;
  var mname = document.getElementById('mname').value;



  // Simpleng validation
  if (email === '' || lastname === '' || fname === '' || mname === '') {
    alert('Please fill in all fields.');
    return;
  }

  // Numeric validation
  if (!isNumeric(password)) {
     Swal.fire({
      background: '#0B7636',  
            color: '#fff', 
              icon: 'error',
              title: 'ERROR...',
              allowOutsideClick: false,
              allowEscapeKey:false,
              text: 'Password should contain at least one numeric digit.'     
             })
    return;
  }

  // Uppercase and lowercase validation
  if (!hasUppercaseLowercase(password)) {
    Swal.fire({
      background: '#0B7636',  
            color: '#fff', 
              icon: 'error',
              title: 'ERROR...',
              allowOutsideClick: false,
              allowEscapeKey:false,
              text: 'Password should contain both uppercase and lowercase characters.'     
             })
   
    return;
  }

   if (!validateEmail(email)) {
    alert('Please enter a valid email address.');
    return;
  }


   if (!validateName(lastname)) {
      Swal.fire({
      background: '#0B7636',  
            color: '#fff', 
              icon: 'error',
              title: 'ERROR...',
              allowOutsideClick: false,
              allowEscapeKey:false,
              text: 'Last Name Must not contain numeric characters.'     
             })
    return;
  }


   if (!validatelast(fname)) {
    Swal.fire({
      background: '#0B7636',  
            color: '#fff', 
              icon: 'error',
              title: 'ERROR...',
              allowOutsideClick: false,
              allowEscapeKey:false,
              text: 'First Name Must not contain numeric characters.'     
             })
    return;
  }


   if (!validatemname(mname)) {
     Swal.fire({
      background: '#0B7636',  
            color: '#fff', 
              icon: 'error',
              title: 'ERROR...',
              allowOutsideClick: false,
              allowEscapeKey:false,
              text: 'Middle Name Must not contain numeric characters.'     
             })
    return;
  }



  // Dito ay maaari mong magdagdag ng iba pang validation checks gaya ng email format, password length, atbp.
  
  // Kung na-validate na ang form, maaari mo ring ipasa ang data sa server o gawin ang ibang mga kailangang hakbang.
  // Halimbawa:
  var formData = {
    email: email,
    password: password,
    lastname: lastname,
    fname: fname,
    mname: mname



  };

  console.log(formData); // Ito ay isang halimbawa lamang, maaari mong ipasa ang data sa server gamit ang AJAX o iba pang paraan.

  // Maari kang magdagdag ng iba pang code o logic na kailangan mo pagkatapos ng validation.
}

function validateEmail(email) {
  var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return re.test(email);
}

function isNumeric(value) {
  return /\d/.test(value);
}

function hasUppercaseLowercase(value) {
  return /[a-z]/.test(value) && /[A-Z]/.test(value);
}

function validateName(lastname) {
  var regex = /^[a-zA-Z\s]*$/; // Regular expression na nag-a-allow ng mga letra at espasyo lamang
  return regex.test(lastname);
}
function validatelast(fname) {
  var regex = /^[a-zA-Z\s]*$/; // Regular expression na nag-a-allow ng mga letra at espasyo lamang
  return regex.test(fname);
}

function validatemname(mname) {
  var regex = /^[a-zA-Z\s]*$/; // Regular expression na nag-a-allow ng mga letra at espasyo lamang
  return regex.test(mname);
}





