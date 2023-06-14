<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>

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

    body {
        background: teal;
        height: 100vh;
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
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
        float: center;
        background: #555;
        padding: 10px 15px;
        color: #fff;
        border-radius: 5px;
        margin-right: 10px;
        border: none;
    }

    button:hover{
        opacity: .7;
    }

    .signup-container {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        margin-top: 5px;
    }

    .signup-container p {
        font-size: 16px;
        font-weight: normal;
    }

    </style>
    </head>

    <body>
        <div class="navbar">
            <h2>VroomOnRent</h2>
        </div>
        
        <div class="container">
            <form method="POST" action="/register">
                @csrf
    
                <h2>Register<h2>
    
                <div>
                    <label for="email">Name:</label>
                    <input type="name" name="name" id="name" required autofocus>
                </div>
    
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required autofocus>
                </div>
    
                <div>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                </div>
    
                <div>
                    <button type="submit">Register</button>
                </div>

                <div class="signup-container">
                   <p>Already an existing user? <a href="/login">Sign in here</a></p>
                </div>
            </form>
        </div>
</body>
</html>
