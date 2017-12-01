<?php
	require_once("dbmanager.php");
	$db_handle = new DBManager();
	$query ="SELECT * FROM posts";
	$result = $db_handle->runQuery($query);
?>
<html>
    <head>
        <title>Cherri Picker</title>
        <style>
            body{width:600; font-family:Verdana, Geneva, sans-serif; color:#333;}
			h2 {background-color: #CCC; padding: 15px; text-align: center;}
			h4 {color: #F60; margin-bottom: 0}
			ul {margin:0; padding:0;}
			li{cursor:pointer; list-style-type: none; display: inline-block; color: #F0F0F0; text-shadow: 0 0 1px #666666; font-size:1.4em;}
			p {text-align: justify;}
			.content {line-height:1.8em;}
			.post {border-bottom: #f0f0f0 1px solid; padding: 15px 5px;}
            .highlight, .selected {color:#F4B30A; text-shadow: 0 0 1px #F48F0A;}
        </style>
        <!--<script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>-->
        <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="js/rating.js" type="text/javascript"></script>    
    </head>
    <body>
    	<h2>Event Venue Review</h2>
        <div class="content">
        <?php if(!empty($result)):  
			$i=0;
    		foreach ($result as $post):    		
		?>
        	<div class="post">
                <h4><?php echo $post["venue_name"]; ?></h4>
                <ul data-post_id = "<?php echo $post['post_id']; ?>" data-rating ="<?php echo $post["rating"]; ?>">
                <?php 
                for($i=1; $i<=5; $i++) 
                {
                    $selected = "";
                    if(!empty($post["rating"]) && $i<=$post["rating"]) 
                    {
                        $selected = "selected";
                    }
                ?>
                    <li class="<?php echo $selected; ?>">&#9733;</li>  
                <?php 
                }  
                ?>
                </ul>
                <p><?php echo $post["review"]; ?></p>
            </div>
        <?php endforeach; ?>		    
        <?php endif; ?>    	
        </div>    
    </body>
</html>