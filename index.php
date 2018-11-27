<!doctype html>
<html lang="en">

<head>
  <title>Easy-2-Fly</title>

  <link rel="shortcut icon" href="/img/logo2.png" type="image/png">

  <!-- Reset CSS -->
  <link rel="stylesheet" href="style/reset.css">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">

  <!-- Default CSS -->
  <link rel="stylesheet" href="style/default.css">


</head>

<body>
  <!-- Header start -->
  <header>
    <div class="header_container">
      <div class="row header_row">
        <div class="col col-lg-4 col-12 header_col">
          <a id="logo" class="header_title" href="/">
            Easy-2-Fly
          </a>
          <!-- <div class="header_logo"></div> -->
        </div>
        <div class="col col-lg-2 col-3 header_col">
          <a id="menu" class="header_title" href="/">
            MAIN
          </a>
        </div>
        <div class="col col-lg-2 col-3 header_col ">
          <a id="category" class="header_title" href="index.php?page=category">
            CATEGORY
          </a>
        </div>
        <div class="col col-lg-2 col-3 header_col">
          <a id="about" class="header_title" href="index.php?page=about">
            ABOUT
          </a>
        </div>
        <div class="col col-lg-2 col-3 header_col">
          <a id="FAQ" class="header_title" href="index.php?page=faq">
            FAQ
          </a>
        </div>
      </div>
      <!-- /.row header_row -->
    </div>
    <!-- /.header_container -->
  </header>
  <!-- Header end -->

  <!-- Main start -->
  <main>
    
    <?php
$page = $_GET['page'];

  if (!isset($page)) {
        require('main.php');
    } elseif ($page == 'category') {
        require('category.php');
    }elseif ($page == 'about') {
        require('about.php');
    }elseif ($page == 'faq') {
        require('faq.php');
    }
    ?>

  <?php 
    if(is_array($data)){
  ?>

    <div class="infoblock">
      <h2 class="infoblock"></h2>
    </div>

<?php foreach ($data as $product){ ?>
        <div class="infoblock">
        <?php echo "<img src='/".$product['Image']."'>" ?>
            <h2 class="infoblock">
                <?php echo $product['Product_name'] ?>
</h2>
    <?php echo $product['Description'] ?><br>

</div>

<?php }

 }elseif(is_string($data)){?>

 <div class="infoblock goose"> <?php  echo $data ?> </div>


<?php } ?>

</body>
</html>

  </main>
  <!-- Main end -->

  <!-- Footer start -->
  <footer>
    <div class="footer_container">
      <div class="footer_image">
        <div class="footer_gray">
          <div class="footer_article"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab inventore obcaecati quo beatae magnam error quos repudiandae modi, tenetur atque.</div>
          <div class="footer_article">Contact with us</div>
          <div class="footer_about">misha9d@gmail.com</div>
          <div class="footer_about">Kiev, Lomosova 55</div>
          <div class="footer_about">(+380)50-771-17-67</div>
          <div class="footer_about">Copyright © Easy-2-Fly</div>
        </div>
      </div>
      <!-- /.footer_gray -->
      <!-- /.footer_image -->
    </div>
    <!-- /.footer_container -->
  </footer>
  <!-- Footer end -->

  <!-- Java script start -->
  <!-- My JavaScript -->
  <script src="scripts/script.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
    crossorigin="anonymous"></script>
  <!-- Java script end -->

</body>

</html>