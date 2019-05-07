<div class="slideshow container">
    <div class="mySlides">
        <a href="#" target="_blank" id="link">
            <img id="laptopImg" src="http://localhost/local/resources/slides/{{$slide1->images}}" onmouseover="stop()" onmouseout="star()" />
        </a>
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(0)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
    </div>
</div>