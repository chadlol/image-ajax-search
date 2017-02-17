<!DOCTYPE html>
<html>
<head>
    <title>PHP/AJAX App</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<style>
  div {
    width: 600px;
    text-align: center;
    margin:auto;
  }

</style>
<body>

<div>
<img id='img-box' src='' height='400px'>
<br/>
<input type="text" id="search-query">
<input type="submit" id="search-button" value="Search"><br>
<small>Search for an image</small><br>
<a href="https://github.com/chadlol/image-ajax-search"><img src="https://assets-cdn.github.com/images/modules/logos_page/GitHub-Mark.png" height="50px" width="50px" alt="github repo" title="github repo" /></a>
</div>

<script>
$('#search-button').on('click',function(e){
    var searchQuery = $('#search-query').val();
    $('#img-box').attr('src', 'load.gif');
    $.ajax({
        type: "POST",
        data: {search:searchQuery},
        url: "get_image_url.php",
        success: function(data){
            if(data){
              $('#img-box').attr('src',data);
            }
            else{
              $('#img-box').attr('src', '');
              alert("No image found. Please search something else.");
            }
        }
    });
})
</script>

</body>
</html>
