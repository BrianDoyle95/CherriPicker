<?php

require_once 'app/init.php';

$event = null;

if(isset($_GET['id'])) {

    $id = (int)$_GET['id'];

    $event = $db->query("
        SELECT Nightlife.NightID, Nightlife.NightName, AVG(nightlife_ratings.rating) AS rating
        FROM Nightlife
        LEFT JOIN nightlife_ratings
        ON Nightlife.NightID = nightlife_ratings.nightlife
        WHERE Nightlife.NightID = {$id}
    ")->fetch_object();

}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        
        <title>NightLife Events</title>
    </head>
    <body>
        <?php if($event): ?>
            <div class="nightlife-event">
                This is event "<?php echo $event->NightName; ?>".
                <div class="nightlife-event-rating">Rating: <?php echo $event->rating; ?>/5</div>
                <div class="nightlife-event-rate">
                    Rate this event:
                    <?php foreach(range(1, 5) as $rating): ?>
                        <a href="nightlife_rate.php?nightlife=<?php echo $event->NightID; ?>&rating=<?php echo $rating; ?>"><?php echo $rating; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </body>
</html>