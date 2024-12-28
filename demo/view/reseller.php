<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    
    <?php
    require "home_header.php"; ?>
    
    

  
  
  
  
  <style>
  
  
  .footer-area {
    background-color: #EBF3EF!important;
    margin-top: auto!important;
    position: relative !important;
    overflow: hidden !important;
}

  
  .ob{
    text-align: left;
    /* padding: 40px; */
    padding-left: 60px;
    padding-right: 60px;
  }
  
  
  
  .content-section h3 {
    color: #28B9F5 !important;
  }
  
  p {
    font-weight: 400 !important;}
  
  .cta-btn {
    color: #2BA9EA !important;
  }
  
  h1{color: #427A27 !important;}
  
  /* .sellingTable>:not(caption)>*>* {
   background-color: #427A27 !important;
   text-align: left !important;
   color: #fff ;
    } */
    .sellingTable {
      border-collapse: collapse;
      border-spacing: 20px;
      min-width: 500px;
    }
    .sellingTable th{
      padding: 20px 20px;
    }
    .sellingTable td {
      padding: 30px 20px;
    }
  .sellingTable thead tr th {
    background-color: #ffc107 !important;
    color: #000 !important;
    
}
.sellingTable tbody tr:nth-child(odd) {
  background-color: #198754 !important; 
  color:rgb(255, 251, 243) !important;
}
.sellingTable tbody tr:nth-child(even) {
  background-color: #f0c153 !important;
  /* background-color: #28B9F5 !important; */
  color:rgb(5, 24, 15) !important;
}

  
  
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      color: #333;
    }
    /* Header and Hero Section */
    header {
         /*background: linear-gradient(90deg, #e9f371, #596e65);*/
    padding: 50px 0;
    color: white;
    text-align: center;

    }
    header h1 {
      font-size: 3.5em;
      margin: 0;
    }
    header p {
      font-size: 1.5em;
      margin: 15px 0;
    }
    .cta-btn {
      background-color: #fff;
      color: #ff0066;
      padding: 15px 30px;
      border: none;
      font-size: 1.2em;
      cursor: pointer;
      border-radius: 5px;
    }
    
    /* Hero Banner */
    .hero-banner {
      background: url('/demo/assets/images/frontend/blog/PictureISPBanner.png') no-repeat center center/cover;
      height: 400px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .hero-banner h2 {
      color: white;
      font-size: 3em;
      text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
    }

    /* Main Content */
    main {
      background-color: white;
      padding: 50px 0;
    }
    .container {
      width: 80%;
      margin: 0 auto;
      text-align: center;
      color: #000;

    }
    .content-section {
      padding: 30px;
      margin-bottom: 30px;
      text-align: left;
      border-radius: 10px;
    }
    .content-section h3 {
      color: #6a00ff;
      margin-bottom: 20px;
    }
    .content-section p {
      font-size: 1.2em;
      line-height: 1.6;
    }

    /* Image and Text alternating sections */
    .image-text-section {
      display: flex;
      align-items: center;
      margin-bottom: 50px;
    }
    .image-text-section img {
      width: 50%;
      border-radius: 10px;
    }
    .image-text-section .text {
      width: 50%;
      padding: 20px;
    }
    .image-text-section.reverse {
      flex-direction: row-reverse;
    }

    footer {
      background-color: #333;
      color: white;
      padding: 20px;
      text-align: center;
    }


p{
    font-weight:100;
}
ul {
    list-style-type: none;
}

    .bk{
       background-color: #ffffff78;;  
       border-radius: 77px;
       /* border: 1px solid transparent;*/
    }

    /* Responsive Styles */
    @media only screen and (max-width: 768px) {
      header h1 {
        font-size: 2.5em;
      }
      .container {
        width: 90%;
      }
      .image-text-section {
        flex-direction: column;
      }
      .image-text-section img, .image-text-section .text {
        width: 100%;
        text-align: center;
      }
      
    }
  </style>
</head>
<body>
    
    

<!-- ==================== Header End Here ==================== -->
    
    
    
    
    
    
    
    
    
    
    
    
    
  <header>
    <div class="container">
       <h1>Independent Seller Programme</h1>
            <h2>Explore Promote Earn</h2>
            <a href="https://yardyadventures.com/demo/register"><button class="cta-btn">Earn 25% Commission</button></a>
            <p>This progamme offers a lucrative income opportunity. Every sale generated from your promotional effeorts boosts your income.</p>
        </div>
    </header>

    <!-- <section class="hero-banner">
        <h2>Experience Nature Like Never Before</h2>
    </section> -->

    <section class="hero-banner">
    </section>
    <main>
        <section class="content-section">
            <div class="container">
                <p>Join the Yardy Community</p>
                <p>The tours, attraction and activities (TAA) sector of the travel industry is in growth mode.  Increasing number of travelers are seeking immersive experiences and thrilling adventures.</p><br>
                <p>True to our vision, To Innovate Adventures, Preserve Culture and Advance Communities, Yardy has a rich rich product portfolio and unique selling prepositions that are appealing to both local and international travelers.</p>
                
            </div>
        </section>

       <section class="image-text-section">
            <div class="container">
                
                <h1 class="ob"><strong>Benefits:</strong></h1>
   <img src="/demo/assets/images/frontend/blog/PictureISPBenefits.png" alt="">
            </div>
        </section>

    <div class="container">
      <a href="https://docs.google.com/forms/d/e/1FAIpQLSet54wEKNEQJVxaSJRQfpSr_CdgogvuDIweZZ3QGA7l1GE6VQ/viewform"><button class="cta-btn">Register Now</button></a>
    </div>

        <section class="image-text-section">
       <div class="container-md">
    <h3 class="text-center mt-4">Yardy Unique Selling Proposition</h3>
    <div class="table-responsive">
        <table class="sellingTable">
            <thead>
                <tr class="text-center p-2">
                    <th scope="col">Aspect</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Product<br>
                    <strong>UNIQUE</strong> – Authentic experiences are not readily duplicated.
                  </th>
                    <td>
                        
                        <ul>
                            <li>Seamless augmentation of natural, rustic environment that provide authentic immersive experiences for a variety of nature lovers and eco-culture adventurers:</li>
                            <li><strong>Westmoreland</strong> rainfall is above the national average and the watersheds are preserved limestone mountains that provide a flow of high-quality water all year round. The rushing waters of the Roaring River cascades into deeper and more dramatic Cabaritta with pristine blue holes and shallow water for hiking or lounging.</li>
                            <li>The Georges Plain is used traditionally for farming and has vast expanses of meadows.</li>
                            <li>The surrounding mountains are home to a wide range of flora, fruits, curative herbs, and well-preserved rural living heritage.</li>
                        </ul>
                        
                    </td>
                </tr>
                <tr>
                    <th scope="row">Place<br>
                        <strong>COMPARATIVE ADVANTAGE</strong> – Proximity and diverse product offering minimize travelling time for single or multiple experiences.
                    </th>
                    <td>
                        <ul>
                            <li> Proximity to resort areas: <strong>Montego Bay | Negril | South Coast</strong></li>
                            <li> Improving road network: Montego Bay Bypass and South Coast Highway</li>
                            <li> Proximity to additional resort areas: <strong>Falmouth | Ocho Rios | Kingston</strong></li>
                            <li> Proximity to Jamaica: Corporate Clients</li>
                            <li> 80% of tourists in Negril opt for an excursion outside of <strong>Westmoreland</strong> and Hanover because of limited options in these parishes.</li>
                        </ul>
                        
                    </td>
                </tr>
                <tr>
                    <th scope="row">Price<br>
                        <strong>COMPETITIVE ADVANTAGE</strong> – Distinguished product is sold at competitive market prices.
                    </th>
                    <td>
                        <ul>
                            <li> Differentiated products are priced competitively.</li>
                            <li> Competitive prices can be leveraged for promotional packages and wholesaling.</li>
                        </ul>
                        
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                      Markets <br>
                      <strong>COMPREHENSIVE</strong> - marketing and sales strategy has dynamic components that appeal to market segments.
                    </th>

                    <td>
                        <ul>
                            <li> Distinguished Segments of Adventurists: <strong>Soft, Moderate, and Hard</strong></li>
                            <li> Nature | Culture | Gastronomy</li>
                            <li> Multiple Dimensions: <strong>Individuals | Family | Friends | Social & Corporate Groups</strong></li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

        </section>

    <section class="image-text-section">
      <img src="assets/images/frontend/blog/bn3.png" alt="Placeholder Image">
      <div class="text">
        <h3>Terms of Reference</h3>
        <p><strong>Independent Sellers Will:</strong></p>
        <ol>
          <li>1. Registration</li>
          <li>2. Attend and participate in ISP training workshops</li>
          <li>3. Leverage or augment own marketing and selling channels to sell Yardy product via a unique QR Code </li>
          <li>4. Utilize Yardy resources only for the purpose intended:  to create and maintain a positive brand </li>
          <li>5. Sell standardized products as displayed on yardyadventures.com or communicate directly<br> with Manager, Planning and Market Relations for customized groups</li><br>
        </ol>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSet54wEKNEQJVxaSJRQfpSr_CdgogvuDIweZZ3QGA7l1GE6VQ/viewform"><button class="cta-btn">Register Now</button></a>
      </div>
    </section>

  </main>

</body>

    <!-- all js link -->
    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://yardyadventures.com/demo/assets/common/js/jquery-3.7.1.min.js"></script>
<script src="https://yardyadventures.com/demo/assets/common/js/bootstrap.bundle.min.js"></script>

<script src="https://yardyadventures.com/demo/assets/presets/default/js/popper.min.js"></script>
<script src="https://yardyadventures.com/demo/assets/presets/default/js/slick.min.js"></script>
<script src="https://yardyadventures.com/demo/assets/presets/default/js/jquery.magnific-popup.min.js"></script>
<script src="https://yardyadventures.com/demo/assets/presets/default/js/odometer.min.js"></script>
<script src="https://yardyadventures.com/demo/assets/presets/default/js/viewport.jquery.js"></script>
<script src="https://yardyadventures.com/demo/assets/presets/default/js/smoothscroll.min.js"></script>
<script src="https://yardyadventures.com/demo/assets/presets/default/js/lightcase.js"></script>
<script src="https://yardyadventures.com/demo/assets/presets/default/js/datepicker.min.js"></script>
<script src="https://yardyadventures.com/demo/assets/presets/default/js/datepicker.en.js"></script>
<script src="https://yardyadventures.com/demo/assets/presets/default/js/wow.min.js"></script>
<script src="https://yardyadventures.com/demo/assets/admin/js/select2.min.js"></script>
<script src="https://yardyadventures.com/demo/assets/common/js/ckeditor.js"></script>
<script src="https://yardyadventures.com/demo/assets/presets/default/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script>
   function addToWishlist(element) {

    "use strict"

        var isAddingToWishlist = false;
        var isLoggedIn = false;

        if (!isAddingToWishlist && isLoggedIn) {
            isAddingToWishlist = true;
            var propertyId = $(element).data('id');

            $.ajax({
                url: 'https://yardyadventures.com/demo/client/property-wishlist-add',
                type: 'get',
                data: {
                    propertyId: propertyId,
                },
                complete: function() {
                    isAddingToWishlist = false;
                },
                success: function(response) {
                    if (response.hasOwnProperty('message')) {
                        Toast.fire({
                            icon: 'success',
                            title: response.message
                        });
                        var heartIcon = $(element).find('i');
                        heartIcon.removeClass('far fa-heart').addClass('fas fa-heart');
                    } else {
                        Toast.fire({
                            icon: 'warning',
                            title: response.error
                        });
                    }
                },
                error: function(xhr, status, error) {
                    var errorMessage = 'Error occurred while adding the item to the wishlist.';
                    Toast.fire({
                        icon: 'error',
                        title: errorMessage
                    });
                }
            });
        } else {
            var errorMessage = 'Please log in to add items to your wishlist and insure are you client?';
            Toast.fire({
                icon: 'warning',
                title: errorMessage
            });

            isAddingToWishlist = false;
        }
    }
</script>
        <script src="https://yardyadventures.com/demo/assets/common/js/sweetalert2.min.js"></script>
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-right',
        customClass: {
            popup: 'colored-toast'
        },
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
</script>




<script>
    (function ($) {
        "use strict";

        $(".langSel").on("change", function() {
            window.location.href = "https://yardyadventures.com/demo/change/"+$(this).val() ;
        });

        $('.policy').on('click',function(){
            $.get('https://yardyadventures.com/demo/cookie/accept', function(response){
                $('.cookies-card').addClass('d-none');
            });
        });

        setTimeout(function(){
            $('.cookies-card').removeClass('hide')
        },2000);

    })(jQuery);
</script>

</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'},{'ap':'cpsh-oh'},{'server':'p3plzcpnl506098'},{'dcenter':'p3'},{'cp_id':'9984899'},{'cp_cl':'8'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/traffic-assets/js/tccl.min.js'></script></html>
<?php require"home_footer.php";?>
     
</html>
