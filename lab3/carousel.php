<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel de imagini</title>
    <style>
        @import '/styles/globals.css';
        .slideshow-container {
            max-width: 600px;
            position: relative;
            margin: auto;
            /* border: 1px solid black; */
            border-radius: 8px;
            overflow: hidden;
        }

        .mySlides {
            display: none;
        }


        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            color: black;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            background-color: white;
            border-radius: 50%;
            height: 40px;
            width: 40px;
            text-align: center;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .prev {
            left: 8px;
        }
        .next {
            right: 8px;
        }

        .prev:hover,
        .next:hover {
            background-color: rgba(256, 256, 256, 0.5);
        }

        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class='min-h-screen flex align-center justify-center'>
        <div class="slideshow-container">
            <div class="mySlides">
                <img src="/images/lab3-img1.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <img src="/images/lab3-img2.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <img src="/images/lab3-img3.jpg" style="width:100%">
            </div>
            <a class="prev" onclick="plusSlides(-1)">←</a>
            <a class="next" onclick="plusSlides(1)">→</a>
        </div>
    </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }
    </script>

</body>

</html>