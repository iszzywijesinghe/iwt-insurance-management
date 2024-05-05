function selectStars(stars) {
    let elements = document.querySelectorAll(".stars");
    for (let i = 0; i < elements.length; i++) {
        if (i < stars) {
            elements[i].classList.add('selected');
        } else {
            elements[i].classList.remove('selected');
        }
    }
    document.getElementById('ratingInput').value = stars;
}