<?php

include 'config.php';

// Use prepared statements and bound parameters to protect against SQL injection attacks
$stmt = $pdo->prepare("SELECT DENSE_RANK() OVER(ORDER BY wpm DESC, username ASC) AS ranking, username, wpm FROM rank");
$stmt->execute();

$arr = array();

// Iterate through the results
while (($result = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) {
    $ranking = $result['ranking'];
    $arr[$ranking] = array(
        "wpm" => $result['wpm'],
        "username" => $result['username']
    );
}

echo json_encode($arr);

?>
