
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<style>
        body{
            background-color: grey;
        }
        .container{
            display: flex;
            flex-direction: column;
            height: 80vh;
            width: 80vh;
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
<body>

    <div class="container">
        <div class="row" style="margin-top:45px">
            <div class="col-md-4" col-md-offset-4>
                <h4>Login</h4><hr>
                <form action="admin" method="post">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter your email">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="password" placeholder="Enter your password">
                    </div>
                    <br>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit" >Sign In</button>
                    </div>
                    <br>
                    <a href="<?= site_url('auth/register')?>">Have no account, create new account</a> <br>
                    <a href="<?= site_url('auth/login')?>">Users</a>

                </form>
            </div>

        </div>
    </div>

</body>
</html>
