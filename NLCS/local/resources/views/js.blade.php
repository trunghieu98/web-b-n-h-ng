<script>
        // var IMAGE_PATHS = [];
        // IMAGE_PATHS[0] = "images/b1.jpg";
        // IMAGE_PATHS[1] = "images/bg.jpg";
        // IMAGE_PATHS[2] = "images/b4.jpg";
        var n1 = 0;
        var n = 0;
        var a = 0;
        function currentSlide(n) {
            document.getElementById("laptopImg").src = IMAGE_PATHS[n];
            n1 = n;
        }
        function plusSlides(a) {
            n1 = n1 + a;
            if (n1 < 0) {
                n1 = IMAGE_PATHS.length - 1;
            }
            if (n1 > IMAGE_PATHS.length - 1) {
                n1 = 0;
            }
            document.getElementById("laptopImg").src = IMAGE_PATHS[n1];

        }
        function changeSlide() {
            n1 = n1 + 1;
            if (n1 < 0) {
                n1 = IMAGE_PATHS.length - 1;
            }
            if (n1 > IMAGE_PATHS.length - 1) {
                n1 = 0;
            }
            document.getElementById("laptopImg").src = IMAGE_PATHS[n1];

        }

        var A = setInterval(function () {
            changeSlide();
        }, 5000)
        function stop() {
            clearInterval(A);
        }
        function star() {
            A = setInterval(function () {
                changeSlide();
            }, 5000);
        }
        //-->
    </script>