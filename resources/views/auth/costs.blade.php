<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>ホーム画面</title>
</head>
<style>
body
    { font-size:16px; color:#999; }
    h1 { font-size:100pt; text-align:right; color:#eee; 
        margin:-20px 0px -50px 0px; }
</style>
<body>
    <h1>Household 2</h1>
    <p>ようこそ マイページへ</p>
    <a href="{{ route('cost') }}">記帳</a>
    <a href="{{ route('logout') }}">ログアウト</a>
    
    <table border="3" cellpadding="6" cellspacing="0">
    <caption>支出の内訳について</caption>
        <tr>
            <th>ユーザーID</th>
            <th>タイトル(用途)</th>
            <th>金額</th>
            <th>作成日</th>
        </tr>
        @foreach ($costs as $cost)
        <tr>
            <td>{{ $cost->id }}</td>
            <td>{{ $cost->title }}</td>
            <td>¥{{ $cost->amount }}</td>
            <td>{{ $cost->created_at }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>