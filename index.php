<?php

include ('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["photo"])) {
    $uploadsDirectory = "uploads/"; // Specify the directory where you want to store uploaded photos
    $uploadedFile = $_FILES["photo"];

    // Check for errors during the upload process
    if ($uploadedFile["error"] === UPLOAD_ERR_OK) {
        // Generate a unique filename
        $uniqueFilename = uniqid() . "_" . $uploadedFile["name"];
        $destinationPath = $uploadsDirectory . $uniqueFilename;

        // Move the uploaded file to the destination directory
        if (move_uploaded_file($uploadedFile["tmp_name"], $destinationPath)) {
            echo "<div class='popup_notification'>
            <span style='color: red'>new post added successfully !</span>
            </div>";
        } else {
            echo "Error moving file.";
        }
    } else {
        echo "Upload failed with error code: " . $uploadedFile["error"];
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arun - index of the page</title>
    <meta name="description" content="arun, imarun, imarun-shop, online, my-sites">
    <meta name="keywords" content="arun, imarun, imarun-shop, online, my-sites">
    <link rel="icon" href="images/arun.ico" type="image/x-icon"> 
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/arun_customs.js"></script>

    <style type="text/css">
        .popup_notification {

            padding: 12px;
            position: fixed;
            background-color: #fff;
            border: 1px solid;
            border-radius: 5px;
            text-align: center; 
            animation: hideDiv 3.9s linear forwards;
            opacity: 1;


        }
        @keyframes hideDiv {
            to {
                opacity: 1;
                display: none;
            }
        }
    </style>

</head>
<body> 

    	<div class="stories"> 
    		<div class="others_story">
    			<img src="images/arun.png"><br><span></span>
    			<img src="images/arun2.png"><br><span></span>
    			<img src="images/arun2.png"><br><span></span>
    			<img src="images/arun2.png"><br><span></span>
    			<img src="images/arun2.png"><br><span></span>
    			<img src="images/arun2.png"><br><span></span>
    			<img src="images/arun2.png"><br><span></span>
    			<img src="images/arun2.png"><br><span></span>
    			<img src="images/arun2.png"><br><span></span>
    			<img src="images/arun2.png"><br><span></span>
    			<img src="images/arun2.png"><br><span></span>
    			<img src="images/arun2.png"><br><span></span>
    		</div>
    	</div>

    	
   <div class="all_field" id="all_field"> 
        <div>
            <img src="images/t.gif" width="20">
        </div> 
        <div class="post_fields"> 
            <div>
                <div class="profile_name"><span class="">mr.dreamlessman</span></div>
            </div>
            <div class="posts_img">
                <img src="images/arun.png" id="bigimage">
            </div>
            <div class="posts_down_section">
                <div class="profile_info">
                    <div class="profile_info_img"><img src="images/arun.png" class="" title="Arun" id="myImg"></div>
                </div>
                <div class="ut_section">
                    <div><img src="images/icons/blue_tag.png" class="tag"></div>  
                    &nbsp;&nbsp;             
                    <div><img id="heart" src="images/icons/unlike.png" alt="Image 1" onclick="toggleheart()" class="heart"></div>             
                </div>
            </div>  
        </div> 
    </div>

    <div class="bottom_section">
      <div class="bottom_icons"><a href="index.php"><img src="images/icons/home.gif"></a></div>
      <div class="bottom_icons"><img src="images/icons/search2.gif" id="search_posts"></div>
      <div class="bottom_icons"><img src="images/icons/plus.gif" id="add_post"></div>
      <div class="bottom_icons"><img src="images/icons/reels.gif" id="reels"></div>
      <div class="bottom_icons"><img src="images/icons/chat.gif" id="add_chats"></div>
    </div>


<script>
    var imageIndex = 1;
    var images = ["images/icons/unlike.png", "images/icons/like.png"];

    function toggleheart() {
        var imgElement = document.getElementById("heart"); 
        imageIndex = 1 - imageIndex;
        imgElement.src = images[imageIndex];
    }

    var bigImage = document.getElementById("bigimage");
    var lastTapTime = 0;

    bigImage.addEventListener("click", function () {
        var currentTime = new Date().getTime();
        if (currentTime - lastTapTime < 300) { 
            toggleheart();
        }
        lastTapTime = currentTime;
    });
</script>


    <div id="profile_model">
        <span class="close" onclick="closeModal()">&times;</span> 
        <div id="img01">
            <div>
                <div class="profile_name"><span class="">mr.dreamlessman</span></div>
            </div>
            <div>
                <img src="images/arun.png" width="50" class="profile_info_img">
            </div> 
            <div class="pad"></div> 
            <div class="profile_buttons">
                <div class="buttons"><button id="myButton" onclick="changeButtonText()">follow</button></div>
                <div class="buttons"><button>message</button></div>
                <div class="buttons"><button>contact</button></div>
            </div> 
            <div class="pad"></div>
            <div class="highlights">
                <div class="others_story">
                    <img src="images/arun.png"><br><span></span>
                    <img src="images/arun.png"><br><span></span>
                    <img src="images/arun.png"><br><span></span>
                    <img src="images/arun.png"><br><span></span>
                    <img src="images/arun.png"><br><span></span>
                </div>
            </div>

            <div class="pad"></div>

            <div class="profile_posts">
                <div class="three_view">
                    <img src="images/arun.png">
                    <img src="images/arun2.png">
                    <img src="images/arun.png">
                </div>
                <div class="three_view">
                    <img src="images/arun2.png">
                    <img src="images/arun.png">
                    <img src="images/arun2.png">
                </div>
                <div class="three_view">
                    <img src="images/arun.png">
                    <img src="images/arun2.png">
                    <img src="images/arun.png">
                </div>
                <div class="three_view">
                    <img src="images/arun2.png">
                    <img src="images/arun.png">
                    <img src="images/arun2.png">
                </div>
            </div> 
        </div>
    </div>


    <div id="new_posts" class="new_posts">
        <span class="close" onclick="close_newpost()">&times;</span>  
        <div class="profile_name">
            <span>Add New Post's</span>
        </div>

        <div>

            
            <form method="POST" enctype="multipart/form-data">
                <input type="file" name="photo" id="photoInput" accept="image/*">
                <br>
                <img src="#" id="photoPreview" alt="Preview" style="max-width: 300px; display: none;">
                <br>
                <input type="submit" value="Upload">
            </form>

            <script>
                document.getElementById("photoInput").addEventListener("change", function () {
                    var preview = document.getElementById("photoPreview");
                    var file = this.files[0];
                    
                    if (file) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            preview.src = e.target.result;
                            preview.style.display = "block";
                        };
                        reader.readAsDataURL(file);
                    } else {
                        preview.style.display = "none";
                    }
                });
            </script>
        </div>
    </div>

    <div id="search_results" class="search_results">
        <span class="close" onclick="close_posts()">&times;</span>  
        <div class="profile_name">
            <span>Search Result's</span>
        </div>
    </div>

    <div id="chats" class="search_results">
        <span class="close" onclick="close_chats()">&times;</span>  
        <div class="profile_name">
            <span>Let's Chat❤️</span>
        </div>
    </div>

 
<script type="text/javascript">
    var modal = document.getElementById("profile_model"); 
    var img = document.getElementById("myImg"); 
    img.onclick = function(){
    modal.style.display = "block"; 
    } 
    function closeModal() {
    modal.style.display = "none";
    } 


    var modal2 = document.getElementById("new_posts"); 
    var img = document.getElementById("add_post"); 
    img.onclick = function(){
    modal2.style.display = "block"; 
    } 
    function close_newpost() {
    modal2.style.display = "none";
    } 

    var modal3 = document.getElementById("search_results"); 
    var img = document.getElementById("search_posts"); 
    img.onclick = function(){
    modal3.style.display = "block"; 
    } 
    function close_posts() {
    modal3.style.display = "none";
    } 

    var modal4 = document.getElementById("chats"); 
    var img = document.getElementById("add_chats"); 
    img.onclick = function(){
    modal4.style.display = "block"; 
    } 
    function close_chats() {
    modal4.style.display = "none";
    } 
</script>

</body>
</html>
