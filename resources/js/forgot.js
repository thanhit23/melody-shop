const submit = document.getElementById('submit');
const password = document.getElementById('password');
const errors = { password: false };

const checkPassword = () => {
  let { password: passwordErr } = errors;
  const passwordValue = password.value;
  const errorMessage = password.parentElement.nextElementSibling;
  passwordErr = false;

  if (!passwordValue) {
    errorMessage.innerHTML = 'Vui lòng nhập mật khẩu';
    password.parentElement.classList.add('invalid');
    passwordErr = true;
  } else {
    errorMessage.innerHTML = '';
    password.parentElement.classList.remove('invalid');
    passwordErr = false;
  }
}

password.addEventListener('input', () => checkPassword())

const callApi = () => {
  const email = document.getElementById('email');

  const passwordElement = document.getElementById('password');

  const passwordValue = passwordElement.value;

  const emailValue = email.value;

  const formData = new FormData();

  const errorMessage = document.querySelector('.error-message-form');
  
  formData.append('password', passwordValue);

  formData.append('email', emailValue);

  fetch(route.forgot, {method: 'POST', body: formData})
    .then(data => data.json())
    .then(data => {
      if (!data.status) {
        errorMessage.innerHTML = data.message;
        errorElement.classList.remove('active-error');
      } else {
        window.location = 'http://localhost/home';
      }
    })
}

submit.addEventListener('click', e => {
  e.preventDefault();
  const { password } = errors;
  password && checkPassword();
  console.log(password, 'password');
  !password && callApi();
})
