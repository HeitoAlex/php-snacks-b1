<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // $data = $_GET;  
        $messagge = "";

        if (empty ($_GET['userName']) || empty ($_GET['userAge']) || empty ($_GET['userMail'])) {
            $message = "Errore";
        } elseif (strlen($_GET['userName']) <= 3){
            $message = "Accesso Negato";
        } elseif (!str_contains ($_GET['userMail'], '@') || !str_contains ($_GET['userMail'] , '.')) {
            $message = "Accesso Negato";
        } elseif (!is_numeric($_GET['userAge'])) {
            $message = "Accesso Negato";
        } else {
            $message = "Accesso Riuscito";
        }

        echo $message;
    ?>

    
    
    
    <form action="./index.php" method="GET">
        <div>
            <label for="userName">Nome</label>
            <input type="text" name="userName" id="userName">
        </div>
        <div>
            <label for="userMail">Email</label>
            <input type="text" name="userMail" id="userMail">
        </div>
        <div>
            <label for="userAge">Età</label>
            <input type="text" name="userAge" id="userAge">
        </div>
    </form>
</body>
</html>


