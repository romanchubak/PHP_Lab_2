<?php include  "WorkWithFile.php"; ?>
<?php include "DoTable.php";?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lab 2</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
    </head>
    <body>
        <table>
            <tr>
                <td width="15%">
                    <form method="post" >
                        <label for="NameOfSubject">Ім'я предмету</label><br>
                        <input type="text" name="NameOfSubject"><br>
                        <label for="NumberOfTerm">Номер семестру</label><br>
                        <input type="text" name="NumberOfTerm"><br>
                        <label for="CountOfHours">Кількість годин</label><br>
                        <input type="text" name="CountOfHours"><br>
                        <label for="FormOfControl">Форма Контролю</label><br>
                        <input type="text" name="FormOfControl"><br>
                        <label for="FirstNameOfLector">Ім'я лектора</label><br>
                        <input type="text" name="FirstNameOfLector"><br>
                        <label for="SecondNameOfLector">Прізвище лектора</label><br>
                        <input type="text" name="SecondNameOfLector"><br>
                        <input type="submit" name="Add" placeholder="Додати" ><br>
                        <a href="index_for_lab3.php">lab 3</a><br>
                        <a href="index_for_lab4.php">lab 4</a><br>
                    </form>
                </td>
                <td width="85%">
                    <?php echo doTable(array("Прізвище лектора",
                            "Ім'я лектора",
                            "Кількість годин",
                            "Форма Контролю",
                            "Ім'я предмету",
                            "Номер семестру")
                        ,$data) ?>
                </td>
            </tr>
        </table>
    </body>
</html>