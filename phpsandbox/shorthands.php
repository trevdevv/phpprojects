<?php 
    $loggedIn = FALSE;
    $arr = [1,2,3,4];
    // // if($loggedIn) {
    // //     echo 'You are logged in';
    // // }
    // // else {
    // //     echo "You are not logged in";
    // // }

    // // echo ($loggedIn) ? "You're are logged in" : "You are not logged in";

    // // $isRegistered = ($loggedIn) ? true : false;
    // // echo $isRegistered;

    // $age = 12;
    // $score = 1;

    // echo 'Your score is: ' . ($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional')  : ($age > 10 ? 'Horrible' : 'Average'));

    ?>

    <div>
        <?php if($loggedIn) { ?>
            <h1>Waddup User</h1>
        <?php } else { ?>
            <h1>Not logged in</h1>
        <?php } ?>

        <?php if($loggedIn) : ?>
            <h1>sup</h1>
        <?php else: ?>
            <h1>no</h1>
        <?php endif; ?>
    </div>

    <div>
        <?php foreach($arr as $val) : ?>
            <?php echo $val;?>
        <?php endforeach;?>
    </div>

    <div>
        <?php for($i = 0; $i < 10; $i++) : ?>
            <li><?php echo $i?></li>
        <?php endfor;?>
    </div>