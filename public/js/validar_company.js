function validar() {
		var user_id, 
			name, 
			phone, 
			email, 
			findout,
			revenueve,
			team,
			obstacle,
			business,
			expresion_Email;

		user_id = document.getElementById('user_id').value;
		name = document.getElementById('name').value;
		phone = document.getElementById('phone').value;
		email = document.getElementById('email').value;
		findout = document.getElementById('findout').value;
		revenueve = document.getElementById('revenueve').value;
		team = document.getElementById('team').value;
		obstacle = document.getElementById('obstacle').value;
		business = document.getElementById('business').value;

		expresion_Email = /\w+@+\w+\.[a-z]/;
		/*
			Comprueba que los campos no estén vacios
		*/
		if (user_id === '') {
			swal("Error", "User ID is requered, please write it", "error");
			return false;
		} else if (name === '') {
			swal("Error", "Name is requered, please write it", "error");
			return false;
		} else if (phone === '') {
			swal("Error", "Phone is obligatory, please write it", "error");
			return false;
		} else if (email === '') {
			swal("Error", "Email of the company is obligatory, please write it", "error");
			return false;
		} else if (findout === '') {
			swal("Error", "The find out is obligatory, please write it", "error");
			return false;
		} else if (revenueve === '') {
			swal("Error", "The revenueve is obligatory, please write it", "error");
			return false;
		} else if (team === '') {
			swal("Error", "The team is obligatory, please write it", "error");
			return false;
		} else if (obstacle === '') {
			swal("Error", "Obstacle is obligatory, please write it", "error");
			return false;
		} else if (business === '') {
			swal("Error", "Business is obligatory, please write it", "error");
			return false;
		} 


		if (user_id.length > 255) {
			swal("Error", "The user id is very large (Max 255 caracters)", "error");
			return false;
		} else if (name.length > 255) {
			swal("Error", "The name is very large (Max 255 caracters)", "error");
			return false;
		} else if (phone.length > 255) {
			swal("Error", "The phone is very large (Max 255 caracters)", "error");
			return false;
		} else if (email.length > 255) {
			swal("Error", "the email is very large (Max 255 caracters)", "error");
			return false;
		} else if (findout.length > 255) {
			swal("Error", "the find out very large o little (Máx 255 caracters and min 5 caracters)", "error");
			return false;
		} else if (revenueve.length > 255) {
			swal("Error", "the revenueve very large o little (Máx 255 caracters and min 5 caracters)", "error");
			return false;
		} else if (team.length > 255) {
			swal("Error", "the team very large o little (Máx 255 caracters and min 5 caracters)", "error");
			return false;
		} else if (obstacle.length > 255) {
			swal("Error", "the obstacle very large o little (Máx 255 caracters and min 5 caracters)", "error");
			return false;
		} else if (business.length > 255) {
			swal("Error", "the business very large o little (Máx 255 caracters and min 5 caracters)", "error");
			return false;
		}


		if (!expresion_Email.test(email)) {
			swal("Error", "El email ingresado no es válido.", "error");
			return false;
	    }
	}