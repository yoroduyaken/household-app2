<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>ユーザー登録フォーム</title>
    </head>
    <body>
        <form action="/register" method="post">
            {{ csrf_field() }}
            <p>名前</p>
            <input type="text" name="name" size="30"></input>

            <p>メールアドレス</p>
            <input type="email" name="email" size="30"></input>

            <p>パスワード</p>
            <input type="password" name="password" size="30"></input>

            <p>パスワード確認</p>
            <input type="password_confirmation" name="password_confirmation" size="30"></input>

            <button type="submit">登録</button>
        </form>
    </body>

</html>