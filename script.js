const header = document.getElementsByTagName('header')[0];
const logo = document.getElementById('logo');

function minimize(arg) {
  arg.classList.remove('normal');
  arg.classList.add('minimize');
}

function normal(arg) {
  arg.classList.add('normal');
  arg.classList.remove('minimize');
}

document.addEventListener('scroll', () => {
  if (window.scrollY === 0) {
    normal(header);
  } else if (window.scrollY !== 0) {
    minimize(header);
  }
});
