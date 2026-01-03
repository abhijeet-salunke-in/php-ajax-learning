<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Load Dynamic Data on Page Scroll using jquery AJAX in PHP MYSQL</title>
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
body {
  margin: auto;
  padding: 0px;
  overflow-x: hidden;
  background-repeat: repeat;
  font-family: 'Inter', sans-serif;
}
.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    max-width: 1200px;
}
#postList{ 
	margin-bottom:20px;
}
h1{
	text-align: center;
    margin: 60px 0 37px 0;
    color: #07a8ff;
    font-size: 33px;
    font-weight: 600;
}
.list-item {
    margin: 0 0 37px 0;
    padding: 27px;
    font-size: 17px;
    line-height: 33px;
    color: black;
    border: 0px solid #0e97e5;
    box-shadow: inset 1px 3px 7px 3px #a1dcfe;
}
.list-item h4 {
	color: #0074a2;
	margin-left: 10px;
}
.load-more {
	margin: 15px 25px;
	cursor: pointer;
	padding: 10px 0;
	text-align: center;
	font-weight:bold;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>

<script type="text/javascript">
$(document).ready(function(){
	$(window).scroll(function(){
		var lastID = $('.load-more').attr('lastID');
		
		 if(($('#postList').height() <= $(window).scrollTop() + $(window).height())&& (lastID != 0)){
			$.ajax({
				type:'POST',
				url:'getData.php',
				data:'id='+lastID,
				beforeSend:function(){
					$('.load-more').show();
				},
				success:function(html){
					$('.load-more').remove();
					$('#postList').append(html);
				}
			});
		}
	});
});
</script>
</head>
<body>
<div class="container">
        	<h1>Load Data on Page Scroll</h1>
            <div id="postList">
			<?php
			// Include the database configuration file
			require 'dbConfig.php';

			// Get records from the database
			$query = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 7");
			
			if($query->num_rows > 0){ 
				while($row = $query->fetch_assoc()){
                    $postID = $row["id"];
            ?>
				<div class="list-item"><h2><?php echo $row['title']; ?></h2>
				<p><?php echo $row['description']; ?></h4></div>
            <?php } ?>
				<div class="load-more" lastID="<?php echo $postID; ?>" style="display: none;">
					<img src="loading.gif"/>
				</div>
            <?php } ?>
    </div>
</div>
</body>
</html>