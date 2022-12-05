const nameElement = document.getElementById('name');
const priceElement = document.getElementById('price');
const discountElement = document.getElementById('discount');
const uploadFileElement = document.getElementById('uploadFile');
const descriptionElement = document.getElementById('description');
const viewElement = document.getElementById('view');
const specialElement = document.getElementById('special');
const typeElement = document.getElementById('type');

const btnSubmit = document.getElementById('btn-submit');

const requiredValue = ({ value, parentElement }) => {
  console.log(value, 'value');
  if (!value) {
    parentElement.nextElementSibling.innerHTML = 'Trường này là bắt buộc';
    parentElement.classList.add('invalid');
  } else {
    parentElement.nextElementSibling.innerHTML = '';
    parentElement.classList.remove('invalid');
  }
}

nameElement.addEventListener('input', () => requiredValue(nameElement));
priceElement.addEventListener('input', () => requiredValue(priceElement));
discountElement.addEventListener('input', () => requiredValue(discountElement));
viewElement.addEventListener('input', () => requiredValue(viewElement));
descriptionElement.addEventListener('input', () => requiredValue(descriptionElement));

btnSubmit.addEventListener('click', e => {
  e.preventDefault();
  console.log(nameElement.parentElement, 'nameElement');
  console.log(priceElement.value, 'priceElement');
  console.log(discountElement.value, 'discountElement');
  console.log([uploadFileElement], 'uploadFileElement');
  console.log(descriptionElement.value, 'descriptionElement');
  console.log(viewElement.value, 'viewElement');
  console.log(specialElement.value, 'specialElement');
  console.log(typeElement.value, 'typeElement');
})

