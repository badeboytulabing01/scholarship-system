<script>

	$(function() {
    $('#submitform').click(function(e) {
      
            var valid = this.form.checkValidity();

            if (valid){
           var lastname = $('#lastname').val();   
           var fname          = $('#fname').val();
           var mname          = $('#mname').val();    
           var email          = $('#email').val(); 
           var username       = $('#username').val(); 
           var password       = $('#password').val();   
          
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
/*end of validation*/
           //sending data
    e.preventDefault();
     $.ajax({
                type: 'POST',
                  url : 'process_add_user.php',
                  data: {
                    lastname        :lastname,
                    fname           :fname,
                    mname           :mname,
                    email           :email,
                    username        :username,
                    password        :password
                   

                  },
                  success: function(data){
                      swal.fire({
                   background: '#0B7636',  
                   color: '#fff', 
                   icon : 'success',
                   allowOutsideClick: false,
                   allowEscapeKey:false,
                   title: "Succesfull", 
                   text : data, 
                   confirmButtonText: "Okay"
                   
                   })//end of sweetalert success
                   .then((result) => {
                     if (result.value) {
                     window.location = 'account.php';
                     } 
                   })//nd of result
                  },//end of succes 
                  error: function(data){
                  Swal.fire({
                  icon  : 'error',
                  title : 'Oops...',
                  text  : 'Something went wrong!',
               })//end of swal fire
              }//end of error

             });//end of a.jax           
            }//end of if 
            else{        
           }//end of else  

        }); // $('#submitform').click(function(e) {    
  });//end of function script
</script>