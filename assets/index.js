const galleryContainer = document.querySelector(".galleries");
const galleryItem = [];
const displayCategories = () => {};

const categoryItems = document.querySelectorAll(".type a");
categoryItems.forEach((item) => {
  let filteredGallery;

  item.addEventListener("click", (e) => {
    // e.preventDefault();
    categoryItems.classList.remove("active");
    e.target.classList.add("active");
    /*if (item.dataset.category === "breakfast") {
      filteredGallery = galleryItem.filter((item) => {
        console.log(item);
        return item;
      });
    }  else if() {

    } else if() {

    } else {} */
  });
});

const images = document.querySelectorAll(".breakfast");
images.forEach((imgItem) => {
  galleryItem.push(imgItem.parentElement.innerHTML);
});

console.log(galleryItem);
