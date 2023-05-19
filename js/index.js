$("#formValidation").validate({
    rules:{
        first_name:{
            minlength:2
        },
        last_name:{
        },
        email:{
            email:true
        }
    },
    messages: {
        first_name:{
            required: "First Name is required",
            minlength: "Name at least 2 character"
        },
        last_name:{
            required: "Last Name is required",
        },
        email:"Email is required",
        phone:"Phone is required",
        address:"Address is required",
        
      },
    
        submitHandler: function(form) {
          form.submit();
        }
       });