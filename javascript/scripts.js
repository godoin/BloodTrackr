// Buttons
const userButton = document.querySelector("#user-btn");

// Modals
const userPopModal = document.querySelector(".logged");

// Pop up Modals
userButton.addEventListener('click', () => {
    userPopModal.classList.toggle('active');
});