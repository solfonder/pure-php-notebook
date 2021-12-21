<?php
    require '../Database/db.php';

    $query = $db->query(
        "SELECT *
        FROM Contacts
        ORDER BY surname, name"
    );
    $contacts = [];
    while($row = $query->fetch_row()) {
        $contacts[] = $row;
    }

    echo '<table class="table">
    <thead>
    <tr>
        <th scope="col">Фамилия</th>
        <th scope="col">Имя</th>
        <th scope="col">Номер</th>
        <th scope="col">Комментарий</th>
    </tr>
    </thead>
    <tbody>';
    if (isset($contacts)) {
        foreach ($contacts as $contact) {
            echo "<tr>
                <td>$contact[2]</td>
                <td>$contact[1]</td>
                <td>$contact[3]</td>
                <td>$contact[4]</td>
                </tr>";
        }
    }
    echo '</table>';
