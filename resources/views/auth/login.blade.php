<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>ログインフォーム</title>
        </head>
        <body>
            @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif

            <form name="loginform" action="/login" method="post">
                {{ csrf_field() }}
            <dl>
                <dt>メールアドレス:</dt>
                <dd><input type="email" name="email" size="30" value="{{ old('email') }}"></dd>
                <dt>パスワード:</dt>
                <dd><input type="password" name="password" size="30"></dd>
            </dl>
            <button type='submit' name='action' value='send'>ログイン</button>
            </form>
        </body>
    </html>