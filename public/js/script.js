const header = document.getElementsByTagName('header')[0];
const logo = document.getElementById('logo');

function minimize(arg) {
  arg.classList.remove('normal');
  arg.classList.add('minimize');
  arg.classList.add('size');
}

function normal(arg) {
  arg.classList.add('normal');
  arg.classList.add('logo');
  arg.classList.remove('minimize');
  arg.classList.remove('size');
}

document.addEventListener('scroll', () => {
  if (window.scrollY === 0) {
    normal(header);
    normal(logo);
  } else if (window.scrollY !== 0) {
    minimize(header);
    minimize(logo);
  }
});
