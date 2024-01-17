

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login-Register</title>
        <link rel="icon" href="favicon-32x32.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mulishy&display=swap" rel="stylesheet" type='text/css'>
        <link rel="stylesheet" type="text/css" href="admin.css">
        <link rel="stylesheet" href="navbar.css">
    </head>
    <body>
    
        <div class="form-wrapper">
            <div class="form-side">
                <form class="my-form" action="admin_panel/index.php">
                    <div class="form-welcome-row">
                        <h1 id="title">Admin Login</h1>
                    </div>
                    
                    <div class="text-field">
                        <input
                            id="username"
                            type="text"
                            name="username"
                            placeholder="Username"
                            required
                        >
                </div>

            
                    <div class="text-field">
                            <input
                                id="password"
                                type="password"
                                name="password"
                                placeholder="Password"
                                minlength="6"
                                title="Minimum 6 characters at 
                                least 1 Alphabet and 1 Number"
                            pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$"
                            required>
                            
                    </div>

                

            
                    <button id="loginBtn" class="my-form__button" name="submit">
                        LOGIN
                    </button>
                </form>
            </div>

        </div>

    </body>
</html>