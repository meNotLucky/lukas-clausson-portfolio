<?php

// Get index_header.html
$header = file_get_contents('building/index_header.html');
if(!$header) {
  printf("index_header could not be read!\n");
  sleep(10);
  return;
}

$page_content .= $header;
printf("Read index_header...\n");

// Read Projects JSON
$projects_data = file_get_contents('building/projects.json');
if(!$projects_data) {
  printf("projects.json could not be read!\n");
  sleep(10);
  return;
}

printf("Read projects.json...\n");

$projects = json_decode($projects_data);
if($projects == null)
{
  printf("Data could not be decoded from projects.json!\n");
  sleep(10);
  return;
}

printf("Decoded projects from JSON data...\n");

$page_content .=
"<section id='portfolio' class='portfolio'>
  <div class='container'>

    <div class='section-title'>
      <h2>Portfolio</h2>
      <p>Hello! My name is Lukas and this is my portfolio. Here you can find all the games and projects I've worked on. You will also find a bit of information about me and what I do, my previous experiences, my skills and links to my social media.<br /><br />Welcome to my page! Feel free to look around.<br />// Lukas <i class='bx bxs-heart' ></i></p>
    </div>

    <div class='row' data-aos='fade-up'>
      <div class='col-lg-12 d-flex justify-content-center'>
        <ul id='portfolio-flters'>
          <li data-filter='*' class='filter-active'>All</li>
          <li data-filter='.filter-student-games'>Student Games</li>
          <li data-filter='.filter-personal-projects'>Personal Projects</li>
        </ul>
      </div>
    </div>

    <div class='row portfolio-container' data-aos='fade-up' data-aos-delay='100'>";

// CARDS

foreach($projects as $proj) :

      $page_content .=
      "<div class='col-lg-4 col-md-6 portfolio-item filter-{$proj->filter}'>
        <button data-bs-toggle='modal' data-bs-target='#{$proj->id}' class='portfolio-wrap'>
          <img src='{$proj->splash}' class='img-fluid rounded-3' alt=''>
          <div class='portfolio-links'>
            <i class='bx bx-window-open bx-md'></i>
          </div>
        </button>
        <h5 style='margin-top: 10px;'>{$proj->title}</h5>
      </div>";

endforeach;

$page_content .=
    "</div>
  </div>";

// MODALS

foreach($projects as $proj) :

$page_content .=
  "<div class='modal fade' id='{$proj->id}' tabindex='-1' aria-labelledby='{$proj->id}Label' aria-hidden='true'>
    <div class='modal-dialog modal-xl'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h5 class='modal-title' id='{$proj->id}Label'>{$proj->title}</h5>
          <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        </div>
        <div class='modal-body'>

          <section id='portfolio-details' class='portfolio-details'>
            <div class='container'>

              <div class='row gy-4'>

                <div class='col-lg-8'>

                  <div class='owl-carousel {$proj->id}-owl owl-theme owl-loaded'>";
if($proj->trailer != null)
{
  $page_content .= "
                    <div class='item-video' data-merge='3'>
                      <a data-fancybox href='{$proj->trailer}'>
                        <img src='{$proj->splash}' alt='Image' class='item'>
                        <div class='item video-overlay'>
                          <img src='assets/vendor/owl/assets/owl.video.play.png' alt='Image'>
                        </div>
                      </a>
                    </div> ";
}

foreach($proj->screenshots as $path) {
  $page_content .= "<img src='{$path}' alt='Image' class='item'>";
}
                          
$page_content .= "</div>
                  <div class='portfolio-description'>
                    <p>";

  foreach($proj->text as $p)
  {
  $page_content .=  "<p>{$p}</p>";
  }

$page_content .=
                   "</p>
                  </div>
                </div>
                <div class='col-lg-4'>

                  <div class='portfolio-info'>
                    <h3>Project information</h3>
                    <ul>";
if($proj->position != null)
{
  $page_content .=   "<li><strong>My Position</strong>: {$proj->position}</li>";
}
if($proj->specs->engine != null)
{
  $page_content .=   "<li><strong>Engine</strong>: {$proj->specs->engine}</li>";
}
if($proj->specs->language != null)
{
  $page_content .=   "<li><strong>Language</strong>: {$proj->specs->language}</li>";
}
if($proj->specs->platform != null)
{
  $page_content .=   "<li><strong>Platform(s)</strong>: {$proj->specs->platform}</li>";
}
if($proj->specs->input != null)
{
  $page_content .=   "<li><strong>Input</strong>: {$proj->specs->input}</li>";
}
$page_content .=
                   "</ul>
                    <a target='blank' class='readmore' href='{$proj->website}'><strong>Website</strong></a>
                  </div>";

if($proj->quote != null)
{
  $page_content .=
                 "<section id='testimonials' class='testimonials'>
                    <div class='testimonial-item'>
                      <p>
                        <i class='bx bxs-quote-alt-left quote-icon-left'></i>
                        {$proj->quote->text}
                        <i class='bx bxs-quote-alt-right quote-icon-right'></i>
                      </p>
                      <img src='{$proj->quote->author_img}' class='testimonial-img' alt=''>
                      <h3>{$proj->quote->author}</h3>
                      <h4>{$proj->quote->author_title}</h4>
                    </div>
                  </section>";
}

if($proj->extra != null)
{
  $page_content .=
                 "<section id='extra' class='extra'>
                    {$proj->extra}
                  </section>";
}

$page_content .=
               "</div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>";

endforeach;

$page_content .=
"</section><!-- End Portfolio Section -->";

printf("Generated projects from JSON data...\n");

// Get index_main.html
$main = file_get_contents('building/index_main.html');
if(!$main) {
  printf("index_main could not be read!\n");
  sleep(10);
  return;
}

$page_content .= $main;
printf("Read index_main...\n");

// Get index_footer.html
$footer = file_get_contents('building/index_footer.html');
if(!$footer) {
  printf("index_footer could not be read!\n");
  sleep(10);
  return;
}

$page_content .= $footer;
printf("Read index_footer...\n");

// Generate owl-carousel scripts

foreach($projects as $proj) :

$page_content .=
"
<script>
  $(document).ready(function(){
    $('.{$proj->id}-owl').owlCarousel({
      items:1,
      merge:true,
      loop:true,
      margin:10,
      video:true,
      lazyLoad:true,
      center:true,
      nav:true
    });
  });
</script>
";

endforeach;

$page_content .=
"<!-- Template Main JS File -->
<script src='assets/js/main.js'></script>

</body>

</html>";

printf("Generated JS scripts...\n");

if(file_put_contents('index.html', $page_content) == false) {
  printf("Index could not be created!\n");
  sleep(10);
  return;
}

printf("Index was created!\n");

?>