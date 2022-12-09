const deleteProductBtn = document.querySelectorAll('.delete-product');
const deleteProductLength = deleteProductBtn.length;

for (let i = 0; i < deleteProductLength; i++) {
  console.log('asdasdasdasdasdas-----------');
  deleteProductBtn[i].addEventListener('click', () => {
    console.log('asdasdasdasdasdas');
    console.log(deleteProductBtn[i].dataset.id);
  })
}
