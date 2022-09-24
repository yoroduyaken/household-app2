<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>トップ画面</title>
</head>
<style>
body
    { font-size:16px; color:#999; }
    h1 { font-size:100pt; text-align:right; color:#eee; 
        margin:-20px 0px -50px 0px; }
</style>
<body>
    <h1>Household 2</h1>
    <p>This is Top Page.</p>

    <a href="{{ route('login') }}">ログイン</a>
    <a href="{{ route('register') }}">会員登録</a>
</body>
</html>