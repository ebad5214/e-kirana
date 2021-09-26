<?php

include 'header.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>e-Kirana</title>
  </head>
  <body id="flour">
   
      <!--Jumbotron Starts-->
      <div class="jumbotron" style="background-color: grey; border: 1px solid black;">
        <div class="container"> 
          <h1 class="display-3 " style="text-align: center; color: wheat;" >We got Best Flour (Atta)</h1>
          <h5 style="color: rgba(12, 8, 1, 0.884);">It’s a known fact – India is obsessed with their rotis but we Have the best atta brands that you can buy? Fresh atta rotis or chapatis are part of every Indian’s staple diet and any meal is incomplete without a hot, puffed up fresh atta roti. To make fresh atta rotis, you will need atta (obviously).</h5>
        </div>
      </div>
      <!--Body sections starts here-->
      <div class="container p-3 my-3 bg-dark text-white">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card bg-secondary" style="width: 18rem;">
              <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Aashirvad Atta</h5>
                <p class="card-text">AASHIRVAAD promises you only the most delightful rotis straight from your kitchen complete with your love and care through your preparation.
                </p>
                <div style="margin-left: 73px;">
                    <a href="#" class="btn btn-warning" >₹350/10kg</a>
                </div>
                <div style="margin-left: 79px;">
                <a href="#" class="btn btn-primary" >Buy Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card bg-secondary" style="width: 18rem;">
              <img src="https://www.bigbasket.com/media/uploads/p/l/40120175_5-fortune-chakki-fresh-atta-100-atta-0-maida250x250.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Fortune Atta</h5>
                <p class="card-text">Light and fluffy rotis are guaranteed, with the asli phulke wala atta! Made with the finest wheat crops, Fortune Chakki Fresh Atta ensures with every meal your loved ones say, ek phulka aur.</p>
                <div style="margin-left: 73px;">
                    <a href="#" class="btn btn-warning" >₹350/10kg</a>
                </div>
                <div style="margin-left: 79px;">
                  <a href="#" class="btn btn-primary" >Buy Now</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card bg-secondary" style="width: 18rem;">
              <img src="https://5.imimg.com/data5/SELLER/Default/2021/7/YN/HU/CD/61781604/images-4--250x250.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Annapurna atta</h5>
                <p class="card-text">Annapurna fresh is a brand of our unit 100% wheat atta made of finest wheat from m.p.. Annapurna Earthcare & Agritech Private Limited.</p>
                <div style="margin-left: 73px;">
                    <a href="#" class="btn btn-warning" >₹350/10kg</a>
                </div>
                <div class="pull-right">
                  <div style="margin-left: 79px;">
                    <a href="#" class="btn btn-primary" >Buy Now</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card bg-secondary" style="width: 18rem;">
              <img src="https://5.imimg.com/data5/DO/OF/MY-27708317/shakti-bhog-mp-wheat-chakki-atta-250x250.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Shakti Bhog Atta</h5>
                <p class="card-text">Shakti Bhog Atta is prepared out of high quality wheat selected from best harvest. It is easy to digest, excellent taste, clean and good for health.</p>
                <div style="margin-left: 73px;">
                    <a href="#" class="btn btn-warning" >₹350/10kg</a>
                </div>
                <div style="margin-left: 79px;">
                  <a href="#" class="btn btn-primary" >Buy Now</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card bg-secondary" style="width: 18rem;">
              <img src="https://5.imimg.com/data5/QK/UV/MY-16411869/nature-fresh-sampoorna-chakki-atta-250x250.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Nature Fresh Atta</h5>
                <p class="card-text">Nature Fresh flour is made from the finest quality wheat grains. Nature Fresh prides itself on its selection of high quality, natural ingredients that are processed right, to produce atta that is just the right texture.</p>
                <div style="margin-left: 73px;">
                    <a href="#" class="btn btn-warning" >₹350/10kg</a>
                </div>
                <div style="margin-left: 79px;">
                  <a href="#" class="btn btn-primary" >Buy Now</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card bg-secondary" style="width: 18rem;">
              <img src="https://5.imimg.com/data5/WK/MT/AO/SELLER-51853993/patanjali-atta-250x250.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Patanjali Atta</h5>
                <p class="card-text">Patanjali Traditional Whole Wheat with Bran Chakki Atta comes with the goodness of whole wheat and offers the complementary goodness of bran.</p>
                <div style="margin-left: 73px;">
                    <a href="#" class="btn btn-warning" >₹350/10kg</a>
                </div>
                <div style="margin-left: 79px;">
                  <a href="#" class="btn btn-primary" >Buy Now</a>
                  </div>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card bg-secondary" style="width: 18rem;">
              <img src="https://5.imimg.com/data5/ANDROID/Default/2021/4/OD/KZ/BQ/7245685/product-jpeg-250x250.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">TATA Sampann Atta</h5>
                <p class="card-text">Tata Sampann's Toor Dal is of best quality from select farms in Latur. Mainly used to prepare sambar, dal tadka, the maharashtrian varan and more.</p>
                <div style="margin-left: 73px;">
                    <a href="#" class="btn btn-warning" >₹350/10kg</a>
                </div>
                <div style="margin-left: 79px;">
                    <a href="#" class="btn btn-primary" >Buy Now</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card bg-secondary" style="width: 18rem;">
              <img src="https://5.imimg.com/data5/NB/BJ/MY-25678251/laxmi-bhog-wheat-flour-250x250.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Laxmi Bhog Atta</h5>
                <p class="card-text">The brand Laxmi Bhog Atta has an Agmark certification, which is a synonym of good quality. We produce 'A' grade atta from a 10 chakki plant. </p>
                <div style="margin-left: 73px;">
                    <a href="#" class="btn btn-warning" >₹350/10kg</a>
                </div>
                <div style="margin-left: 79px;">
                  <a href="#" class="btn btn-primary" data-toggle="tooltip" title="₹85">Buy Now</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card bg-secondary" style="width: 18rem;">
              <img src="https://5.imimg.com/data5/BN/LI/MS/SELLER-22139392/rajdhani-chakki-fresh-atta-250x250.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Rajdhani Chakki Atta</h5>
                <p class="card-text">Exceptionally good quality of wheat is responsible for Rajdhani Atta becoming a household name. Latest machines and technology churn out Atta with a quality.</p>
                <div style="margin-left: 73px;">
                    <a href="#" class="btn btn-warning" >₹350/10kg</a>
                </div>
                <div style="margin-left: 79px;">
                  <a href="#" class="btn btn-primary" >Buy Now</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Body content terminates here-->
      <!-- Footer -->
      <?php

include 'footer.php';

?>
  <!--footer terminates here-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
     <!-- Option 2: Separate Popper and Bootstrap JS -->
     <!--
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>