<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <h1>トップページ</h1>
  <form action="/" method="POST">
    @csrf
   <div>
        <label for="name">氏名</label><br>
        <input type="text" name="name" value="">
    </div>
    <div>
        <label for="email">メールアドレス</label><br>
        <input type="text" name="email" value="">
    </div>
    <button type="submit" name="btn">送信する</button>
  </form>
</body>

</html>