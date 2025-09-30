
<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<?php
require "home_header.php"; ?>

<?php
//  $base_url = "/yardy-website/demo/";
//    $base_url = "https://yardyadventures.com/demo";
    $img_url = $base_url . "/assets/images/frontend/home/";
?>
<style>
html {
  font-size: 14px;
  font-family:serif;
}

@media (min-width: 768px) {
  html {
    font-size: 16px;
  }
}

body {
    margin-bottom: 60px;
    font-family:Arial;
    background-color: #EBF3EF;
}

.tagline2 {
    font-size: 300%;
}

.Jamaica {
    text-align: left;
}

.usermessage {
    animation: bishopmove 5s;
    width: 100%;
    height: auto;
    position: relative;
}

@keyframes bishopmove {
    from {
        left: -400px;
    }

    to {
        left: 0px;
    }
}

.usergreeting {
    animation: kingmove 5s;
    width: 100%;
    height: auto;
    position: relative;
}

@keyframes kingmove {
    from {
        left: 400px;
    }

    to {
        left: 0px; 
    }
}

.tagline {
    
    width: 100%;
    height: auto;
    position: relative;
    font-size: 400%;
}

@keyframes newmove {
    from {
        left: 300px;
    }

    to {
        left: 0px;
    }
} 

.graph {
    animation: yourmove 5s;
    width: 100%;
    height: auto;
    position: relative;
    display:flex;
    justify-content:center;
    gap: 100px;
}


@keyframes yourmove {
    from {
        left: -300px;
    }

    to {
        left: 0px;
    }
}


.graph2 {
    animation: rightmove 5s;
    width: 100%;
    height: auto;
    position: relative;
    display: flex;
    justify-content: center;
    gap: 100px;
} 


@keyframes rightmove {
    from {
        left: 300px;
    }

    to {
        left: 0px;
    }
} 



.gallerybtn {
    display: flex;
    justify-content:center;
}










.sector {
    text-align: center;
    justify-content: center; 
}

.motion{
    display:flex;
    justify-content:center;
    height: 200px;
    width: 400px;
}


div.horse {
 
    height: 300px;
    width: 500px;
    transition: 1s;
    justify-content: center;
    text-align: center; 
    border: 5px solid #2BA9EA;
}

    div.horse:hover {
        border: 5px solid #FDD402;
    }

.gyal {
    display: flex;
    justify-content: center;
    border:5px solid #2BA9EA;
    width: 210px; 
    height: 210px;
    transition: 1s;
    position: relative;
    text-align: center;
}

.gyal2 {
    display: flex;
    justify-content: center;
    border: 5px solid #2BA9EA;
    width: 210px;
    height: 210px;
    transition: 1s;
    position: relative;
    text-align: center;
} 

.gyalcontainer { 
    display: flex;
    justify-content: center;
    gap: 50px;
}

div.gyal:hover {
    border: 5px solid #FDD402;
}

div.desc {
    padding: 15px;
    text-align: center;
    background-color: #28B9F5;
} 


.numbertext{
    justify-content:center;
    text-align:center;
}







.gallery {
    display: flex;
    padding: 20px; 
    width: 100%;
    justify-content:center;
    gap: 10px;
}

.gallery2 {
    display: flex;
    padding: 20px;
    width: 100%;
    justify-content: center;
    gap: 70px; 
}

.navbar {
    background-color: #FFD402;
    justify-content: space-around;
    padding: 0;
    margin: 0;
    width:100vw;
} 
#header, #header>.container{
    padding: 0;
    margin:0;
}

.navbar-brand.logo{
    height:60px;
}

.btnpr{
    display:flex; 
    justify-content: space-between;
    
}

#myVideo {
    position: fixed;
    top: 70px;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
}

.content {
    position: relative;
    top: 0;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 10px;
}


#myBtn {
    width: 200px;
    font-size: 18px;
    padding: 10px;
    border: none;
    background: #000;
    color: #fff;
    cursor: pointer;
}

#myBtn:hover {
    background: #ddd;
    color: black;             
}  


.stillphotos {
    border: 1px solid #c3c3c3;
    justify-content:center;
    padding:40px;
}




* {
    box-sizing: border-box;
}




