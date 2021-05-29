<!-- Class Getter Setter -->
<?php class aboutme {
	private $panggilan;
	private $asal;
	private $univ;
	private $jurusan;
 
	public function setpanggilan($a){
		$this->panggilan = $a;
	}
	public function setasal($a){
		$this->asal = $a;
	}
	public function setuniv($a){
		$this->univ = $a;
	}
	public function setjurusan($a){
		$this->jurusan = $a;
	}
 
	public function getpanggilan() {
		return $this->panggilan; 
	}
	public function getasal() {
		return $this->asal;
	}
	public function getuniv() {
		return $this->univ;
	}
	public function getjurusan() {
		return $this->jurusan;
	}
}
 

// object
$aboutme = new aboutme;

$aboutme->setpanggilan("Adel");
$aboutme->setasal("Purwokerto");
$aboutme->setuniv("Diponegoro University");
$aboutme->setjurusan("Computer Engineering");


?>

<!-- Jumbotron -->
    <section class="jumbotron text-center ">
      <img src="img/profil.jpeg" class="rounded-circle mb-3" alt="Felisiana" width="300" />
      <h1 >Felisiana Ardelia Azzahra</h1>
    </section>
<!-- Akhir Jumbrotron -->

<!-- batas -->

<!-- About -->
<section id="about">
      <div class="container">

        <div class="row text-center mb-3 text-white">
          <div class="col">
            <h2>About Me</h2>
          </div>
        </div>

        <div class="row justify-content-center fs-5 text-center">
            <div class="col-md-6 mb-3 text-white">
                    <?php 
                    echo "Hello fren! My name is Felisiana Ardelia Azzahra. You can call me "
                    .$aboutme->getpanggilan(). "." ;
                    echo " I live in "
                    .$aboutme->getasal(). "." ;
                    echo " Student at "
                    .$aboutme->getuniv(). "" ; 
                    echo " majoring in "
                    .$aboutme->getjurusan(). "." ;    ?>
            </div>
      </div>

      <div class="row text-center mb-3 text-white">
          <div class="col">
          <a href="img/CV.pdf" class="btn text-white stretched-link" style="background-color: #194350">Curriculum Vitae</a>
          </div>
        </div>

</div>

<!-- batas -->

</section> 
<!-- Akhir About -->


<!-- Services-->
<section class="page-section" id="services">
            <div class="container px-4 px-lg-5 mb-5">
                <h2 class="text-center mt-0">Available for Freelance</h2>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-brush fs-1 " style="color: #194350" ></i></div>
                            <h3 class="h4 mb-2">Design</h3>
                            <p class="text-muted mb-0">Ilustration, Graphic Design, UI/UX, Motion Graphic</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-pencil-square fs-1 " style="color: #194350" ></i></div>
                            <h3 class="h4 mb-2">Content Creator</h3>
                            <p class="text-muted mb-0">Content Management, Copywriting, Digital Advertising</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-camera-reels fs-1 " style="color: #194350" ></i></div>
                            <h3 class="h4 mb-2">Videography</h3>
                            <p class="text-muted mb-0">Animation, Media Management, Transcription</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-code fs-1 " style="color: #194350" ></i></div>
                            <h3 class="h4 mb-2">Programming</h3>
                            <p class="text-muted mb-0">Html, CSS, PHP, Python, Java, C++ </p>
                        </div>
                    </div>
                </div>
            </div>

        
            
        </section>
<!-- Akhir service -->
<!-- Find me -->

<section id="find">
      <div class="container">

        <div class="row text-center text-white mb-3">
          <div class="col">
            <h2>Find me</h2>
          </div>
        </div>

        <div class="row justify-content-center fs-5 text-center">

            <div class="col-lg-1 col-md-2 text-center">
                <a href="https://www.instagram.com/felisianarz/" target="_blank">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-instagram fs-1 " style="color: #ffffff" ></i></div>
                        </a>
                    </div>
            </div>

            <div class="col-lg-1 col-md-2 text-center">
                <a href="https://github.com/felisianarz" target="_blank">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-github fs-1 " style="color: #ffffff" ></i></div>
                        </a>
                    </div>
            </div>


            <div class="col-lg-1 col-md-2 text-center">
                <a href="https://www.linkedin.com/in/felisiana-ardelia-azzahra-884202208/" target="_blank">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-linkedin fs-1 " style="color: #ffffff" ></i></div>
                        </a>
                    </div>
            </div>
            
        </div>

      </div>
   
</section> 

<!-- Akhir Finde me -->
