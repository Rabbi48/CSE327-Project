<!DOCTYPE html>
<html>

<head>
   <link rel="stylesheet" type="text/css" href="./static/css/update.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
      * {
         font-family: Arial;
         margin: 0px;
         padding: 0px;
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

      .cart {
         position: fixed;
         top: 0;
         right: 0;
         background-color: #0D1B2A;
         padding: 15px;
         border: 2px solid #0D1B2A;
         border-radius: 10px;
         margin: 5px;
         color: white;
         font-size: 20px;
      }

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
         margin: 18px auto;

         box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
         -moz-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
         -webkit-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
         -o-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
         -ms-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
      }

      .navbar a {
         text-decoration: none;
         font-size: 25px;
         color: white;
         padding: 10px;
         margin-left: 20px;
         height: 10vh;
         width: 100%;
         margin-top: 20px;
         display: block;
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

      .navbar a:hover {
         color: #778DA9;
      }

      .element1 {
         margin-top: 30px;
      }

      .topbar {
         margin-top: 25px;
         margin-left: 315px;
         display: flex;
         flex-direction: row;
         align-items: center;
         align-content: center;
         justify-content: center;
      }

      .searchbar {
         padding: 5px;
         font-size: 17px;
         margin-right: 30px;
      }

      .searchby {
         padding: 5px;
         font-size: 17px;
         margin-right: 30px;
      }

      .go {
         background-color: #0D1B2A;
         padding: 5px;
         font-size: 17px;
         background-color: #0D1B2A;
         border: 2px solid #0D1B2A;
         border-radius: 10px;
         color: white;
      }

      .sortby {
         top: 0;
         right: 0;
         margin-top: 20px;
         margin-left: 83%;
      }

      table {
         margin-top: 10px;
         margin-left: 350px;
         color: #0D1B2A;
         width: 70%;
         text-align: center;
      }

      td {
         border: 1px solid #ddd;
         padding: 5px;
      }


      /*tr:nth-child(even){background-color: #f2f2f2;}*/

      tr:hover {
         background-color: #e64d00;
      }

      th {
         border: 1px solid #ddd;
         padding-top: 10px;
         padding-bottom: 10px;
         background-color: #e64d00;
         color: white;
      }

      table button {
         background-color: #fff;
         border: none;
         padding: 2px;
      }

      .quantity {
         padding: 1px;
         margin: 0;
      }
   </style>
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

      <p style="font-size: 50px;">Update</p>
   </div>
   <table>
      <tr>
         <th>Products</th>
         <th>Generic</th>
         <th>Price</th>
         <th>Stock</th>
         <th>company</th>
         <th>Update</th>
         <th>Delete</th>
      </tr>

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
