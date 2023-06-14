<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
    <style>
        * {
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

        body {
          	background: #F9F3FF;
          	height: 100vh;
      	}

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .container-back {
          text-align: left;
          margin: 10px;
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

        input, select {
            display: block;
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

        button:hover {
            opacity: .7;
        }

        .button-container {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container-alert {
              display: flex;
              align-items: center;
              justify-content: center;
              width: 100%;
              margin-top: 5px;
          }
          
          .alert-success {
              margin-top: 10px;
              color: #00FF00;
          }
  
          .atag {
              text-decoration: none;
              color: #000000;
          }
    </style>
</head>
<body>
    <div class="navbar">
        <h2>VroomOnRent</h2>
        <div>
            <a href="/login">Logout</a>
        </div>
    </div>

    <div class="container-back">
         <h3><a href="/homepage" class="atag">← Back to homepage</a></h3>
      </div>
   
    <div class="container">
        <form action="/create" method="POST">
            @csrf
 
            <h2>Register Vehicle</h2>
 
            <div>
                <label for="vehicle_type">Vehicle Type:</label><br>
                <select name="vehicle_type">
                    <option value="compact">Compact</option>
                    <option value="sedan">Sedan</option>
                    <option value="SUV">SUV</option>
                    <option value="premium">Premium</option>
                    <option value="motorcycle">Motorcycle</option>
                </select>
            </div>
 
            <div>
                <label for="vehicle_brand">Vehicle Brand:</label><br>
                <input type="text" name="vehicle_brand"><br>
            </div>
 
            <div>
                <label for="plate_number">Plate Number:</label><br>
                <input type="text" name="plate_number"><br>
            </div>
 
            <div class="button-container">
                <button type="submit">Register Vehicle</button>
            </div>

          <div class="container-alert">
                @if (session('success'))
                  <div class="alert-success">
                    {{ session('success') }}
                  </div>
                @endif
            </div>
        </form>
    </div>
</body>
</html>
