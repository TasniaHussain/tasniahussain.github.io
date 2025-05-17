function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.bottom >= 0
  );
}

function checkPapersVisibility() {
  const papers = document.querySelectorAll('.paper');
  papers.forEach(paper => {
    if (isInViewport(paper)) {
      paper.classList.add('visible');
    }
  });
}

window.addEventListener('load', checkPapersVisibility);
window.addEventListener('scroll', checkPapersVisibility);

window.addEventListener('DOMContentLoaded', () => {
  const author = document.querySelector('.author-container');
  author.classList.add('visible');
});
