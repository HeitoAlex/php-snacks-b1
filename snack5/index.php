<?php 
$text = 'Ezechiele 25:17. Il cammino dell\'uomo timorato è minacciato da ogni parte dalle iniquità degli esseri egoisti e dalla tirannia degli uomini malvagi. Benedetto sia colui che nel nome della carità e della buona volontà conduce i deboli attraverso la valle delle tenebre; perché egli è in verità il pastore di suo fratello e il ricercatore dei figli smarriti. E la mia giustizia calerà sopra di loro con grandissima vendetta e furiosissimo sdegno su coloro che si proveranno ad ammorbare ed infine a distruggere i miei fratelli. E tu saprai che il mio nome è quello del Signore quando farò calare la mia vendetta sopra di te.';

$splittedText = explode("." , $text);
?>

<ul>
    <?php foreach ($splittedText as $phrase){ ?>
    <li>
        <p>
            <?php echo ($phrase) ?>
        </p>
    </li>
    <?php } ?>
</ul>