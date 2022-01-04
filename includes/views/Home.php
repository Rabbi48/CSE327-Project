<!DOCTYPE html>
<html>

<head>
  <style>
    .navbar {
      height: 100%;
      width: 100%;
      position: sticky;
      z-index: 1;
      top: 0;
      left: 0;
      display: flex;
      flex-direction: row;
      background-color: #534c4c;
      overflow-y: auto;
    }

    .navbutton {
      width: 150px;
      height: 40px;
      text-align: center;
      line-height: 40px;
      background: #383838;
      color: #fff;
      border-radius: 25px;
      text-transform: capitalize;
      border: none;
      cursor: pointer;
      display: block;
      margin: -2px auto;

      box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
      -moz-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
      -webkit-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
      -o-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
      -ms-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
    }

    .navbar a {
      text-decoration: none;
      font-size: 20px;
      color: white;
      padding: 10px;
      margin-left: 20px;
      height: 8vh;
      width: 100%;
      margin-top: 20px;
      display: flex;
      flex-direction: row;
    }

    .navbar p {
      font-size: 25px;
      color: white;
      margin-bottom: 0px;
      padding: 10px;
      margin-top: 30px;
      margin-left: 20px;
      margin-bottom: 0px;
    }



    .navbar a:hover {
      color: #778DA9;
    }

    .element1 {
      margin-top: 30px;
    }

    h1 {
      padding-left: 50%
    }


    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #ffff;
      font-family: Arial;
    }

    .info {
      display: grid;
      grid-template-columns: 30% 30% 30%;
      grid-row-gap: 10px;
      grid-gap: 2em;
      grid-column-gap: 10px;
      padding: 10px;
      padding-left: 90px;
    }

    .info>div {
      background: #534c4c;
      color: #fff;
      border: 1px solid rgba(0, 0, 0, 0.8);
      padding: 20px;
      font-size: 27px;
      text-align: center;
      border-radius: 10px;
    }

    .topnav {
      overflow: hidden;
      text-align: center;
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .topnav p {
      color: #750b49;
      font-size: 50px;
    }

    .datetime {
      position: fixed;
      bottom: 0;
      right: 0;
      background-color: #534c4c;
      padding: 10px;
      border: 2px solid #0D1B2A;
      border-radius: 10px;
      margin: 5px;
      color: white;
      font-size: 17px;
    }

    .Page {
      position: fixed;
      left: 300px;
      top: 10px;
      background-color: #0D1B2A;
      padding: 20px;
      border: 5px solid #0D1B2A;
      border-radius: 20px;
      margin: 10px;
      color: white;
      font-size: 25px;
    }
  </Style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="navbar">
    <a href="home"><button class=navbutton>Home</button></a>
    <a href="products"><button class=navbutton>Products</button></a>
    <a href="sale"><button class=navbutton>Sales</button></a>
    <a href="shortage"><button class=navbutton>Shortage</button></a>
    <a href="update"><button class=navbutton>Update</button></a>
    <a href="employees"><button class=navbutton>Employees</button></a>
    <a href="companies"><button class=navbutton>Companies</button></a>
    <a href="representatives"><button class=navbutton>Representatives</button></a>
    <a href="logout"><button class=navbutton>log out</button></a>
  </div>
  <div class="topnav">
    <p style="font-size: 50px;">Home page</p>
  </div>
  <div class="info">
    <div>
      <h3>Total Sales</h3>
    </div>
    <div>
      <h3>Number of Companies</h3>
    </div>
    <div>
      <h3>Number of Expired Products</h3>
    </div>
  </div>

  <div id="MyClockDisplay" class="datetime" onload="showTime()"></div>
  <script>
    function showTime() {
      var date = new Date();
      var h = date.getHours(); // 0 - 23
      var m = date.getMinutes(); // 0 - 59
      var s = date.getSeconds(); // 0 - 59
      var session = "AM";

      if (h == 0) {
        h = 12;
      }

      if (h > 12) {
        h = h - 12;
        session = "PM";
      }

      h = (h < 10) ? "0" + h : h;
      m = (m < 10) ? "0" + m : m;
      s = (s < 10) ? "0" + s : s;
      var today = new Date();
      var dd = String(today.getDate()).padStart(2, '0');
      var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
      var yyyy = today.getFullYear();

      today = mm + '/' + dd + '/' + yyyy;


      var time = h + ":" + m + ":" + s + " " + session;
      document.getElementById("MyClockDisplay").innerText = today + time;
      document.getElementById("MyClockDisplay").textContent = today + ' ' + time;


      setTimeout(showTime, 1000);

    }
    showTime();
  </script>
</body>

</html>