.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    top: 96%;
    transform: translate(-50%, -50%);
    color: white;
    text-align:center;
    justify-content:center;
}

.centered2 {
    position: absolute;
    top: 50%;
    left: 50%;
    top: 93%;
    transform: translate(-50%, -50%);
    color: white;
    text-align: center;
    justify-content: center;
}

.centered3 {
    color: white;
    text-align: center;
    justify-content: center;
    position: absolute;
    top: 81%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 150%;
}

.centered4 {
    color: white;
    text-align: center;
    justify-content: center;
    position: absolute;
    top: 75%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 400%; 
}

           

/* Caption text */
.text {
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 12px 12px;
    position: absolute;
    top: 0;
    align-content: center;
}

/* The dots/bullets/indicators */
.dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
}




.active {
    background-color: #717171;
}



.mySlides {
    display: none;
    align-content: center;
    position: relative;
    text-align: center;
    height: auto;
    width: auto;
}

/* Fading animation */
.fade {
    animation-name: fade;
    /*slide show*/
    animation-duration: 5s;
}

/*slide show image movement in measured pixels*/ 
@keyframes mySlides {
    from {
        left: -100px;
    }

    to {
        left: 100px;
    }
}

/*slide show*/
@keyframes fade {
    from {
        opacity: 0.8
    }

    to {
        opacity: 1
    }
}





    
    



/* Slideshow */
.slideshow-container { 
    position: relative;
    justify-content: center;
    text-align: center;
    
}

.greenline {
    border-top: 20px solid #427A27;
    border-bottom: 20px solid #427A27;
    width: 1600px;
    margin: 0 -7em;
}


/*slide show image container*/
.cube {
    animation: mymove 5s infinite;
    width: auto;
    height: auto;
    position: relative;
}

/*slide show image moving left to right*/
@keyframes mymove {
    from {
        left: -145px;
    }

    to {
        left: 145px;
    }
} 








.login-logout-card .card-header {
    margin: 0px 0px 12px 0px;
}

.login-logout-card ul.navtabs {
    margin: 0px 0px -12px 0px;
}

.login-logout-card li.nav-item {
    width: 50%;
}

.login-logout-card a.nav-link {
    font-size: 1rem;
    color: #495057;
    text-align: center;
    padding: 1rem;
}

.login-logout-card card-body {
    padding: 10px 20px;
}


/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
    .text {
        font-size: 11px
    }
}



.btn:focus, .btn:active:focus, .btn-link.nav-link:focus, .form-control:focus, .form-check-input:focus {
    box-shadow: 0 0 0 0.1rem white, 0 0 0 0.25rem #258cfb;
}

html {
  position: relative;
  min-height: 100%;
}

</style>

<div class="greenline" >

    <div class="slideshow-container" style="position: relative; justify-content: center;">

        <div class="">

            <div class="cube">

                <div class="mySlides fade">

                    <img class="caption" src="<?php echo $img_url?>breezyhilldunebuggy44.jpg" width="auto" height="900">

                </div>

            </div>


            <div class="cube">

                <div class="mySlides fade">

                    <img class="caption" src="<?php echo $img_url?>HorsebackRiding44.jpg" width="auto" height="900">

                </div>

            </div>

            <div class="cube">

                <div class="mySlides fade">

                    <img class="caption" src="<?php echo $img_url?>ParkLife44.jpg" width="auto" height="900">

                </div>

            </div>

            <div class="cube">

                <div class="mySlides fade">

                    <img class="caption" src="<?php echo $img_url?>RiverTubing44.jpg" width="auto" height="900">

                </div>

            </div>

            <div class="cube">

                <div class="mySlides fade">

                    <img class="caption" src="<?php echo $img_url?>WalkTrails44.jpg" width="auto" height="900">

                </div>

            </div>

        </div>

    </div>

</div>

<div class="slideshow-container">

    <div>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div> 

</div>
    

<br />
<br />

