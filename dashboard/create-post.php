<?php

$postTitle = "";
$postBody = "";
$user = $_SESSION['username'];

// Check Authentication
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
    header("location: /tech-blog/login.php");
}

$postId = null;
if (isset($_GET['edit'])) {
    $editId = $_GET['edit'];

    // Get the post for edit
    $sql = "SELECT * FROM posts WHERE id=$editId";
    $editPost = $conn->query($sql)->fetch_assoc();
}

if (!empty($_POST)) {
    $postTitle = $_POST['title'];
    $postBody = $_POST['post-body'];
    $postCategory = $_POST['category'];
    $sql = '';
    $target_file = '';

    $thumbnailExist = ($_FILES['thumbnail']['size'] > 0);

    // Upload Post Thumnail
    if($thumbnailExist){
        $target_dir = "uploads/";
        $target_file = $target_dir . 'thumbnail-' . time(). '-' . basename($_FILES["thumbnail"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);
    }


    if (isset($_GET['update'])) {
        $postId = $_GET['update'];

        if($thumbnailExist){
            $sql = "UPDATE posts
                SET title='$postTitle', body='$postBody', thumbnail='$target_file', category='$postCategory'
                WHERE id=$postId";
        }else{
            $sql = "UPDATE posts
                    SET title='$postTitle', body='$postBody', category='$postCategory'
                    WHERE id=$postId";
        }
    } else {

        if($thumbnailExist){
            $sql = "INSERT INTO posts(username, title, body, thumbnail, category) VALUES('$user','$postTitle', '$postBody', '$target_file', '$postCategory')";
        }else{
            // Insert Post into Database
            $sql = "INSERT INTO posts(username, title, body, category) VALUES('$user','$postTitle', '$postBody', '$postCategory')";
        }

    }

    $conn->query($sql);

    if(isset($_GET['update'])){
        echo ("<script> window.location.href = '/tech-blog/dashboard.php?section=create-post&edit=" . $postId . "' </script>");
    }
}

?>

<section class="card card-body">
    <h4 class="mb-5">Create a New Post:</h4>
    <div class="row pb-4">
        <div class="col col-sm-12">
            <form action="/tech-blog/dashboard.php?section=create-post&<?= isset($editPost) ? 'update=' . $editPost['id'] : '' ?>" method="POST" enctype="multipart/form-data">
                <div style="display: flex;">
                    <div class="col-8" style="padding-right: 75px;">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" name="title" id="form1Example1" class="form-control" value="<?= (isset($editPost)) ? $editPost['title'] : '' ?>" />
                            <label class="form-label" for="form1Example1">Title</label>
                        </div>

                        <!-- Password input -->
                        <div class="input-group mb-4">
                            <textarea id="example" name="post-body" id="form1Example2" rows="20"><?= (isset($editPost)) ? $editPost['body'] : '' ?></textarea>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-4">
                            <label class="form-label" for="category">Category</label>
                            <select class="form-control" name="category" id="category">
                                <option <?php echo(isset($editPost) && $editPost['category'] == 'computer' ? 'selected' : '') ?> value="computer">Computer</option>
                                <option <?php echo(isset($editPost) && $editPost['category'] == 'android' ? 'selected' : '') ?> value="android">Android</option>
                                <option <?php echo(isset($editPost) && $editPost['category'] == 'programming' ? 'selected' : '') ?> value="programming">Programming</option>
                            </select>
                        </div>

                        <label class="form-label" for="thumbnail">Thumbnail</label>
                        <div class="mb-4">
                            <input type="file" class="form-control" name="thumbnail" id="thumbnail" /> <br/>
                            <div id="thumbnail_preview">
                                <?php if(isset($editPost) && $editPost['thumbnail']){ ?>
                                    <div class="card" style="width: 320px; height: 320px;">
                                        <img style='width: auto; height: auto; object-fit: cover; object-position:center;' src="/tech-blog/<?php echo $editPost['thumbnail'] ?>" class="card-img-top" alt="thumbnail"/>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
                

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Publish</button>
            </form>
        </div>
    </div>
</section>

<script>
    const projectImagesInput = document.getElementById('thumbnail');
    const thumbnailPreview = document.getElementById('thumbnail_preview');

    projectImagesInput.addEventListener('change', async (e)=>{
    const files = e.target.files;
    console.log(files)

    let src = '';
    let cardElements = '';
    for(file of files){
      src = URL.createObjectURL(file);
      cardElements += `<div class="card" style="width: 200px; height: 200px;">
                            <img style='width: 200px; height: 100%; object-fit:cover' src=${src} class="card-img-top" alt="thumbnail"/>
                        </div>`

        thumbnailPreview.innerHTML = cardElements;
      gelleryPreview.onload = function(){
        URL.revokeObjectURL(src);
      }
    }
  })
</script>