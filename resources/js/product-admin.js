const btnDelete = document.getElementsByClassName('btn-delete');
const btnDeleteLength = btnDelete.length;

for (let i = 0; i < btnDeleteLength; i++) {
  btnDelete[i].addEventListener('click', () => {
    console.log(btnDelete[i].dataset.id);
  })
}
