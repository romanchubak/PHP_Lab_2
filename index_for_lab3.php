<?php include  "Work_with_array_lab3.php";
    include "DoTable.php";?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lab_3</title>
        <meta charset="utf-8">
    </head>
    <body>
        <table border="">
            <tr>
                <td>

                    <?php echo doTable(array("Прізвище лектора",
                        "Ім'я лектора",
                        "Кількість годин",
                        "Форма Контролю",
                        "Ім'я предмету",
                        "Номер семестру")
                        ,$data)
                    ?>
                </td>
                <td>
                    <?php echo doTable(array("лектори"),$lecturers)?>
                </td>
            </tr>
        </table>
    </body>
</html>
