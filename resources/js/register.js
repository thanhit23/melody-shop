const name = document.querySelector('#fullName');
const email = document.querySelector('#email');
const password = document.querySelector('#password');
const rePassword = document.querySelector('#re_password');
const btnSignIn = document.querySelector('#btn-sign-up');
const showPassword = document.querySelector('#show-password');
const hiddenPassword = document.querySelector('#hidden-password');
const errors = {};
let booleans = true;

showPassword.addEventListener('click', () => {
    const parentElement = showPassword.parentElement.querySelector('#password');
    parentElement.setAttribute('type', 'text');
    showPassword.classList.add('none');
    showPassword.nextElementSibling.classList.remove('none');
});

hiddenPassword.addEventListener('click', () => {
    const parentElement = showPassword.parentElement.querySelector('#password');
    parentElement.setAttribute('type', 'password');
    hiddenPassword.classList.add('none');
    hiddenPassword.previousElementSibling.classList.remove('none');
});

const checkName = () => {
    const nameValue = name.value;
    const nameLength = nameValue.length;
    const errorMessage = name.parentElement.nextElementSibling;
    errors['name'] = booleans;

    if (!nameValue) {
        name.parentElement.classList.add('invalid');
        errorMessage.innerHTML = 'Tên có độ dài ít nhất 12 ký tự';
        booleans = true;
    } else {
        name.parentElement.classList.remove('invalid');
        errorMessage.innerHTML = '';
        booleans = false;
    }
}

name.addEventListener('input', () => checkName());

const checkEmail = () => {
    const errorMessage = email.parentElement.nextElementSibling;
    const emailValue = email.value;
    const regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    errors['email'] = booleans;

    if (regex.test(emailValue)) {
        email.parentElement.classList.remove('invalid');
        errorMessage.innerHTML = '';
        booleans = false;
    } else {
        email.parentElement.classList.add('invalid');
        errorMessage.innerHTML = 'Vui lòng nhập đúng Email';
        booleans = true;
    }
}

email.addEventListener('input', () => checkEmail());

const checkPassword = () => {
    const errorMessage = password.parentElement.nextElementSibling;
    const passwordValue = password.value;
    const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,30}$/;
    errors['password'] = booleans;

    if (!regex.test(passwordValue)) {
        password.parentElement.classList.add('invalid');
        errorMessage.innerHTML = 'Vui lòng nhập mật khẩu ít nhất 1 ký tự viết hoa, 1 số, 1 ký tự đặt biệt, độ dài 8 -> 30 ký tự';
        booleans = true;
    } else if (!passwordValue) {
        password.parentElement.classList.add('invalid');
        errorMessage.innerHTML = 'Vui lòng nhập password';
        booleans = true;
    } else {
        password.parentElement.classList.remove('invalid');
        errorMessage.innerHTML = '';
        booleans = false;
    }
}

password.addEventListener('input', () => checkPassword());

const checkRePassword = () => {
    const passwordValue = password.value;
    const rePasswordValue = rePassword.value;
    const errorMessage = rePassword.parentElement.nextElementSibling;
    errors['password'] = booleans;

    if (!(passwordValue === rePasswordValue)) {
        rePassword.parentElement.classList.add('invalid');
        errorMessage.innerHTML = 'Mật khẩu không đúng';
        booleans = true;
    } else {
        rePassword.parentElement.classList.remove('invalid');
        errorMessage.innerHTML = '';
        booleans = false;
    }
};

rePassword.addEventListener('input', () => checkRePassword());

btnSignIn.addEventListener('click', e => {
    e.preventDefault();
    checkName();
    checkEmail();
    checkPassword();
    checkRePassword();

    const arrayErrors = Object.values(errors);
    const check = arrayErrors.find(e => e === false);
    if (check || check === undefined) {
        return false;
    } else {
        const errorMessages = document.querySelector('.error-message-form');
        const errorElement = document.querySelector('.error-container');
        const fullName = document.getElementById('fullName');
        const email = document.getElementById('email');
        const password = document.getElementById('password');
        const formData = new FormData();
        formData.append('name', fullName.value);
        formData.append('email', email.value);
        formData.append('password', password.value);
        fetch(route.createUser, {method: 'POST', body: formData})
            .then(data => data.json())
            .then(({status, message}) => {
                if (!status) {
                    errorMessages.innerHTML = message;
                    errorElement.classList.remove('active-error');
                }
            });
    }
});
