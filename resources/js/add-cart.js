const btnAddCartElement = document.getElementById('btn-add-cart');
const quantityElement = document.getElementById('quantity');
const messagesElement = document.getElementById('toast-messages');

btnAddCartElement.addEventListener('click', () => {
  const quantity = quantityElement.value;

  const id_product = quantityElement.dataset.id_product;

  const id_user = quantityElement.dataset.id_user;

  const formData = new FormData();

  formData.append('quantity', quantity);

  formData.append('id_product', id_product);

  formData.append('id_user', id_user);

  fetch(route.addCart, {method: 'POST', body: formData})
    .then(data => data.json())
    .then(({ status, message }) => {
      if (status) {
        messagesElement.innerHTML = toastr.success(message);
        setInterval(() => window.location = 'http://localhost/cart', 3000);
      }
    })
})
