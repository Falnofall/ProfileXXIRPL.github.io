<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .nav {
            display: flex;
            justify-content: center;
            align-items: center;
            list-style-type: none;
        }

        .sub_nav {
            height: auto;
            width: auto;
        }

        .sub_nav>.link {
            text-decoration: none;
            text-align: center;
            padding-right: 30px;
            font-size: 20px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body>
<ul class="nav">
        <li class="sub_nav"><a class="link" href="index.php">Home</a></li>
        <li class="sub_nav"><a class="link" href="about.php">About</a></li>
        <li class="sub_nav"><a class="link" href="contact.php">Contact</a></li>
    </ul>

    <hr>

    <div>
        <h1>Contact Me</h1>
        <form action="" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="">
            <br>
            <label for="pesan">Pesan</label>
            <textarea name="message" placeholder="Tulis pesan anda">

            </textarea><br>
            <input type="submit" value="Kirim">
        </form>
    </div>
    <hr>
    <center>
        <footer>
            <p>Copyright &copy; 2024 Muhammad Naufal RAdithya</p>
        </footer>
    </center>
</body>

</html>