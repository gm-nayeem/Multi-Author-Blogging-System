<?php
$user = $_SESSION['username'];
$postId = isset($_GET['delete'])? $_GET['delete']: '';

if($postId != ''){
    // Delete Post
    $sql = "DELETE FROM posts WHERE id=$postId AND username='$user'";
    $conn->query($sql);
}

// Fetch all posts from Databse
$sql = "SELECT * FROM posts WHERE username='$user'";

$posts = $conn->query($sql);

?>

<h4 class="mt-4">All Posts</h4>

<div class="posts d-flex flex-wrap">

<?php if($posts->num_rows == 0){ ?>
    <p class="my-5">No Posts Available</p>
<?php } ?>

<?php while($post = $posts->fetch_assoc()){ ?>
    
    <div class="card my-3 mx-3" style="width: 465px; height: 220px">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="/tech-blog/<?php echo $post['thumbnail'] ?>" alt="Trendy Pants and Shoes" 
                class="img-fluid rounded-start" style="width:auto; height: 220px; object-fit: cover; object-position:center;" />
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <a href="/tech-blog/single-post.php?post=<?= $post['id'] ?>"><h5 class="card-title"><?= $post['title'] ?></h5></a>
                    <p class="card-text">
                      
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Last updated at <?= $post['created_at'] ?></small>
                    </p>
                    <div class="actions">
                        <a href="/tech-blog/dashboard.php?section=create-post&edit=<?= $post['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/tech-blog/dashboard.php?section=all-post&delete=<?= $post['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>

</div>