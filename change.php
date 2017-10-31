<?php

use \Xmf\Request;

include __DIR__ . '/../../mainfile.php';

$HTTP_REFERER = Request::getString('HTTP_REFERER', '', 'SERVER');

$submit  = $_POST['submit'];
$submit2 = $_POST['submit2'];
$submit3 = $_POST['submit3'];
$submit4 = $_POST['submit4'];
$submit5 = $_POST['submit5'];
$submit6 = $_POST['submit6'];

if ($submit) {
    $season = (int)$_POST['season'];

    //New value for session variable
    $_SESSION['defaultseasonid'] = $season;

    header("Location: $HTTP_REFERER");
} elseif ($submit2) {
    $change = (int)$_POST['change_show'];

    //New value for session variable
    $_SESSION['defaultshow'] = $change;

    header('Location: index.php?sort=pts');
} elseif ($submit3) {
    $change = (int)$_POST['change_table'];

    //New value for session variable
    $_SESSION['defaulttable'] = $change;

    header("Location: $HTTP_REFERER");
} elseif ($submit4) {
    $change = (int)$_POST['home_id'];

    //New value for session variable
    $_SESSION['defaulthomeid'] = $change;

    header("Location: $HTTP_REFERER");
} elseif ($submit5) {
    $change = (int)$_POST['away_id'];

    //New value for session variable
    $_SESSION['defaultawayid'] = $change;

    header("Location: $HTTP_REFERER");
} elseif ($submit6) {
    $moveto = $_POST['moveto'];

    header("Location: $moveto");
} else {
    header('Location: index.php?sort=pts');
}
exit();
