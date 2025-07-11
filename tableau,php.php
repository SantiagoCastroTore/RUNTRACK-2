
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 3</title>
</head>
<body>

<table border="1">
  <caption>JOB 3</caption>

  <?php 
    $string = "Chaine de caractères";
    $entier = 19;
    $booleen = true;
    $float = 3.14;
  ?>

  <thead>
    <tr>
      <th>Type</th>
      <th>Nom</th>
      <th>Valeur</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td><?php echo gettype($string); ?></td>
      <td>string</td>
      <td><?php echo $string; ?></td>
    </tr>
    <tr>
      <td><?php echo gettype($entier); ?></td>
      <td>entier</td>
      <td><?php echo $entier; ?></td>
    </tr>
    <tr>
      <td><?php echo gettype($booleen); ?></td>
      <td>booleen</td>
      <td><?php echo $booleen ? 'true' : 'false'; ?></td>
    </tr>
    <tr>
      <td><?php echo gettype($float); ?></td>
      <td>float</td>
      <td><?php echo $float; ?></td>
    </tr>
  </tbody>
</table>

</body>
</html>
