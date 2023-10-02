//input fields
const titleInput = document.getElementById("title-input");
const categoryInput = document.getElementById("category-input");
const dateInput = document.getElementById("date-input");
const textareaInput = document.getElementById("textarea-input");

//text fields
const titleText = document.getElementById("title-text");
const categoryText = document.getElementById("category-text");
const dateText = document.getElementById("date-text");
const descriptionText = document.getElementById("description-text");

const getInputValue = () => {
  titleText.textContent = titleInput.value;
  categoryText.textContent = categoryInput.value;
  dateText.textContent = dateInput.value;
  descriptionText.textContent = textareaInput.value;
};

titleInput.addEventListener("change", getInputValue);
categoryInput.addEventListener("change", getInputValue);
dateInput.addEventListener("change", getInputValue);
textareaInput.addEventListener("change", getInputValue);


// Initialize the color picker

const textColorPicker = document.getElementById('text-picker')
const bgColorPicker = document.getElementById('bg-picker');

const newEntryContainer = document.getElementById('newEntryCont')

const initColorPick = () => {

    newEntryContainer.style.backgroundColor = bgColorPicker.value;
    descriptionText.style.color = textColorPicker.value;
    titleText.style.color = textColorPicker.value;
    dateText.style.color = textColorPicker.value;
    categoryText.style.color = bgColorPicker.value;
    categoryText.style.backgroundColor = textColorPicker.value;
}
textColorPicker.addEventListener('input' , initColorPick)
bgColorPicker.addEventListener('input' , initColorPick)















































  