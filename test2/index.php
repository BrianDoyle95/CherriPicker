<?php

require_once 'app/init.php';

// All events
$query = $db->query("
    SELECT events.id, events.name, AVG(events_ratings.rating) AS rating
    FROM events
    LEFT JOIN events_ratings
    ON events.id = events_ratings.event
    GROUP BY events.id
");

$events = [];

while($row = $query->fetch_object()) {
    $events[] = $row;
}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        
        <title>Events</title>
    </head>
    <body>
        <?php foreach($events as $event): ?>
            <div class="event">
                <h3><a href="event.php?id=<?php echo $event->id; ?>"><?php echo $event->name; ?></a></h3>
                <div class="event-rating">Rating: <?php echo $event->rating; ?>/5</div>
            </div>
        <?php endforeach; ?>
    </body>
</html>