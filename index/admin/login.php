<?php
include '../bd.php';


if (!empty($_POST)) {
    extract($_POST);
    $valid = (bool) true;

    if (isset($_POST['submit'])) {
        $mail = $mail;
        $password = $password;

        if (empty($mail)) {
            $valid = false;
            $err_mail = "Veuillez renseigner ce champs !";
        } else {
            $req = $conn->prepare("SELECT id
					FROM `admin`
					WHERE email = ?");

            $req->execute(array($mail));
            $utilisateur = $req->fetch();

            if (!isset($utilisateur['id'])) {
                $valid = false;
                $err_mail = "Veuillez renseigner ce champs !";
            }
        }

        if (empty($password)) {
            $valid = false;
            $err_password = "Veuillez renseigner ce champs !";
        }

        $req = $conn->prepare("SELECT id
					FROM `admin` 
					WHERE email = ? AND password = ?");

        $req->execute(array($mail, $password));
        $verif_utilisateur = $req->fetch();

        if (!isset($verif_utilisateur['id'])) {
            $valid = false;
            $err_mail = "Veuillez renseigner ce champs !";
        }
        var_dump($valid);
        if ($valid) {

            $req = $conn->prepare("SELECT *
					FROM utilisateur 
					WHERE id = ?");

            $req->execute(array($verif_utilisateur['id']));
            $verif_utilisateur = $req->fetch();

            $_SESSION['id'] = $verif_utilisateur['id'];
            $_SESSION['email'] = $verif_utilisateur['mail'];

            header('Location: ../dashbord.php');
            exit;
        } else {
            header("Location: ../login.php");
            echo 'mot de passe ou email incorrecte';
            exit();
        }
    }
}














?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <br>
    <div class="container">
       <div class="row">
       <div class="col-md-4"></div>
         <div class="col-md-4">
                    <form method='POST'>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name='mail' aria-describedby="emailHelp">
                            
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" name='password' aria-describedby="emailHelp">
                        </div>

                        <button type="submit"  name='submit' class="btn btn-primary">Submit</button>
                        </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


</body>
</html>