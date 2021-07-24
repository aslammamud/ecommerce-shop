<?php
$page='create-new-page';

require '../connection.inc.php';
require '../functions.inc.php';

if(isset($_POST['submit'])){
  $title = get_safe_value($con,htmlspecialchars($_POST['title']));
  $meta = get_safe_value($con,htmlspecialchars($_POST['metadescription']));
  $pagedesign = get_safe_value($con,$_POST['pagedesign']);
  $link = trim(substr($title,0,25)).".php";
  $final_link = str_replace(' ','-',strtolower($link));
  
  $sql_insert = "INSERT INTO new_pages( page_title, page_meta_description, page_content, page_link) VALUES ('$title','$meta','$pagedesign','$final_link')";
  $result_query = mysqli_query($con,$sql_insert);
  $msg = "";
}

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Twitter -->
      <meta name="twitter:site" content="">
      <meta name="twitter:creator" content="">
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content="Starlight">
      <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
      <meta name="twitter:image" content="">
      <!-- Facebook -->
      <meta property="og:url" content="http://themepixels.me/starlight">
      <meta property="og:title" content="Starlight">
      <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">
      <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
      <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
      <meta property="og:image:type" content="image/png">
      <meta property="og:image:width" content="1200">
      <meta property="og:image:height" content="600">
      <!-- Meta -->
      <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
      <meta name="author" content="ThemePixels">
      <title>Create New Page</title>
	  <link rel="icon" href="images/site-icon.jpg" type="image/gif" sizes="16x16">
      <!-- vendor css -->
      <link href="lib-admin/font-awesome/css/font-awesome.css" rel="stylesheet">
      <link href="lib-admin/Ionicons/css/ionicons.css" rel="stylesheet">
      <link href="lib-admin/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
      <!-- Starlight CSS -->
      <link rel="stylesheet" href="css/starlight.css">
      <link rel="stylesheet" href="css/custom-admin.css">
      <style>
         .bd-clipboard {
			 position: relative;
			 float: right;
			 display: block;
         }
         .btn-clipboard {
			 position: absolute;
			 top: .6rem;
			 right: .5rem;
			 z-index: 10;
			 display: block;
			 padding: .25rem .5rem;
			 font-size: 75%;
			 cursor: pointer;
			 border: none;
			 border-radius: .25rem;
         }
		 #copy-group{
			display:none;
		 }


      </style>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
   </head>
   <body>
    <?php
       include 'nav.php';
    ?>
      <div class="sl-mainpanel">
         <div class="sl-pagebody">
            <div class="row">
               <div class="col-sm-8">
                 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                  <div class="form-group">
                     <label class="text-dark h6">Title</label>
                     <input type="text" class="form-control" name="title" placeholder="Enter website title">
                  </div>
                  <div class="form-group">
                     <label class="text-dark h6">Meta Description</label>
                     <textarea rows="5" class="form-control" name="metadescription" placeholder="Enter website meta description"></textarea>
                  </div>
		              <label class="text-dark"><h6>Website Contents</h6></label>
                  <div class="bg-white">
                     <textarea id="summernote" name="pagedesign"></textarea>
                  </div>
                  <script>
                     $('#summernote').summernote({
                       placeholder: 'Design your website',
                       tabsize: 2,
                       height: 400
                     });
                  </script>

				  <div class="col-sm-6 m-auto"><button type="submit" name="submit" class="btn btn-info btn-block mt-3 mb-2 ">Generate Page</button></div>
      </form>
               </div>

			   <!-- Image Upload -->
               <div class="col-sm-4">

                  <div class="form-group">
                     <label class="text-dark h6" >
                        <h6>Upload Image</h6>
                     </label>

                     <!-- When select image than show this image Code start -->
                     <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                     <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
					<form id="frmsubmit">
                     <div class="text-center">
					 <div class="bd-clipboard">
                        <button id="ImageUpload" type="button" class="btn-clipboard btn btn-secondary" onclick="myUploadFunction()">Upload</button>
                     </div>
                        <input class="form-control" type="file" name="image">
                     </div>
					  </form>
                     <!-- When select image than show this image Code End -->
                  </div>
				  <div id="message"></div>
				  <div id="copy-group">
				  <label class="text-dark h6" >
                        <h6>Image URL</h6>
                     </label>
                  <div class="form-group">
                     <div class="bd-clipboard">
                        <button id="myTooltip" type="button" class="btn-clipboard btn btn-secondary" data-toggle="tooltip" data-placement="top" onclick="myFunction()">Copy</button>
                     </div>
                     <input  class="form-control" value="https://localhost.hasib-travels.com" id="myInput" readonly>
                  </div>
                  </div
               </div>
            </div>
         </div>
      </div>

<script>
	
/* $( document ).ready(function() {
	document.getElementById("summernote").setAttribute("name", "pagedesign");
});
	 */
 function myFunction() {
   var copyText = document.getElementById("myInput");
   copyText.select();
   copyText.setSelectionRange(0, 99999);
   document.execCommand("copy");

   var tooltip = document.getElementById("myTooltip").setAttribute("title", copyText.value) ;
   document.getElementById("myTooltip").setAttribute("class", "btn-clipboard btn btn-success");
   document.getElementById("myTooltip").innerHTML = "Copied";

 }

  function myUploadFunction() {
		fetch('upload_action.php',{
			method: "POST",
			body : new FormData (document.getElementById('frmsubmit'))
			}).then(function (response) {
			  return response.text();
			})
			.then(function (body) {
			  console.log(body);
			  document.getElementById("myInput").setAttribute("value", body) ;
			});
	   var element = '<div class="alert alert-success alert-dismissible mt-2"><button type="button" class="close" onclick="closeAlert()" data-dismiss="alert">&times;</button><strong>Image Uploaded!</strong></div>';
 	   document.getElementById("ImageUpload").setAttribute("class", "btn-clipboard btn btn-success");
	   document.getElementById("ImageUpload").innerHTML = "Uploaded";
	   document.getElementById("message").innerHTML = element;
	   document.getElementById("copy-group").style.display = "block";


 }

 function closeAlert() {
		document.getElementById("message").style.display = "none";
	 }
</script>
   </body>
</html>
