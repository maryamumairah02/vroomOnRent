<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>

    <style>
    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Calibri';
    }

    .navbar {
        background-color: #06103B;
        height: 50px;
        padding-left: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .navbar h2 {
        color: #ffffff;
        font-size: 20px;
    }
    
    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;

    }

    body {
        background: teal;
        height: 100vh;
    }

    form {
        width: 500px;
        border: 2px solid #ccc;
        padding: 30px;
        background: #fff;
        border-radius: 15px;
    }

    form h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    input {
        display: black;
        border: 2px solid #ccc;
        width: 95%;
        padding: 10px;
        margin: 10px auto;
        border-radius: 5px;
    }

    label {
        color: #000000;
        font-size: 18px;
        padding: 10px;
    }

    button {
        background: #555;
        padding: 10px 15px;
        color: #fff;
        border-radius: 5px;
        margin-right: 10px;
        border: none;
    }

    .button-container, .signup-container, .error-container{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        margin-top: 5px;
    }

    .error {
        color: #FF0000;
    }
    

    button:hover{
        opacity: .7;
    }

    </style>
    </head>

    <body>
        <div class="navbar">
            <h2>VroomOnRent</h2>
        </div>
        
        <div class="container">
            <form method="POST" action="/login" autocomplete="off">
                @csrf
    
                <h2>LOGIN</h2>
            
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Email" required autofocus autocomplete="off"><br>
                </div>
            
                <div>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Password" required autocomplete="off"><br>
                </div>
            
                <div class="button-container">
                    <button type="submit">Login</button>
                </div>

                <div class="error-container">
                    @error('login')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="signup-container">
                   <p>Not an existing user? <a href="/register">Sign up here</a></p>
                </div>
            </form>
        </div>
    </body>
</html>
