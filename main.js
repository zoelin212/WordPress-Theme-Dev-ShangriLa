//header color change

var scrollTrigger = 60

window.onscroll = function () {
  if (window.scrollY >= scrollTrigger || window.pageYOffset >= scrollTrigger) {
    document.getElementById('overlay').style.cssText = `
    background-color: rgba(119, 142, 100);
        `
    document.getElementById('container').style.cssText = `
    display: none;
        `
  } else {
    document.getElementById('overlay').style.cssText = `
    background-color: rgba(119, 142, 100, 0.793);
        `
    document.getElementById('container').style.cssText = `
    display: flex;
        `
  }
}

// Wrap every letter in a span

var textWrapper = document.querySelector('.ml3')
textWrapper.innerHTML = textWrapper.textContent.replace(
  /\S/g,
  "<span class='letter'>$&</span>",
)

anime
  .timeline({ loop: 1 })
  .add({
    targets: '.ml3 .letter',
    opacity: [0, 1],
    easing: 'easeInOutQuad',
    duration: 2250,
    delay: (el, i) => 150 * (i + 1),
  })
  .add({
    targets: '.ml3',
    opacity: 0,
    duration: 1000,
    easing: 'easeOutExpo',
    delay: 1000,
  })
