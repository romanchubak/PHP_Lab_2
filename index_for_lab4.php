<?php include "work_with_string_lab4.php";
      include "DoTable.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>lab4</title>
        <meta charset="utf-8">
    </head>
    <body>
        <table border="1" cellspacing="0" width="100%">
            <tr>
                <td align="center" width="17%">
                    <form method="post">
                        <label for="string_for_lab4">Введіть символи</label><br>
                        <input name="string_for_lab4" type="text"><br>
                        <input name="button_for_lab4" type="submit" value="тиць">
                    </form>
                </td>
                <td align="center">
                    <?php echo doTable(array("Прізвище лектора",
                            "Ім'я лектора",
                            "Кількість годин",
                            "Форма Контролю",
                            "Ім'я предмету",
                            "Номер семестру")
                        ,$subjects)?>
                </td>
            </tr>
        </table>
    </body>
</html>
