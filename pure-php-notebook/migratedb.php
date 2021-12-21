<?php
    require_once 'vendor/autoload.php';
    require 'Database/db.php';

    $query = 'create table Contacts (
            id           int auto_increment
            primary key,
            name         varchar(150) not null,
            surname      varchar(150) not null,
            phone_number varchar(150)  not null,
            comment      varchar(255) null,
            created_at   datetime     null
            )';

    $result = $db->query($query);

    if ($result) {
        echo 'Миграция успешна';
        $createdAt = date('Y-m-d H:i:s');
        $faker = Faker\Factory::create();
        for ($i = 0; $i <= 10; $i++) {
            $query = sprintf('INSERT INTO Contacts(name, surname, phone_number, created_at)
            VALUES("%s", "%s", "%s", "%s")',
                $faker->name,
                $faker->lastName,
                $faker->phoneNumber,
                $createdAt
            );
            $db->query($query);
        }
    }


