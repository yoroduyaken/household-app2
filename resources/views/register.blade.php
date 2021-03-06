<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>ユーザー登録フォーム</title>
</head>
<body>
    <form action="/register"  method="post">
        {{ csrf_field() }}
    <dl>
        <dt>名前</dt>
        <dd><input type="text" name="name" size="30">
            <span>{{ $errors->first('name') }}</span></dd>
    </dl>
    <dl>
        <dt>メールアドレス</dt>
        <dd><input type="email" name="email" size="30">
            <span>{{ $errors->first('email') }}</span></dd>
    </dl>
    <dl>
        <dt>パスワード</dt>
        <dd><input type="password" name="password" size="30">
            <span>{{ $errors->first('password') }}</span></dd>
    </dl>
    <dl>
        <dt>パスワード確認</dt>
        <dd><input type="password" name="password_confirmation" size="30">
            <span>{{ $errors->first('password_confirmation') }}</span></dd>
    </dl>
        <button type="submit" name='action'>登録</button>
    </form>
</body>

</html>