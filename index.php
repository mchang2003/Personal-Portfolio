<!DOCTYPE html>

<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>
 <?php if (get_theme_mod($home_top_img)) { ?> 
  <img 
    src="<?php echo get_theme_mod($home_top_img) ?>" 
    alt=""
  >
<?php } ?>
<?php if (get_theme_mod($home_top_desc)) { ?>
  <h4>
    <?php echo get_theme_mod($home_top_desc) ?>
  </h4>
<?php } ?>
<!-- Example with default video if $home_top_vid isn't set -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div id = "home"> 
  <h3 class = "typewriter"> Hello World! My name is Mitchell! </h3>
  <h4> Welcome to my website! </h4>
</div>
<!-- about me start -->
<div class = "diagonal-box"> 
  <div id = "aboutMe">
  About Me!
 </div>
<ul id = "aboutMeList">
  <li> <img class = "image-size" src="<?php echo get_template_directory_uri(); ?>/c++.png" /> </li>
  <li>         </li>
  <li class = "body-text aboutText"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit adipisci quae in iusto dolores reiciendis alias eum eligendi repudiandae explicabo minus pariatur, cumque praesentium cum nobis ea optio nisi commodi.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus commodi consequatur voluptas, vel minus ex natus inventore doloremque consequuntur iusto, est ad aspernatur similique, laudantium voluptate culpa illo tenetur in.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores recusandae ex tempora sapiente, mollitia quibusdam maiores cumque odio magni. Harum quisquam quidem illum necessitatibus adipisci rem modi fugiat ratione autem.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla corrupti provident non, fugit recusandae aliquam atque aut vero voluptatibus, aliquid voluptatum cum ea laboriosam nemo reiciendis eveniet incidunt perspiciatis officiis. 
  </li>
</ul>

</div>
<div>
  <h1> Some languages I'm getting used to!</h1>
  <ul class = "horizontal" id = "spacing">
    <li><img class = "image-size" src="<?php echo get_template_directory_uri(); ?>/c++.png" /></li>
    <li><img class = "image-size" src="<?php echo get_template_directory_uri(); ?>/python.png"/> </li>
    <li><img class = "image-size" src="<?php echo get_template_directory_uri(); ?>/css.png"/> </li>
  </ul>
</div>
<!-- about me end -->
<!-- Projects section start-->
<div id = "projects">
  <div class ="projectText">
<h1 class = "header">
Projects
</h1>
<div class= "header2" ><a href = "https://github.com/mchang2003/MDST-Projects/blob/main/COVID_Vaccine_Factors.ipynb" target = "_blank" style = "text-decoration:none">COVID Data Analytics </a></div>
  <div class= "body-text ">
      <ul>
        <li>Visualized correlations between COVID vaccination analytics and social factors (race, income, political standing)</li>
        <li>Synthesized predictive modeling of future COVID rates utilizing current rates </li>
        <li>Implemented use of seaborn, pandas, numpy, and matplotlib in bar, plot, and heatmap visualizations </li>  
      </ul>
  </div>
<hr class="solid">
<div class= "header2">Project 2</div>
  <div class= "body-text ">
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae incidunt velit sit assumenda quasi. Quos, expedita laborum tempore voluptas eaque reprehenderit delectus maxime, eveniet at magnam ducimus inventore blanditiis ea.
  </div>
</div>
</div>
<!-- Projects section end -->
<!-- Experience section start -->
<div id = "experience">
<h1 class = "header">
Experience
</h1>
<div class = "header2">
  <ul class = "horizontal">
    <li class = "spacing"> I have </li>
    <li class = "spacing"> Like Zero Experience </li>
    <li class = "spacing"> Anywhere Nice!</li>
  </ul>
</div>
<!-- Experience section end -->

<!-- Contact Section -->

<!-- Contact Section end -->
</body>
</html>
<?php get_footer(); ?>
