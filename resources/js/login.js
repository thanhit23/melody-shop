const email = document.querySelector('#email');
const password = document.querySelector('#password');
const btnSignIn = document.querySelector('#btn-signin');
const errorElement = document.querySelector('.error-container');

const checkEmail = () => {
  const errorMessage = email.parentElement.nextElementSibling;

  const emailValue = email.value;

  const regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  errorElement.classList.add('active-error');

  if (regex.test(emailValue)) {
    email.parentElement.classList.remove('invalid');
    errorMessage.innerHTML = '';
  } else {
    email.parentElement.classList.add('invalid');
    errorMessage.innerHTML = 'Vui lòng nhập đúng Email';
  }
}

email.addEventListener('input', () => checkEmail())

const checkPassword = () => {
  const errorMessage = password.parentElement.nextElementSibling;

  const passwordValue = password.value;

  errorElement.classList.add('active-error');

  if (!passwordValue) {
    password.parentElement.classList.add('invalid');
    errorMessage.innerHTML = 'Vui lòng nhập password';
  } else {
    password.parentElement.classList.remove('invalid');
    errorMessage.innerHTML = '';
  }
}

password.addEventListener('input', () => checkPassword())

btnSignIn.addEventListener('click', e => {
  e.preventDefault();

  checkEmail();

  checkPassword();

  const formData = new FormData();

  const errorMessage = document.querySelector('.error-message-form');

  formData.append('email', email.value);

  formData.append('password', password.value);

  fetch(route.checkAuthorized, {method: 'POST', body: formData})
    .then(data => data.json())
    .then(data => {
      if (!data.status) {
        errorMessage.innerHTML = data.message;
        errorElement.classList.remove('active-error');
      } else {
        window.location = 'http://localhost/home';
      }
    })
});
