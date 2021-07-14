function toggleRoll(roll) {
  if (roll === 1) {
    document.getElementById('toggle_roll').value = 0;
    document.getElementById('hide_roll').classList.toggle('d-none')
    document.getElementById('show_roll').classList.toggle('d-none')
    console.log(document.getElementById('toggle_roll').value);
  } else {
    document.getElementById('toggle_roll').value = 1;
    document.getElementById('hide_roll').classList.toggle('d-none')
    document.getElementById('show_roll').classList.toggle('d-none')
    console.log(document.getElementById('toggle_roll').value);
  }
  return false;
}

function toggleDev() {
    document.getElementById('dev').classList.toggle('d-none')
  return false;
}


