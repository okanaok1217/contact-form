<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate - Login</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">FashionablyLate</h1>
            <nav>
                <a href="/register" class="header__link">register</a>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="login-container">
            <h2 class="login-title">Login</h2>
            <div class="login-card">
                <form action="/login" method="post" class="login-form">
                    @csrf <div class="form-group">
                        <label for="email">メールアドレス</label>
                        <input type="email" id="email" name="email" placeholder="例: test@example.com">
                    </div>

                    <div class="form-group">
                        <label for="password">パスワード</label>
                        <input type="password" id="password" name="password" placeholder="例: coachtech1106">
                    </div>

                    <div class="form-button">
                        <button type="submit">ログイン</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>