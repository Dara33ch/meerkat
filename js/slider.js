const enemyBtn = document.querySelectorAll(".enemies__slider__btn-item");
const enemyContent = document.querySelectorAll(".enemies__slider-list_item");
const enemyBlock = document.querySelectorAll(".enemies__block-content_item");
enemyBtn.forEach(function (element) {
  element.addEventListener("click", open);
});

function open(evt) {
  const target = evt.currentTarget;
  console.log(target);
  const button = target.dataset.button;
  console.log(button);
  const contentActive = document.querySelector(`#${button}`);
  const contentBlockActive = document.querySelector(`#block-${button}`);
  enemyBtn.forEach(function (item) {
    item.classList.remove("enemies__slider__btn-item--active");
  });

  target.classList.add("enemies__slider__btn-item--active");

  enemyContent.forEach(function (item) {
    item.classList.remove("enemies__slider-list_item--active");
  });

  contentActive.classList.add("enemies__slider-list_item--active");

  enemyBlock.forEach(function (item) {
    item.classList.remove("enemies__block-content_item--active");
  });
  contentBlockActive.classList.add("enemies__block-content_item--active");
}
//block-
