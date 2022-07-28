<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>支出入力画面</title>
</head>
<body>
    <form action="/cost"  method="post">
        {{ csrf_field() }}
    <dl>
        <dt>タイトル</dt>
        <dd><input type="text" name="name" size="30">
    </dl>
    <dl>
        <dt>金額</dt>
        <dd><input type="number" name="amount" size="30">
    </dl>
    <dl>
        <dt>メモ</dt>
        <dd><textarea name="memo" rows="5" cols="20"></textarea>
    </dl>
    
        <button type="submit" name="action">記帳</button>
    </form>
</body>

</html>