<section style="text-align:center; justify-content:center; color:#427A27;">

    <div class="graph">

        <h1 class="tagline">Explore your wild side!</h1>

    </div>

    <br />
    <br /> 
    <br /> 

    <div class="graph2">

        <h1 class="tagline2"> 

            #Jamaica’s Best Community Eco-Tourist Attraction

        </h1> 

    </div>

    <br />
    <br />
    
    <div class="graph" > 

        <div class="gallerybtn" style="padding-top:30px;"> 
            
            <div class="btn btn-group">

                <a class="nav-link text-dark" asp-area="" asp-controller="Home" asp-action="Gallery">

                    <video class="gallery-item" autoplay loop muted playsinline>
                        <source src="<?php echo $video_url; ?>"Jamaica Mission 3_Yardy River_B-Roll_1x1_v1.mp4" />
                    </video> <br />

                    <h4>View Gallery</h4>

                </a> 

            </div> 
            
        </div>
        
    </div>

        <br /><br /><br /><br />
    
    <div class="slideshow-container navbar-expand-lg">
        <img class="pics" src="~/css/ads/Advertisement 1.jpg" /> 
    </div>
    
    <br /><br /><br />

    <div class="slideshow-container navbar-expand-lg">
        <img class="pics" src="~/css/ads/Advertisement 2.jpg" />
    </div>
    
</div> 

<br />
<br />
<br />
<br /> 
<br />
<br />
<br />
<br />
<br />
<br />

<h1>Photos</h1>

<section id="gallery" class="sector">   

    <div class="gyalcontainer"> 

        <a class="nav-link text-dark" asp-area="" asp-controller="Home" asp-action="Photo1">
            <div class="gyal">
                 <img src="<?php echo $img_url?>Confluence - Natures Jacuzzi.jpeg" width="150" height="200"/>
            </div>
        </a>

        <a class="nav-link text-dark" asp-area="" asp-controller="Home" asp-action="Photo2">
            <div class="gyal">
                <img src="<?php echo $img_url?>Roaring River .jpeg" width="150" height="200" />
            </div>
        </a>
        
        <a class="nav-link text-dark" asp-area="" asp-controller="Home" asp-action="Photo3">
            <div class="gyal">
                <img src="<?php echo $img_url?>we-had-a-blast-river.jpg" width="150" height="200" />
            </div>
        </a> 

        <a class="nav-link text-dark" asp-area="" asp-controller="Home" asp-action="Photo4">
            <div class="gyal">
                <img src="<?php echo $img_url?>Food - Curried Ackee.jpeg" width="150" height="200" />
            </div>
        </a> 
        
    </div>

    <br />
    <br />
    <br /> 

    <div class="gyalcontainer">

        <div class="horse">

            <video height="290" width="490" controls>
                <source src="<?php echo $img_url?>Horseback Riding.mp4" />
            </video>

        </div>

    </div>

    <div class="gallery-container">

        <div class="gallery-item-new">
            <img src="<?php echo $img_url?>RT_10104.jpg" alt="">
        </div>
    
        <div class="gallery-item-new">
            <img src="<?php echo $img_url?>RT1002.jpg" alt="">
        </div>
    
        <div class="gallery-item-new">
            <img src="<?php echo $img_url?>RT1005.jpg" alt="">
        </div>
    
        <div class="gallery-item-new">
            <img src="<?php echo $img_url?>Copy of BP10001.jpg" alt="">
        </div>
    
        <div class="gallery-item-new">
            <img src="<?php echo $img_url?>Copy of RT 01001.jpg" alt="">
        </div>
    
        <div class="gallery-item-new">
            <img src="<?php echo $img_url?>Copy of RT 10102.jpg" alt="">
        </div>
    
        <div class="gallery-item-new">
            <img src="<?php echo $img_url?>Copy of RT 10103.jpg" alt="">
        </div>
    
        <div class="gallery-item-new">
            <img src="<?php echo $img_url?>Copy of RT1009.jpg" alt="">
        </div>
    
        <div class="gallery-item-new">
            <img src="<?php echo $img_url?>Copy_of_HB_1001.jpg" alt="">
        </div>
    
        <div class="gallery-item-new">
            <img src="<?php echo $img_url?>Copy_of_HB_1002.jpg" alt="">
        </div>
    
        <div class="gallery-item-new">
            <img src="<?php echo $img_url?>Copy_of_HP_1003.jpg" alt="">
        </div>

    </div>  

    <div class="gyalcontainer">

        <h3 style="color:#427A27;"> Yardy Horseback Riding </h3>

    </div>

    <div class="gallery-container">

        <video class="gallery-item" autoplay loop muted playsinline controls>
            <source src="<?php echo $img_url?>012 Good Energy for Family and Friends.MP4" />
        </video>
    
        <video class="gallery-item" autoplay loop muted playsinline controls>
            <source src="<?php echo $img_url?>02 Yardy Community Tourism JSIF Media.mp4" />
        </video>
    
        <video class="gallery-item" autoplay loop muted playsinline controls>
            <source src="<?php echo $img_url?>03 Yardy Safety Briefing .mp4" />
        </video>
    
        <video class="gallery-item" autoplay loop muted playsinline controls>
            <source src="<?php echo $img_url?>04 Yardy River Tubing .MP4" />
        </video>
    
        <video class="gallery-item" autoplay loop muted playsinline controls>
            <source src="<?php echo $img_url?>05 Yardy Water Fall Healing Jacuzzi .MP4" />
        </video>
    
        <video class="gallery-item" autoplay loop muted playsinline controls>
            <source src="<?php echo $img_url?>06 Yardy is Perfect for Nature Lovers .mp4" />
        </video>
    
        <video class="gallery-item" autoplay loop muted playsinline controls>
            <source src="<?php echo $img_url?>07 Promo Yardy Horseback Riding.mp4" />
        </video>
    
        <video class="gallery-item" autoplay loop muted playsinline controls>
            <sourcesrc="<?php echo $img_url?>08 Promo Yardy River Tubing .mp4" />
        </video>
    
        <video class="gallery-item" autoplay loop muted playsinline controls>
            <source src="<?php echo $img_url?>09 Yardy Thrilling Rapids Unedited .mp4" />
        </video>
    
        <video class="gallery-item" autoplay loop muted playsinline controls>
            <source src="<?php echo $img_url?>11 Yardy River Tubing and Horseback Riding.mp4" />
        </video>
    
        <video class="gallery-item" autoplay loop muted playsinline controls>
            <source src="<?php echo $img_url?>13 Yardy Family Fun Daze Dun Daze .MP4" />
        </video>
    
        <video class="gallery-item" autoplay loop muted playsinline controls>
            <source src="<?php echo $img_url?>14 Yardy is Jamaican Owned and Operated .MP4" />
        </video>  

    </div> 

