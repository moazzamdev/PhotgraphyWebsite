function showPopup() {
    var popup = document.getElementById("popup");
    popup.style.opacity = 1;
    popup.style.pointerEvents = "auto";
}

function hidePopup() {
    var popup = document.getElementById("popup");
    popup.style.opacity = 0;
    popup.style.pointerEvents = "none";
}

// Call the showPopup function after successful form submission
showPopup();

// Attach click event to the close button
var closeButton = document.querySelector(".close");
closeButton.addEventListener("click", hidePopup);
