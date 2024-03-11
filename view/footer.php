<div class="row mb footer">
    Tống Trần Kiên - PH45089
</div>
</div>



<!-- js của slide show -->

<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 1500); // Change image every 2 seconds
    }
</script>

</body>

</html>