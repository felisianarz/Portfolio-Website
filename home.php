<!-- Class & Constructor -->
<?php 
class home{
      public $welcome;
    
      function __construct($welcome) {
        $this->welcome = $welcome; 
      }
      function get_welcome() {
        return $this->welcome;
      }
    }
    
    $porto = new home("Welcome to my portofolio");
?>
    
<!-- Jumbotron -->
<section class="jumbotron text-center">
      <img src="img/home.png" alt="Felisiana" width="700" />
      <h1 ><?php echo $porto->get_welcome();  ?></h1>
</section>
<!-- Akhir Jumbrotron -->
