<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Application</title>
</head>

<body>
  <h1>Hello world 1</h1>
  <?php
  $content = file_get_contents('http://api');
  $result = json_decode($content)->data;
  echo ('<ul>');
  foreach ($result as $item) {
    echo ('<li>' . $item->name . '</li>');
  }
  echo ('</ul>');
  ?>

  <h2>Hello again</h2>
</body>

</html>