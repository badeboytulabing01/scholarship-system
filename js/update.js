function valReg(){



   if (upReg.new_name.value == "") 
	{
		Swal.fire({
			  background: '#0B7636',  
              color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
               allowOutsideClick: false,
               allowEscapeKey:false,
               text: 'Required to write your Last Name'       
             })
		upReg.new_name.focus();
		return false;
	}

   //end of firstname


      if (upReg.new_lasname.value == "") 
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
		upReg.new_lasname.focus();
		return false;
	}

   //end of username


      if (upReg.new_middle.value == "") 
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
		upReg.new_middle.focus();
		return false;
	}

   //end of contact


    if (upReg.new_username.value == "") 
	{
		Swal.fire({
			background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
                allowOutsideClick: false,
                 allowEscapeKey:false,
               text: 'Required to write you username'       
             })
		upReg.new_username.focus();
		return false;
	}

   //end of email


    if (upReg.new_email.value == "") 
  {
    Swal.fire({
      background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
                allowOutsideClick: false,
                 allowEscapeKey:false,
               text: 'Required to write your Email'       
             })
    upReg.new_email.focus();
    return false;
  }

   //end of email
   
    


	if (upReg.new_pass.value == "") 
	{
		Swal.fire({
			background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
               allowOutsideClick: false,
              allowEscapeKey:false,
              text: 'Whether you want to fill out or not, you need to enter a Password '       
             })
		upReg.new_pass.focus();
		return false;
	}

	/*end of confirm password*/

	if ((upReg.new_pass.value).length < 8)
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
		upReg.new_pass.focus();
		return false;
	}

	return true;

}