<?php
    $matches = [
        [
            'homeTeam' => 'Virtus Bologna',
            'awayTeam' => 'Olimpia Milano',
            'homeTeamPoints' => '45',
            'awayTeamPoints' => '65',
        ],
        [
            'homeTeam' => 'Roma',
            'awayTeam' => 'Varese',
            'homeTeamPoints' => '45',
            'awayTeamPoints' => '65',
        ],
        [
            'homeTeam' => 'Udine',
            'awayTeam' => 'Carpi',
            'homeTeamPoints' => '45',
            'awayTeamPoints' => '65',
        ],
        [
            'homeTeam' => 'Brescia',
            'awayTeam' => 'Trieste',
            'homeTeamPoints' => '45',
            'awayTeamPoints' => '65',
        ]
    ];

?>


<ul>
    <?php foreach ($matches as $match){ ?>
        <li><?php echo $match["homeTeam"]; ?> - <?php echo $match["awayTeam"]; ?> | <?php echo $match["homeTeamPoints"]; ?> - <?php echo $match["awayTeamPoints"]; ?></li>
    <?php } ?>
</ul>