</section>

<script>

let slideIndex = 0;
showSlides();

function showSlides() {

    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");



    for (i = 0; i < slides.length; i++) {

        slides[i].style.display = "none"; 
        let slideIndex = 0;
        showSlides();

        function showSlides() {

            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");

            for (i = 0; i < slides.length; i++) {

                slides[i].style.display = "none";   

            }

            slideIndex++;

            if (slideIndex > slides.length) {

                slideIndex = 1

            }

            for (i = 0; i < dots.length; i++) {

                dots[i].className = dots[i].className.replace(" active", "");

            }

            slides[slideIndex - 1].style.display = "block";

            dots[slideIndex - 1].className += " active";

            setTimeout(showSlides, 5000); // Image appears every 7 second. 
        }




        var video = document.getElementById("myVideo");
        var btn = document.getElementById("myBtn");

        function myFunction() {

            if (video.paused) {
                video.play();
                //btn.innerHTML = "Pause";
            } else {
                video.pause();
                //btn.innerHTML = "Play";
            }
        }

        //<button id="myBtn" onclick="myFunction()">Pause</button><br /> //place this tag in the INDEX file. 

    } 

} 






//This is a replica of the conditional statement above inside the for loop.




//slideIndex++;

//if (slideIndex > slides.length) {

//slideIndex = 1

//}

//for (i = 0; i < dots.length; i++) {

//dots[i].className = dots[i].className.replace(" active", "");

//}

//slides[slideIndex - 1].style.display = "block";

//dots[slideIndex - 1].className += " active";

//setTimeout(showSlides, 3000); // Change image every 3 seconds

//var video = document.getElementById("myVideo");
//var btn = document.getElementById("myBtn"); 


//<button id="myBtn" onclick="myFunction()">Pause</button><br /> //place this tag in the INDEX file. 
</script>

<script type="application/javascript">
    
</script>
<style>
#gallery{
}
</style>


<?php require"home_footer.php";?>
     
