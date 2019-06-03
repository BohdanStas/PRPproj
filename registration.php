<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AbitPro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signin.css">

</head>
<body>
<form action="index.php" method="post" class="form-signin">
    <h1 class="h3 mb-3  font-weight-normal">Regestration:</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required="">

    <label for="inputName" class="sr-only">Name</label>
    <input type="text" name="name" id="inputName" class="form-control" placeholder="text" required="">

    <label for="inputSurname" class="sr-only">Surname</label>
    <input type="text" name="surname" id="inputsurname" class="form-control" placeholder="Surname" required="">

    <label for="inputThirdName" class="sr-only">ThirdName</label>
    <input type="text" name="ThirdName" id="inputThirdName" class="form-control" placeholder="ThirdName" required="">

    <p><strongChoose Subject</strong></p>
    <p><select id="selectSubj1" name="hero">
            <option value="Украинский" selected>Украинский</option>
            <option value="Математика" >Математика</option>
            <option value="Английский">Английский</option>
            <option value="Физика">Физика</option>
        </select>

    <p><strongChoose Subject</strong></p>
    <p><select id="selectSubj2" name="hero">
            <option value="Украинский" selected>Украинский</option>
            <option value="Математика" >Математика</option>
            <option value="Английский">Английский</option>
            <option value="Физика">Физика</option>
        </select>

    <p><strongChoose Subject</strong></p>
    <p><select id="selectSubj3" name="hero">
            <option value="Украинский" selected>Украинский</option>
            <option value="Математика" >Математика</option>
            <option value="Английский">Английский</option>
            <option value="Физика">Физика</option>
        </select>



        <button class="btn btn-lg btn-primary btn-block" id="sendBtn" name="send" type="button">Sign in</button>
    <p class="mt-5 mb-3 text-muted">© 2017-2019</p>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/do.js"></script>
</body>
</html>