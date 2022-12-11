<?php include_once "./includes/header.php" ?>

<?php

include_once"./config/database.php";
// Fetch posts from Databse
$sql = "SELECT * FROM posts LIMIT 3";
$posts = $conn->query($sql);

?>

<!-- Carousel wrapper -->
<div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
    <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
  </ol>

  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white text-center">
            <h1 class="mb-3">Explore Latest Technology</h1>
            <h5 class="mb-4">Read all latest technology article and grow your knowledge.</h5>
            <a class="btn btn-outline-light btn-lg m-2" href="/tech-blog/blogs.php" role="button"
              rel="nofollow" >Start Reading</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <div class="mask" style="
                background: linear-gradient(
                  45deg,
                  rgba(29, 236, 197, 0.7),
                  rgba(91, 14, 214, 0.7) 100%
                );
              ">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white text-center">
            <h2>Register to Write Technical Articles</h2>
            <a class="btn btn-outline-light btn-lg m-2"
              href="/tech-blog/signup.php" role="button">Register Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Carousel wrapper -->

<!--Main layout-->
<main class="mt-5">
  <div class="container">
    <!--Section: Content-->
    <section>
      <div class="row">
        <div class="col-md-6 gx-5 mb-4">
          <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
            <img src="https://mdbootstrap.com/img/new/slides/031.jpg" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
        </div>

        <div class="col-md-6 gx-5 mb-4">
          <h4><strong>Facilis consequatur eligendi</strong></h4>
          <p class="text-muted">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
            eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
            sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
          </p>
          <p><strong>Doloremque vero ex debitis veritatis?</strong></p>
          <p class="text-muted">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
            nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
            alias, unde optio accusantium soluta, iusto molestiae adipisci et?
          </p>
        </div>
      </div>
    </section>
    <!--Section: Content-->

    <hr class="my-5" />

    <!--Section: Content-->
    <section class="text-center">
      <h4 class="mb-5"><strong>Latest Tech Posts</strong></h4>

      <div class="row">
        <?php while($post = $posts->fetch_assoc()){ ?>
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card h-100">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="<?php echo('/tech-blog/'.$post['thumbnail']) ?>" style="width: auto; height:300px; object-fit:cover" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo $post['title'] ?></h5>
                <p class="card-text">
                  <?php echo substr($post['body'], 0, 100) ?>...
                </p>
                <a href="/tech-blog/single-post.php?post=<?= $post['id'] ?>" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </section>
    <!--Section: Content-->

    <hr class="my-5" />

  </div>
</main>
<!--Main layout-->

<!--Footer-->

<?php include_once ("./includes/footer.php"); ?>