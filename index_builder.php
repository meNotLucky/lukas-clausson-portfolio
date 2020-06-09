<?php

// Read page_header.html
$header = file_get_contents('content/page_header.html');

// Read Projects JSON
$projects_data = file_get_contents('content/projects.json');
$projects = json_decode($projects_data);

// Read page_footer.html
$footer = file_get_contents('content/page_footer.html');


$proj_01 =
'<div class="site-section" id="portfolio-section">
    <div class="container">
        <div class="row mb-5 ">
            <div class="col-md-7 section-title text-center mx-auto">
                <span class="sub-title mb-2 d-block">Portfolio</span>
                <h2 class="title text-primary mb-3">Latest Games & Projects</h2>
            </div>
        </div>'
;

$proj_02 = "";

$flip = true;
foreach($projects as $proj) :


$proj_02 += '<div class="row mb-5">';

$proj_02 += ($flip ? "<div class='col-lg-6 mb-4 mb-lg-0'>" : "<div class='col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0'>");

$proj_02 += '<img src="<?php echo $proj->splash; ?>" alt="Image" class="img-fluid">
        <p></p>
        <div class="owl-carousel slide-one-item normal-slider">';

foreach($proj->screenshots as $path) {
    $proj_02 += "<div class='slide'><img src='{$path}' alt='Image' class='img-fluid'></div>";
}
        
$proj_02 += '</div>
        <table style="margin-top: 40px;" class="table table-striped table-borderless">
          <thead>
            <th>Specifications</th>
          </thead>
          <tbody>
            <tr>
              <th>Engine</th>
              <th><?php echo $proj->specs->engine; ?></th>
            </tr>
            <tr>
              <th>Platform(s)</th>
              <th><?php echo $proj->specs->platform; ?></th>
            </tr>
            <tr>
              <th>Input</th>
              <th><?php echo $proj->specs->input; ?></th>
            </tr>
          </tbody>
        </table>
      </div>';

$proj_02 += ($flip ? "<div class='col-lg-5 h-100 jm-sticky-top ml-auto'>" : "<div class='col-lg-5 h-100 jm-sticky-top mr-auto order-2 order-lg-1'>");
        
$proj_02 += '<h3>';
$proj_02 += $proj->title;
$proj_02 += '</h3>
        <p class="sub-text mb-4"><strong>';
$proj_02 += $proj->position;
$proj_02 += '</strong></p>';

foreach($proj->text as $p)
{
    $proj_02 += "<p class='mb-4'>{$p}</p>";
}

$proj_02 += '<p><a data-fancybox data-ratio="2" href="';
$proj_02 += $proj->trailer;

$proj_02 += '" class="d-flex align-items-center"><span class="icon-play_circle_outline h4 m-0 mr-2"></span> <span>Watch the trailer</span></a></p>
        <p class="mb-4"><a href="';
$proj_02 += $proj->website;
$proj_02 += '" class="readmore" target="blank">Visit Game Website</a></p>
        <div class="testimonial h-100">
          <blockquote class="mb-3">
            <p>&ldquo;';
$proj_02 += $proj->quote->text;
$proj_02 += '&rdquo;</p>
          </blockquote>
          <div class="d-flex align-items-center vcard">
            <figure class="mb-0 mr-3">
              <img src="';
$proj_02 += $proj->quote->author_img;
$proj_02 += '" alt="Image" class="img-fluid ounded-circle">
            </figure>
            <div class="vcard-text">
              <span class="d-block">';
$proj_02 += $proj->quote->author;
$proj_02 += '</span>
              <span class="position">';
$proj_02 += $proj->quote->author_title;
$proj_02 += '</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <hr>';

endforeach;

$page_content = $header + $proj_01 + $proj_02 + $footer;

file_put_contents('index.html', $page_content);

?>