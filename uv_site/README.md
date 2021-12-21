**Описание задачи:**

**Реализовать веб-приложение для хранения контактной информации клиентов.**
**Приложение должно иметь интерфейс для добавления нового клиента и интерфейс вывода ранее добавленных клиентов.** 

1. **composer install**
2. **Запустить миграцию открыв /migratedb.php** 

**SQL скрипт:**

`create table Contacts
(
id           int auto_increment
primary key,
name         varchar(150) not null,
surname      varchar(150) not null,
phone_number decimal(65)  not null,
comment      varchar(255) null,
created_at   datetime     null
);`

Для работы необходимо в Database/db.php изменить настройки подключения

**Страницы:**

`/addcontact.html – добавить контакт`

`/contacts.html – показать контакты`