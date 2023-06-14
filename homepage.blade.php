<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
</head>
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
        justify-content: space-between;
        align-items: center;
    }

    .navbar h2 {
        color: #ffffff;
        font-size: 20px;
    }

    .navbar a {
        color: #ffffff;
        text-decoration: none;
        margin-right: 10px;
        height: 100%;
    }

    .navbar a:hover {
        color: #ff0000; 
    }

    h1 {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 250px;
        width: 100%;
        background-color: rgb(43,67,168, 80%);
        color: #ffffff;
        padding: 10px;
    }

    .container {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        height: 100vh;
        gap: 30px;
    }

    .container-section {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 5px;
        height: 200px;
        padding: 5px;
        cursor: default;
    }

    img {
        width: 200px;
        height: 200px;
        cursor: pointer;

    }
</style>
<body>
    <div class="navbar">
        <h2>VroomOnRent</h2>
        <div>
            <a href="/login">Logout</a>
        </div>
    </div>
    
    <h1>Welcome to VroomOnRent</h1>

    <div class="container">
        <div class="container-section">
            <a href="/rent">
                <img src="{{ asset('images/rent_vehicle.jpg') }}">
            </a>
            <h3>Rent a Vehicle</h3>
        </div>
    
        <div class="container-section">
            <a href="/create">
                <img src="{{ asset('images/register_vehicle.jpg') }}">
            </a>
            <h3>Register a Vehicle</h3>
        </div>

        <div class="container-section">
              <a href="/feedback_form">
                  <img src="{{ asset('images/feedback.jpg') }}">
              </a>
              <h3>Feedback</h3>
        </div>
    </div>

</body>
</html>
