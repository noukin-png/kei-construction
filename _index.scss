const fadeItems = document.querySelectorAll(".js-fade");

const fadeObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      const items = entry.target.parentNode.querySelectorAll(".js-fade");

      items.forEach((el, i) => {
        setTimeout(() => {
          el.classList.add("is-show");
        }, i * 100);
      });
    }
  });
}, {
  threshold: 0.2,
});

fadeItems.forEach((item) => {
  fadeObserver.observe(item);
});