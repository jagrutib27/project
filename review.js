document.addEventListener('DOMContentLoaded', () => {
    const stars = document.querySelectorAll('.star-rating .star');
    const ratingInput = document.getElementById('rating');
    const reviewForm = document.querySelector('.review-form');

    let currentRating = 0;

    // Initialize stars based on any pre-selected value (if applicable)
    // This part is more for editing, for a new form, it starts at 0

    stars.forEach(star => {
        star.addEventListener('click', () => {
            currentRating = parseInt(star.dataset.value);
            ratingInput.value = currentRating;
            highlightStars(currentRating);
        });

        star.addEventListener('mouseover', () => {
            highlightStars(parseInt(star.dataset.value), 'hovered');
        });

        star.addEventListener('mouseout', () => {
            highlightStars(currentRating); // Go back to selected state
        });
    });

    function highlightStars(rating, className = 'selected') {
        stars.forEach(star => {
            star.classList.remove('selected', 'hovered'); // Clear both classes first
            if (parseInt(star.dataset.value) <= rating) {
                star.classList.add(className);
            }
        });
    }

    // Add form submission validation
    reviewForm.addEventListener('submit', (event) => {
        const nameInput = reviewForm.querySelector('input[name="name"]');
        const reviewTextarea = reviewForm.querySelector('textarea[name="review"]');

        let isValid = true;
        let errorMessage = '';

        if (nameInput.value.trim() === '') {
            isValid = false;
            errorMessage += 'Please enter your name.\n';
        }
        if (ratingInput.value === '' || parseInt(ratingInput.value) < 1 || parseInt(ratingInput.value) > 5) {
            isValid = false;
            errorMessage += 'Please select a rating (1-5 stars).\n';
        }
        if (reviewTextarea.value.trim() === '') {
            isValid = false;
            errorMessage += 'Please write your review.\n';
        }

        if (!isValid) {
            event.preventDefault(); // Stop form submission
            alert(errorMessage); // Show alert with errors
        }
    });
});




