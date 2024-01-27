// Buttons
const ratingButton = document.querySelector('#rating-btn');
const ratingExitButton = document.querySelector('#rating-exit');
const ratingDesc = document.querySelector('.rating-desc');
const radioInputs = document.querySelectorAll('.radio-input');

// Modals
const ratingModal = document.querySelector('.rating-pop');

// Exit Buttons
ratingExitButton.addEventListener('click', () => {
    ratingModal.classList.remove('active');
});

ratingButton.addEventListener('click', () => {
    ratingModal.classList.toggle('active');
});  

// Star Clicks
// Star Clicks
radioInputs.forEach(input => {
    input.addEventListener('change', () => {
        switch (input.value) {
            case '5':
                ratingDesc.textContent = 'Excellent employees with outstanding service!';
                break;
            case '4':
                ratingDesc.textContent = 'Very good enviroment with high-quality service.';
                break;
            case '3':
                ratingDesc.textContent = 'Decent or average with satisfactory service.';
                break;
            case '2':
                ratingDesc.textContent = 'Needs improvement in service and facilities.';
                break;
            case '1':
                ratingDesc.textContent = 'Poor management with serious issues.';
                break;
            default:
                ratingDesc.textContent = '';
        }
    });
});
