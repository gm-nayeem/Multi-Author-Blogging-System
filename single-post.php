<?php include_once "./includes/header.php" ?>

<?php
include_once "./config/database.php";

$postId = $_GET['post'];
$sql = "SELECT *, posts.title as post_title
        FROM posts
        INNER JOIN users ON posts.username = users.username
        INNER JOIN details ON posts.username = details.username
        WHERE posts.id=$postId";

$result = $conn->query($sql);
$post = $result->fetch_assoc();

?>


<style>

  @media (max-width: 991px) {
    #intro {
      /* Margin to fix overlapping fixed navbar */
      margin-top: 45px;
    }
  }
</style>

<!-- Jumbotron -->
<div id="intro" class="my-5 text-center bg-light">
  <h1 class="mb-0 h3" style="font-weight: bold;"><?php echo $post['post_title'] ?></h1>
</div>


<!--Main layout-->
<main class="mt-4 mb-5">
  <div class="container">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-md-8 mb-4">
        <!--Section: Post data-mdb-->
        <section class="border-bottom mb-4">
          <img src="<?php echo ('/tech-blog/' . $post['thumbnail']) ?>" style="height: auto; width: auto; object-fit:cover; object-positionb:center;" class="img-fluid shadow-2-strong rounded-5 mb-4" alt="" />

          <div class="row align-items-center mb-4">
            <div class="col-lg-8 text-center text-lg-start mb-3 m-lg-0">
              <img src="<?php echo ('/tech-blog/' . $post['pro_pic']) ?>" class="rounded-5 shadow-1-strong me-2" height="30" width="30" style="object-fit: cover;" alt="" loading="lazy" />
              <span> Published <u><?php echo $post['created_at'] ?></u> by</span>
              <a href="http://localhost:8080/tech-blog/dashboard.php?section=profile"><span style="color:blueviolet"><?= $post['full_name'] ?></span></a>
            </div>

            <div class="col-lg-4 text-center text-lg-end">
              <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #3b5998;">
                <i class="fab fa-facebook-f"></i>
              </button>
              <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #55acee;">
                <i class="fab fa-twitter"></i>
              </button>
              <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #0082ca;">
                <i class="fab fa-linkedin"></i>
              </button>
              <button type="button" class="btn btn-primary px-3 me-1">
                <i class="fas fa-comments"></i>
              </button>
            </div>
          </div>
        </section>
        <!--Section: Post data-mdb-->

        <!--Section: Text-->
        <section>
          <?php echo $post['body'] ?>
        </section>
        <!--Section: Text-->

        <!--Section: Share buttons-->
        <section class="text-center border-top border-bottom py-4 mb-4">
          <p><strong>Share with your friends:</strong></p>

          <button type="button" class="btn btn-primary me-1" style="background-color: #3b5998;">
            <i class="fab fa-facebook-f"></i>
          </button>
          <button type="button" class="btn btn-primary me-1" style="background-color: #55acee;">
            <i class="fab fa-twitter"></i>
          </button>
          <button type="button" class="btn btn-primary me-1" style="background-color: #0082ca;">
            <i class="fab fa-linkedin"></i>
          </button>
          <button type="button" class="btn btn-primary me-1">
            <i class="fas fa-comments me-2"></i>Add comment
          </button>
        </section>
        <!--Section: Share buttons-->


      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-4 mb-4">
        <!--Section: Sidebar-->
        <section class="sticky-top" style="top: 80px;">
          <!--Section: Author-->
          <section class="border-bottom mb-4 pb-4">
            <div class="card mb-4">
              <div class="card-body text-center">
                <img src="<?php echo '/tech-blog/'.$post['pro_pic'] ?>" alt="pro_pic" style="width: 250px; height: 250px; object-fit: cover;">
                <a href="http://localhost:8080/tech-blog/dashboard.php?section=profile"><h5 class="my-3" style="color: grey"><?= $post['full_name'] ?></h5></a>
                <p class="text-muted mb-1"><?= $post['title'] ?></p>
                <p class="text-muted mb-4"><?= $post['bio'] ?></p>
                <div class="d-flex justify-content-center mb-2">
                  <a href="#" class="btn btn-outline-primary ms-1">Follow</a>
                </div>
              </div>
            </div>
        
          </section>
          <!--Section: Author-->
        </section>
        <!--Section: Sidebar-->
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
</main>
<!--Main layout-->


<?php include_once("./includes/footer.php"); ?>