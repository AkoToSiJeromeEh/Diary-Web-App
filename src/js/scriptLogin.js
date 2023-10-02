const inputUsername = document.getElementById('input-username')
const inputPassword = document.getElementById('input-password');

const emailError = document.getElementById('emailErr')
const passwordError = document.getElementById('passwordErr');

const formLoginContainer = document.getElementById('form-login');

const inputError = (fields , error) => {

	fields.style.color = 'red';
	fields.innerHTML = error;
	fields.style.fontSize = '0.8rem';

}

const validateInputs = (e) => {

	e.preventDefault()
	if(inputUsername.value == '' && inputPassword.value == '') inputError(emailError , 'Please Enter Username ! Required...')
	
}
formLoginContainer.addEventListener('submit' , validateInputs)