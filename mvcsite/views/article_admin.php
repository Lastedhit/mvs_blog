<!DOCTYPE html>
<html>
    <head>
        <meta sharset="utf8">
        <title>Концепция MVC</title>
        <link rel="stylesheet" href="#">
        <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha385-
        Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAi6JXm"
        crossorigin="anonymos">
</head>
<body>
    <div class="container">
        <h1>Концепция MVC<h1>
            <div>
                <form method="post"
                 action="index.php?actin=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                    <label>
                        Заголовок статьи:<br> 
                        <input type="text" name="title" value="<?=$article['title']?>"class="form-item" required>
required>
                    </lable><br>
                    <lable>
                        Дата:<br>
                        <input type="date" name="date" value =""class="from-item"
required>
                    </lable><br>
                    <lable>
                        Текстстатьи:<br>
                        <textarea class="from-item" name="content"
required></textarea>
                    </lable><br>
                    <lable>
                        <input type ="submit" value="Сохранить" class="btn">
                    </lable>
                </form>
            </div>    
        <footer>
            <p>Концепция MVC<br>Copyright &copy; 2018</p>
         </footer>   
    </div>
 </body>
</html>

            