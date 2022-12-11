<?php

// Check Authentication
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
    header("location: /tech-blog/login.php");
}

$username = $_SESSION['username'];
$edit = false;

if (isset($_GET['edit'])) $edit = true;

if (!empty($_POST)) {

    $title = $_POST['title'];
    $company = $_POST['company'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $facebook = $_POST['facebook'];
    $github = $_POST['github'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];
    $bio = $_POST['bio'];

    $proPicExist = ($_FILES['pro_pic']['size'] > 0);
    $target_file = '';
    // Upload Profile Picture
    if($proPicExist){
       
        try{
            // /opt/lampp/htdocs/tech-blog
            $target_dir = "uploads/";
            $target_file = $target_dir . 'pro_pic-' . time(). '-' . basename($_FILES["pro_pic"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            move_uploaded_file($_FILES["pro_pic"]["tmp_name"], $target_file);

            // echo $_FILES["pro_pic"]["tmp_name"];
        }catch(Exception $err){
            echo 'Message: ' .$err->getMessage();
        }
    }

    $sql = $sql2 = '';
    if (!$edit) {
        if($proPicExist){
            $sql = "INSERT INTO details
                VALUES('$username', '$target_file', '$title', '$company', '$address', '$phone', '$facebook', '$github', '$twitter', '$linkedin', '$bio')";
            $sql2 = "INSERT INTO users (pro_pic) VALUES('$target_file')";
        }else{
            // Insert data into table
            $sql = "INSERT INTO details (username, title, company, address, phone, facebook, github, twitter, linkedin, bio)
                    VALUES('$username', '$title', '$company', '$address', '$phone', '$facebook', '$github', '$twitter', '$linkedin', '$bio')";
        }
        
    } else {
        if($proPicExist){
            // Update data
            $sql = "UPDATE details
                    SET title='$title', pro_pic='$target_file', company='$company', address='$address', phone='$phone', facebook='$facebook', github='$github', twitter='$twitter', linkedin='$linkedin', bio='$bio'
                    WHERE username='$username'";

            $sql2 = "UPDATE users SET pro_pic='$target_file' where username='$username'";
        }else{
            // Update data
            $sql = "UPDATE details
                    SET title='$title', company='$company', address='$address', phone='$phone', facebook='$facebook', github='$github', twitter='$twitter', linkedin='$linkedin', bio='$bio'
                    WHERE username='$username'";
        }
        
    }

    $conn->query($sql);
    if($sql2){
        $conn->query($sql2);
    }
}

$detailsExist = false;

// Get details from table if exist
$sql = "SELECT * FROM details WHERE username='$username'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $detailsExist = true;
    $edit = true;
}
$details = $result->fetch_assoc();

?>



<form action="/tech-blog/dashboard.php?section=profile<?= $edit ? '&edit=true' : '' ?>" method="POST" enctype="multipart/form-data">
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="mb-4">
        <label for="pro_pic">Profile Picture</label>
        <input class="form-control" type="file" name="pro_pic" id="pro_pic">
        <div id="pro_pic_preview">
            <div class="card mt-1" style="width: 200px; height: 200px;">
                <img style='width: 200px; height: 100%; object-fit:cover' src="<?php echo($detailsExist && $details['pro_pic'] ? '/tech-blog/' . $details['pro_pic'] : '/tech-blog/img/avatar.png')?>" class="card-img-top" alt="pro_pic" />
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input required type="text" name="title" id="form6Example1" class="form-control" value="<?php echo ($detailsExist ? $details['title'] : '') ?>" />
                <label class="form-label" for="form6Example1">Title</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="text" name="company" id="form6Example2" class="form-control" value="<?php echo ($detailsExist ? $details['company'] : '') ?>" />
                <label class="form-label" for="form6Example2">Company</label>
            </div>
        </div>
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
        <input type="text" name="address" id="form6Example3" class="form-control" value="<?php echo ($detailsExist ? $details['address'] : '') ?>" />
        <label class="form-label" for="form6Example3">Address</label>
    </div>

    <!-- Number input -->
    <div class="form-outline mb-4">
        <input type="number" name="phone" id="form6Example6" class="form-control" value="<?php echo ($detailsExist ? $details['phone'] : '') ?>" />
        <label class="form-label" for="form6Example6">Phone</label>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" name="facebook" id="form6Example1" class="form-control" value="<?php echo ($detailsExist ? $details['facebook'] : '') ?>" />
                <label class="form-label" for="form6Example1">Facebook</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="text" name="github" id="form6Example2" class="form-control" value="<?php echo ($detailsExist ? $details['github'] : '') ?>" />
                <label class="form-label" for="form6Example2">Github</label>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" name="twitter" id="form6Example1" class="form-control" value="<?php echo ($detailsExist ? $details['twitter'] : '') ?>" />
                <label class="form-label" for="form6Example1">Twitter</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="text" name="linkedin" id="form6Example2" class="form-control" value="<?php echo ($detailsExist ? $details['linkedin'] : '') ?>" />
                <label class="form-label" for="form6Example2">Linkedin</label>
            </div>
        </div>
    </div>

    <!-- Message input -->
    <div class="form-outline mb-4">
        <textarea class="form-control" name="bio" id="form6Example7" rows="4"><?php echo ($detailsExist ? $details['bio'] : '') ?></textarea>
        <label class="form-label" for="form6Example7">Write your Bio</label>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
</form>

<script>
    const proPicInput = document.getElementById('pro_pic');
    const proPicPreview = document.getElementById('pro_pic_preview');

    proPicInput.addEventListener('change', async (e) => {
        const files = e.target.files;

        let src = '';
        let cardElements = '';
        for (file of files) {
            src = URL.createObjectURL(file);
            cardElements += `<div class="card mt-1" style="width: 200px; height: 200px;">
                            <img style='width: 200px; height: 100%; object-fit:cover' src=${src} class="card-img-top" alt="pro_pic"/>
                        </div>`

            proPicPreview.innerHTML = cardElements;
            proPicPreview.onload = function() {
                URL.revokeObjectURL(src);
            }
        }
    })
</script>