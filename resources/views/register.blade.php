<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>ユーザー登録フォーム</title>
    </head>
    <body>
        <form name="registform" action="/register" method="post" id="registerform">
            {{ csrf_field() }}
            <p>名前:</p>
                <input type="text" name="name" size="30"></input>

            <p>メールアドレス:</p>
                <input type="email" name="email" size="30"></input>
                
            <p>パスワード:</p>
                <input type="password" name="password" size="30"></input>

            <p>パスワード(確認):</p>
                <input type="password" name="password_confirmation" size="30"></input>

            <button type='submit'>登録</button>

        </form>
    </body>
</html>