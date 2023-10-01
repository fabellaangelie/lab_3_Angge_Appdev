<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        /* Add some basic CSS for styling */
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        .container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f2f2f2;
            text-align: center;
        }
        .form-group {
            margin: 10px 0;
        }

                .body{
                    background-color: grey;
                }
                .container{
                    display: flex;
                    flex-direction: column;
                    height: 50vh;
                    width: 50vh;
                    justify-content: center;
                    align-items: center;
                    background-color: rgba(0, 0, 0, 0.5);
                    box-shadow: inset -5px -5px rgba(0, 0, 0, 0.5);
                    border-radius: 25px;
                }

                .card-header{
                    color: black;
                    font-size: 2rem;
                    border-bottom: 2px solid rgba(255, 255, 255, 0.5);
                    text-align: center;
                    background-color: whitesmoke ;
                }
                .h4{
                    color: white;
                }
                .row{
                    padding: 10px 20px;
                    margin-top: 5px;
                    width: 100%;
                    border: none;
                    outline: none;
                    border-radius: 20px;
                    background-color: rgba(0, 0, 0, 0.5);
                    box-shadow: inset -3px -3px rgba(0, 0, 0, 0.5);
                    color: white;
                    font-size: 1rem;
                }
                .col-md-4{
                    padding: 10px 20px;
                    margin-top: 2px;
                    width: 100%;
                    height: 80%
                    border: none;
                    outline: none;
                    border-radius: 20px;
                    box-shadow: inset -3px -3px rgba(0, 0, 0, 0.5);
                    color: white;
                    font-size: 1rem;
                }


    </style>
</head>
<body>
    <div class="container">
        <h2>User Login</h2>
        <form id="userLoginForm" action="main">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit">Login</button>
        </form>
        <p>Not a user? <a href="#" id="switchToAdmin">Admin Login</a></p><br>
        <a href="<?= site_url('auth/register')?>">Have no account, create new account</a> <br>
    </div>

    <div class="container" style="display: none;" id="adminLoginContainer">
        <h2>Admin Login</h2>
        <form id="adminLoginForm" action="admin">
            <div class="form-group">
                <label for="adminUsername">Username:</label>
                <input type="text" id="adminUsername" name="adminUsername">
            </div>
            <div class="form-group">
                <label for="adminPassword">Password:</label>
                <input type="password" id="adminPassword" name="adminPassword">
            </div>
            <button type="submit">Login</button>
        </form>
        <p>Not an admin? <a href="#" id="switchToUser">User Login</a></p><br>
    </div>


    <script>
        // JavaScript to toggle between user and admin login forms
        const userLoginForm = document.getElementById("userLoginForm");
        const adminLoginForm = document.getElementById("adminLoginForm");
        const switchToAdminLink = document.getElementById("switchToAdmin");
        const switchToUserLink = document.getElementById("switchToUser");
        const adminLoginContainer = document.getElementById("adminLoginContainer");

        switchToAdminLink.addEventListener("click", function(e) {
            e.preventDefault();
            userLoginForm.style.display = "none";
            adminLoginContainer.style.display = "block";
        });

        switchToUserLink.addEventListener("click", function(e) {
            e.preventDefault();
            adminLoginContainer.style.display = "none";
            userLoginForm.style.display = "block";
        });
    </script>
</body>
</html>
