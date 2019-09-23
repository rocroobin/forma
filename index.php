<!doctype html>
<html>
 
   <head>
      <title>форма</title>
   </head>
   
   <body>
   
    <div style="max-width: 600px">
      <h2>Форма обратной связи</h2>
        <!-- проверка формы-->
        <script>
            function checkForm(form) {
                let name = form.name.value;
                let n = name.match(/^[A-Za-zА-Яа-я ]*[A-Za-zА-Яа-я ]+$/);
                if (!n) {
                    alert("Имя введено неверно");
                    return false;
                }
                let mail = form.mail.value;
                let m = mail.match(/^[A-Za-z0-9][A-Za-z0-9\._-]*[A-Za-z0-9_]*@([A-Za-z0-9]+([A-Za-z0-9-]*[A-Za-z0-9]+)*\.)+[A-Za-z]+$/);
                if (!m) {
                    alert("E-mail введен неверно");
                    return false;
                }
                return true;
            }
        </script>

        <form method="post" action="mail.php" onSubmit="return checkForm(this)">
          <fieldset>
            <legend>Оставьте сообщение:</legend>
              <label for="name">Фио:</label> <br>
              <input maxlength="30" type="text" name="name" /><br>
              <label for="mail">e-mail:</label><br>
              <input maxlength="30" type="text" name="mail" /><br>
              <label for="message">Сообщение:</label><br>
              <textarea rows="7" cols="50" name="message"></textarea><br>
              <input type="submit" value="Отправить" /><br>
          </fieldset>    
        </form>
    </div>
   
   </body>
   
</html>
