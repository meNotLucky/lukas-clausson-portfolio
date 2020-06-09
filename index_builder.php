<?php

// Read page_header.html
$page_content = file_get_contents('content/page_header.html');

// Read Projects JSON
$projects_data = file_get_contents('content/projects.json');
$projects = json_decode($projects_data);

$flip = true;
foreach($projects as $proj) :


$page_content .= '<div class="row mb-5">';

$page_content .= ($flip ? "<div class='col-lg-6 mb-4 mb-lg-0'>" : "<div class='col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0'>");

$page_content .= '<img src="';
$page_content .= $proj->splash;
$page_content .= '" alt="Image" class="img-fluid">
        <p></p>
        <div class="owl-carousel slide-one-item normal-slider">';

foreach($proj->screenshots as $path) {
    $page_content .= "<div class='slide'><img src='{$path}' alt='Image' class='img-fluid'></div>";
}
        
$page_content .= '</div>
        <table style="margin-top: 40px;" class="table table-striped table-borderless">
          <thead>
            <th>Specifications</th>
          </thead>
          <tbody>
            <tr>
              <th>Engine</th>
              <th>';
$page_content .= $proj->specs->engine;
$page_content .= '</th>
            </tr>
            <tr>
              <th>Platform(s)</th>
              <th>';
$page_content .= $proj->specs->platform;
$page_content .= '</th>
            </tr>
            <tr>
              <th>Input</th>
              <th>';
$page_content .= $proj->specs->input;
$page_content .= '</th>
            </tr>
          </tbody>
        </table>
      </div>';

$page_content .= ($flip ? "<div class='col-lg-5 h-100 jm-sticky-top ml-auto'>" : "<div class='col-lg-5 h-100 jm-sticky-top mr-auto order-2 order-lg-1'>");
        
$page_content .= '<h3>';
$page_content .= $proj->title;
$page_content .= '</h3>
        <p class="sub-text mb-4"><strong>';
$page_content .= $proj->position;
$page_content .= '</strong></p>';

foreach($proj->text as $p)
{
    $page_content .= "<p class='mb-4'>{$p}</p>";
}

$page_content .= '<p><a data-fancybox data-ratio="2" href="';
$page_content .= $proj->trailer;

$page_content .= '" class="d-flex align-items-center"><span class="icon-play_circle_outline h4 m-0 mr-2"></span> <span>Watch the trailer</span></a></p>
        <p class="mb-4"><a href="';
$page_content .= $proj->website;
$page_content .= '" class="readmore" target="blank">Visit Game Website</a></p>
        <div class="testimonial h-100">
          <blockquote class="mb-3">
            <p>&ldquo;';
$page_content .= $proj->quote->text;
$page_content .= '&rdquo;</p>
          </blockquote>
          <div class="d-flex align-items-center vcard">
            <figure class="mb-0 mr-3">
              <img src="';
$page_content .= $proj->quote->author_img;
$page_content .= '" alt="Image" class="img-fluid ounded-circle">
            </figure>
            <div class="vcard-text">
              <span class="d-block">';
$page_content .= $proj->quote->author;
$page_content .= '</span>
              <span class="position">';
$page_content .= $proj->quote->author_title;
$page_content .= '</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <hr>';

$flip = !$flip;
endforeach;

// Read page_footer.html
$page_content .= file_get_contents('content/page_footer.html');

file_put_contents('index.html', $page_content);

?>