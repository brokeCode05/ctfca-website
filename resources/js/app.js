document.addEventListener('DOMContentLoaded', function () {
  var btn = document.getElementById('menu-btn');
  var nav = document.getElementById('mainnav');
  if (!btn || !nav) return;

  btn.addEventListener('click', function () {
    var open = nav.classList.toggle('open');
    btn.setAttribute('aria-expanded', open ? 'true' : 'false');
  });
});