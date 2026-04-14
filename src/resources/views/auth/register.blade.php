<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate - Register</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">FashionablyLate</h1>
            <nav>
                <a href="#" class="header__link">login</a>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="register-container">
            <h2 class="register-title">Register</h2>
            <div class="register-card">
                <form action="#" method="post" class="register-form">
                    <div class="form-group">
                        <label for="name">お名前</label>
                        <input type="text" id="name" name="name" placeholder="例: 山田 太郎">
                    </div>
                    <div class="form-group">
                        <label for="email">メールアドレス</label>
                        <input type="email" id="email" name="email" placeholder="例: test@example.com">
                    </div>
                    <div class="form-group">
                        <label for="password">パスワード</label>
                        <input type="password" id="password" name="password" placeholder="例: coachtech1106">
                    </div>
                    <div class="form-button">
                        <button type="submit">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>