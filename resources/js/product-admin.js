const btnDelete = document.getElementsByClassName('btn-delete');
const messagesElement = document.getElementById('toast-messages');
const btnSubmitElement = document.getElementById('btn-submit');
const btnEdit = document.getElementsByClassName('btn-edit');
const modelEditElement = document.querySelector('.model-container-edit');
const modelCloseElement = document.querySelector('.model-close-edit');
const itemLength = btnDelete.length;

for (let i = 0; i < itemLength; i++) {
  btnDelete[i].addEventListener('click', () => {
    const id = btnDelete[i].dataset.id;
    
    const formData = new FormData();

    formData.append('id', id);

    fetch(route.deleteProduct, {method: 'POST', body: formData})
      .then(data => data.json())
      .then(({ status, message }) => {
        if (status) {
          messagesElement.innerHTML = toastr.success(message);
          setInterval(() => window.location = 'http://localhost/pages/admin/tables.php', 3000);
        }
      })
  })
}

for (let i = 0; i < itemLength; i++) {
  btnEdit[i].addEventListener('click', () => {
    modelEditElement.classList.remove('none-model');
    modelCloseElement.classList.remove('none-model');
    const indexItem = 1 + i;
    const itemElement = document.querySelector(`.item-product-${indexItem}`);

    const nameElement = itemElement.querySelector('.name-product');
    const priceElement = itemElement.querySelector('.price-product');
    const descriptionElement = itemElement.querySelector('.description');
    const viewElement = itemElement.querySelector('.view');
    const typeElement = itemElement.querySelector('.id_type');

    const nameValue = nameElement.innerHTML;
    const priceValue = priceElement.dataset.price;
    const discountValue = priceElement.dataset.discount;
    const descriptionValue = descriptionElement.value;
    const viewValue = viewElement.value;
    const typeValue = typeElement.value;

    const nameEdit = document.getElementById('name-edit');
    const idEdit = document.querySelector('.id-product');
    const priceEdit = document.getElementById('price-edit');
    const descriptionEdit = document.getElementById('description-edit');
    const viewEdit = document.getElementById('view-edit');
    const typeEdit = document.getElementById('type-edit');
    const discountEdit = document.getElementById('discount-edit');

    nameEdit.value = nameValue;
    nameEdit.dataset.id = idEdit.innerHTML;
    priceEdit.value = Number(priceValue);
    descriptionEdit.value = descriptionValue;
    viewEdit.value = viewValue;
    typeEdit.value = typeValue;
    discountEdit.value = discountValue;
  })
}

modelCloseElement.addEventListener('click', () => {
  modelEditElement.classList.add('none-model');
  modelCloseElement.classList.add('none-model');
});

btnSubmitElement.addEventListener('click', () => {
  const nameEdit = document.getElementById('name-edit');
  const priceEdit = document.getElementById('price-edit');
  const descriptionEdit = document.getElementById('description-edit');
  const viewEdit = document.getElementById('view-edit');
  const typeEdit = document.getElementById('type-edit');
  const discountEdit = document.getElementById('discount-edit');

  const formData = new FormData();

  formData.append('id', nameEdit.dataset.id);
  formData.append('name', nameEdit.value);
  formData.append('price', priceEdit.value);
  formData.append('description', descriptionEdit.value);
  formData.append('view', viewEdit.value);
  formData.append('type', typeEdit.value);
  formData.append('discount', discountEdit.value);

  fetch(route.updateProduct, {method: 'POST', body: formData})
    .then(data => data.json())
    .then(({ status, message }) => {
      if (status) {
        modelEditElement.classList.add('none-model');
        modelCloseElement.classList.add('none-model');
        messagesElement.innerHTML = toastr.success(message);
        setInterval(() => window.location.reload(), 3000);
      }
    })
});
