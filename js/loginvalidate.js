	function valLog(){
		if (frmLog.userLog.value == "") {
			Swal.fire({
			   background: '#0B7636',  
               color: '#fff', 
               icon: 'error',
               title: 'Error',
               text: 'Required to write Username'
                    
             })
			frmLog.userLog.focus();
			return false;
		}	
		

		if (frmLog.password.value == "") {
			Swal.fire({
			  background: '#0B7636',  
               color: '#fff', 
               icon: 'error',
               title: 'Error',
               text: 'Required to write a the correct Password',       
             })
			frmLog.password.focus();
			return false;
		}

		return true;
	}