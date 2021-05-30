<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Message</title>
  </head>
  <body>

  <section id="about">
      <div class="container">

        <div class="row text-center mt-5 mb-3">
          <div class="col">

            <!-- Variable, Tipe data -->
            <h2><?php 
            $makasi="Thank you!";
            echo $makasi; ?></h2>

          </div>
        </div>

        <div class="row justify-content-center fs-5 text-center">
            <div class="col-md-6">

            <!-- POST -->
            Hello <?php echo $name = $_POST['name'];?>, your messages will be forward<br>
            Your email address is <?php echo $email = $_POST['email']; ?> <br>
            Your message is <?php echo $message = $_POST['message']; ?>

            </div>   
      </div>

      <div class="row text-center mt-3 mb-3 text-white">
          <div class="col">
          <a href="index.php?tab=home" class="btn text-white stretched-link" style="background-color: #194350">Home</a>
          </div>
        </div>

    </section> 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
