<?php

require_once 'app/init.php';

$event = null;

if(isset($_GET['id'])) {

    $id = (int)$_GET['id'];

    $event = $db->query("
        SELECT events.id, events.name, AVG(events_ratings.rating) AS rating
        FROM events
        LEFT JOIN events_ratings
        ON events.id = events_ratings.event
        WHERE events.id = {$id}
    ")->fetch_object();

}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        
        <title>Cherri Picker Event</title>
    </head>
    <body>
        <?php if($event): ?>
            <div class="event">
                This is event "<?php echo $event->name; ?>".
                <div class="event-rating">Rating: <?php echo $event->rating; ?>/5</div>
                <div class="event-rate">
                    Rate this event:
                    <?php foreach(range(1, 5) as $rating): ?>
                        <a href="rate.php?event=<?php echo $event->id; ?>&rating=<?php echo $rating; ?>"><?php echo $rating; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </body>
</html>