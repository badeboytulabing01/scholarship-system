function valReg(){

	if (frmReg.image.value == "") 
	{
		Swal.fire({
              background: '#0B7636',  
              color: '#fff', 
               icon: 'error',
               title: 'error...',
                allowOutsideClick: false,
                allowEscapeKey:false,
               text: 'Required to upload your 2x2 picture'       
             })
		frmReg.image.focus();
		return false;
	}

   //end of lastname

   if (frmReg.name.value == "") 
	{
		Swal.fire({
               background: '#0B7636',  
               color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to write your Last Name'       
             })
		frmReg.name.focus();
		return false;
	}

   //end of firstname

      if (frmReg.firstname.value == "") 
	{
		Swal.fire({
               background: '#0B7636',  
               color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to Write First Name'       
             })
		frmReg.firstname.focus();
		return false;
	}

   //end of first name


      if (frmReg.middlename.value == "") 
	{
		Swal.fire({
            background: '#0B7636',  
              color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to Write Middle Name'       
             })
		frmReg.middlename.focus();
		return false;
	}

   //end of contact


    if (frmReg.age.value == "") 
	{
		Swal.fire({
               background: '#0B7636',  
               color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to write your Age'       
             })
		frmReg.age.focus();
		return false;
	}

   //end of age
   
    if (frmReg.dateapp.value == "") 
	{
		Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to write your Birthday'       
             })
		frmReg.dateapp.focus();
		return false;
	}

   //end of birthday

    if (frmReg.gender.value == "") 
	{
		Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to write your Gender'       
             })
		frmReg.gender.focus();
		return false;
	}

   //end of gender

    if (frmReg.address.value == "") 
	{
		Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to write your Full Address'       
             })
		frmReg.address.focus();
		return false;
	}

   //end of gender

     if (frmReg.contact.value == "") 
	{
		Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to write your Contact Number'       
             })
		frmReg.contact.focus();
		return false;
	}

   //end of contact



     if (frmReg.citizenship.value == "") 
	{
		Swal.fire({
               background: '#0B7636',  
               color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to write your Citizenship'       
             })
		frmReg.citizenship.focus();
		return false;
	}

   //end of Citizenship



      if (frmReg.email.value == "") 
	{
		Swal.fire({
               background: '#0B7636',  
              color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to write your Email Address'       
             })
		frmReg.email.focus();
		return false;
	}

   //end of Citizenship


       if (frmReg.file.value == "") 
	{
		Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to upload Requirements'       
             })
		frmReg.file.focus();
		return false;
	}

   //end of Requirements

    if (frmReg.signature.value == "") 
	{
		Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false
               text: 'Required to upload Your Signature'       
             })
		frmReg.signature.focus();
		return false;
	}

   //end of Requirements


    if (frmReg.f_lname.value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the Last Name'       
             })
    frmReg.f_lname.focus();
    return false;
  }

  
   //end of Requirements

   if (frmReg.f_fname.value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the First Name'       
    })
    frmReg.f_fname.focus();
    return false;
  }


 //end of Requirements

  if (frmReg."f_mname".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the Middle Name'       
             })
    frmReg."f_mname".focus();
    return false;
  }

//end of Requirements


if (frmReg."f_age".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the Age'       
             })
    frmReg."f_age".focus();
    return false;
  }

//end of Requirements

if (frmReg."f_bday".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the birthday'       
             })
    frmReg."f_bday".focus();
    return false;
  }

//end of Requirements
	

if (frmReg."f_gender".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the Gender'       
             })
    frmReg."f_gender".focus();
    return false;
  }

//end of Requirements


if (frmReg."f_address".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the Address'       
             })
    frmReg."f_address".focus();
    return false;
  }

//end of Requirements

  

  if (frmReg."f_cnumber".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the Contact Number'       
             })
    frmReg."f_cnumber".focus();
    return false;
  }

//end of Requirements

  
if (frmReg."f_citizenship".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the Citizenship'       
             })
    frmReg."f_citizenship".focus();
    return false;
  }

//end of Requirements

if (frmReg."f_email".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the Email'  
             })
    frmReg."f_email".focus();
    return false;
  }

//end of Requirements

  if (frmReg."f_occ".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the Occupation'  
             })
    frmReg."f_occ".focus();
    return false;
  }

//end of Requirements


if (frmReg."f_income".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the income'  
             })
    frmReg."f_income".focus();
    return false;
  }

//end of Requirements

if (frmReg."m_lname".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the Last Name'  
             })
    frmReg."m_lname".focus();
    return false;
  }

//end of Requirements

if (frmReg."m_fname".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the First Name'  
             })
    frmReg."m_fname".focus();
    return false;
  }

//end of Requirements

if (frmReg."m_mname".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the Middle Name'  
             })
    frmReg."m_mname".focus();
    return false;
  }

//end of Requirements


if (frmReg."m_age".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the Age'  
             })
    frmReg."m_age".focus();
    return false;
  }

//end of Requirements


if (frmReg."m_age".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the Age'  
             })
    frmReg."m_age".focus();
    return false;
  }

//end of Requirements

if (frmReg."m_bday".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the bithday'  
             })
    frmReg."m_bday".focus();
    return false;
  }

//end of Requirements

if (frmReg."m_bday".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the bithday'  
             })
    frmReg."m_bday".focus();
    return false;
  }

//end of Requirements

if (frmReg."m_gender".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the Gender'  
             })
    frmReg."m_gender".focus();
    return false;
  }

//end of Requirements

if (frmReg."m_address".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the Address'  
             })
    frmReg."m_address".focus();
    return false;
  }

//end of Requirements


if (frmReg."m_cnumber".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the Contact Number'  
             })
    frmReg."m_cnumber".focus();
    return false;
  }

//end of Requirements

if (frmReg."m_citizenship".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the Citizenship'  
             })
    frmReg."m_citizenship".focus();
    return false;
  }

//end of Requirements

if (frmReg."m_email".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the Email'  
             })
    frmReg."m_email".focus();
    return false;
  }

//end of Requirements

if (frmReg."m_occ".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the Occupation'  
             })
    frmReg."m_occ".focus();
    return false;
  }

//end of Requirements

if (frmReg."m_income".value == "") 
  {
    Swal.fire({
               background: '#0B7636',  
            color: '#fff', 
               icon: 'error',
               title: 'error...',
            allowOutsideClick: false,
            allowEscapeKey:false,
               text: 'Required to fill up the Income'  
             })
    frmReg."m_income".focus();
    return false;
  }

//end of Requirements




  
  
  
  