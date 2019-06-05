function validar() {
		var name, 
			lastName, 
			email, 
			company, 
			password, 
			repeatpassword,
			expresion_Email;

		name = document.getElementById('name').value;
		lastName = document.getElementById('lastName').value;
		email = document.getElementById('email').value;
		company = document.getElementById('company').value;
		password = document.getElementById('password').value;
		repeatpassword = document.getElementById('repeatpassword').value;

		expresion_Email = /\w+@+\w+\.[a-z]/;
		/*
			Comprueba que los campos no estén vacios
		*/
		if (name === '') {
			swal("Error", "Name is requered, please write it", "error");
			return false;
		} else if (lastName === '') {
			swal("Error", "Last name is requered, please write it", "error");
			return false;
		} else if (email === '') {
			swal("Error", "Email is obligatory, please write it", "error");
			return false;
		} else if (company === '') {
			swal("Error", "Company of the company is obligatory, please write it", "error");
			return false;
		} else if (password === '') {
			swal("Error", "Password is obligatory, please write it", "error");
			return false;
		}


		if (name.length > 255) {
			swal("Error", "Name is very large (Max 255 caracters)", "error");
			return false;
		} else if (lastName.length > 255) {
			swal("Error", "Last name is very large (Max 255 caracters)", "error");
			return false;
		} else if (email.length > 255) {
			swal("Error", "Email is very large (Max 255 caracters)", "error");
			return false;
		} else if (company.length > 255) {
			swal("Error", "Company is very large (Max 255 caracters)", "error");
			return false;
		} else if (password.length < 5 || password.length > 255) {
			swal("Error", "Password very large o little (Máx 255 caracters and min 5 caracters)", "error");
			return false;
		}


		if (!expresion_Email.test(email)) {
			swal("Error", "Email is invalid", "error");
			return false;
	    }

	    if(password === repeatpassword){
	    	// none for now
	    }else{
	       swal("Error", "Passwords don't match", "error");
			return false;
	    }
	}


	function compare(){
						var password, repeatpassword;
                      password = document.getElementById('password').value;
                      repeatpassword = document.getElementById('repeatpassword').value;
                      pw = document.getElementById('password');
                      rpw = document.getElementById('repeatpassword');

                      if(password === '' && repeatpassword === ''){
						pw.style.background = "rgb(255, 255, 255)";
						rpw.style.background = "rgb(255, 255, 255)";
                      } else
                      if(password === repeatpassword){
                      	pw.style.background = "#aaf39175";
                      	rpw.style.background = "#aaf39175";
                      } else
                      {
                      	pw.style.background = "rgba(255, 173, 186, 0.46)";
                      	rpw.style.background = "rgba(255, 173, 186, 0.46)";
                      }
	}