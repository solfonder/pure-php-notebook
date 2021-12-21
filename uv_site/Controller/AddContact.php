<?php
    require '../Database/db.php';

    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data)) {

        $errors = '';

        if (trim($data['name']) == '') {
            $errors .= "Введите имя <br>";
        } elseif (mb_strlen($data['name']) < 3 || mb_strlen($data['name']) > 150) {
            $errors .= "Недопустимая длинна имени <br>";
        }

        if ($data['surname'] == '') {
            $errors .= "Введите фамилию <br>";
        } elseif (mb_strlen($data['surname']) < 3 || mb_strlen($data['surname']) > 150) {
            $errors .= "Недопустимая длинна фамилии <br>";
        }

        $phones = $db->query("SELECT * FROM Contacts WHERE phone_number = '{$data['phone']}'");
        if ($data['phone'] == '') {
            $errors .= "Введите номер <br>";
        } elseif (mb_strlen($data['phone']) < 10 || mb_strlen($data['phone']) > 150) {
            $errors .= "Недопустимая длинна номера <br>";
        } elseif (!preg_match('%^[1-9]+[0-9]*$%', $data['phone'])) {
            $errors .= "Недопустимые символы в номере<br>";
        } elseif ($phones->num_rows !== 0) {
            $errors .= "Номер уже записан <br>";
        }

        $createdAt = date('Y-m-d H:i:s');

        if (empty($errors)) {
            $query = sprintf('INSERT INTO Contacts(name, surname, phone_number, comment, created_at)
            VALUES("%s", "%s", "%s", "%s", "%s")',
                $data['name'],
                $data['surname'],
                $data['phone'],
                $data['comment'],
                $createdAt
            );

            $result = $db->query($query);
            if ($result) {
                echo json_encode(['status' => 'success']);
            }
        } else {
            echo json_encode(['status' => 'error', 'errors' => $errors]);
        }
    }

