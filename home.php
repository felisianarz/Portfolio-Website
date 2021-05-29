<!-- Class & Constructor -->
<?php 
class home{
      public $name;
    
      function __construct($name) {
        $this->name = $name; 
      }
      function get_name() {
        return $this->name;
      }
    }
    
    $porto = new home("Welcome to my portofolio");
?>
    
<!-- Jumbotron -->
<section class="jumbotron text-center">
      <img src="img/home.png" alt="Felisiana" width="700" />
      <h1 ><?php echo $porto->get_name();  ?></h1>
</section>
<!-- Akhir Jumbrotron -->
