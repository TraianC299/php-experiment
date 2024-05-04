document.getElementsByClassName("meniu-derulant").forEach(function (element) {
    element.addEventListener("click", function () {
        this.classList.toggle("active");
        var meniu = this.nextElementSibling;
        if (meniu.style.display === "block") {
            meniu.style.display = "none";
        }
        else {
            meniu.style.display = "block";
        }
    }
    );
}
);

