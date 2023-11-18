var number = 0;
var add = document.querySelectorAll("#add");
var remove = document.querySelectorAll("#remove");
var update_so = document.querySelectorAll("#update_so");

for (let i = 0; i < add.length; i++) {
  add[i].addEventListener('click', bamadd);
}

for (let i = 0; i < remove.length; i++) {
  remove[i].addEventListener('click', bamremove);
}

function bamadd() {
  number++;
  for (let i = 0; i < update_so.length; i++) {
    update_so[i].innerHTML = number;
  }
}

function bamremove() {
  if (number === 0) {
    return false; //
  } else {
    number--;
    for (let i = 0; i < update_so.length; i++) {
      update_so[i].innerHTML = number;
    }
  }
}
