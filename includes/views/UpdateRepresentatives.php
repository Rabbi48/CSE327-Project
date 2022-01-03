<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    * {
        font-family: arial;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .update {
        width: 800px;
        background-color: rgb(0, 0, 0, 6);
        margin: auto;
        color: #e64d00;
        padding: 10px 0px 10px 0px;
        text-align: center;
        border-radius: 15px 15px 0px 0px;
    }

    .datetime {
        position: fixed;
        bottom: 0;
        right: 0;
        background-color: #e64d00;
        padding: 10px;
        border: 2px solid #0D1B2A;
        border-radius: 10px;
        margin: 5px;
        color: white;
        font-size: 17px;
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

    .navbar {
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

    .navbar a:hover {
        color: #778DA9;
    }

    .element1 {
        margin-top: 30px;
    }

    .main {
        width: 800px;
        margin: auto;
    }

    form {
        padding: 10px;

    }


    .phone {
        position: relative;
        left: 200px;
        top: -37px;
        line-height: 30px;
        border-radius: 6px;
        padding: -15px 22px;
        font-size: 18px;
        width: 200px;

    }


    .name {
        margin-left: 25px;
        margin-top: 0px;
        width: 125px;
        font-size: 18px;
        padding-top: 10px;

    }

    button {
        background-color: #3BAF9F;
        display: block;
        margin: 0px 0px 0px 50px;
        text-align: center;
        font-size: 20px;
        border-radius: 12px;
        border: 2 px solid #366473;
        padding: 14px 80px;
        outline: none;
        color: white;
        cursor: pointer;
        transition: 0.25px;
    }
</style>

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
        <p style="font-size: 50px;">Update Representatives</p>
    </div>

    <div class="update">
        <h1>Update Representatives Information</h1>
    </div>
    <div class="main">

        <?php $repID = $_GET['pid']; ?>


        <form action="updateComplete?pid=<?php echo $repID ?>" method="POST">

            <h2 class="name">New Phone Number</h2>
            <input type="text" class="phone" name="phone" value="" required>
            <br>
            <button type="submit">Update</button>
        </form>


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
