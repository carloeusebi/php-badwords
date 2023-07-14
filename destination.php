<?php

$paragraph = $_GET['paragraph'];
$to_censor_word = $_GET['to-censor-word'];

$paragraph_length = strlen($paragraph);

$censored_paragraph = str_replace($to_censor_word, '***', $paragraph);

$censored_paragraph_length = strlen($censored_paragraph);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>bad words</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
</head>

<body>
  <div class="container mt-5">

    <p><strong>Paragraph length:</strong> <?= $paragraph_length ?> </p>
    <p><?= $paragraph ?></p>

    <hr>

    <p><strong>Censored Paragraph length: </strong><?= $censored_paragraph_length ?></p>
    <p><?= $censored_paragraph ?></p>
  </div>
</body>

</html>