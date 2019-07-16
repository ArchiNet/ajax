<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">

  <title>FORM Ajax</title>
  <meta name="description" content="FORM Ajax.">
  <meta name="author" content="ArchiNet">

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="ajax.js"></script>

</head>

<body>
    <form method="post" id="ajax_form" action="">
        <input type="text" name="name" placeholder="Имя" /><br>
        <input type="text" name="soname" placeholder="Фамилия" /><br>
        <input type="button" id="btn" value="Отправить" />
    </form>

    <br>

    <div id="result"></div> 
</body>
</html>
