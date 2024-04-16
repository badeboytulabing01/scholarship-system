<script type="text/javascript">
    $(function(){
        $('#signout').click(function(){
          Swal.fire({
            background: '#0B7636',  
            color: '#fff', 
            title: 'Are you sure to Log out?',
            text: "You will be redirected to home page",
            icon: 'warning',
            showCancelButton: true,
            allowOutsideClick: false,
            allowEscapeKey:false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes!'
}).then((result) => {
    if (result.value) {
     window.location = 'logout.php';
    } 
     })//nd of result
        });//end of function signout
    });//end of function
</script>