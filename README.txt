До вашої уваги тестове завдання "Гостьова книга".

Для розгортання проекту на власному сервері необхідно зробити наступні маніпуляції:

1. Завантажте файли, напишіть в командній строці: git clone https://github.com/MrPaulMoonshiner/Test_Task.git

2. В корені проекту виконайте команду composer update або composer install

3. Налаштуйте конфігурацію БД в файлі ".evn"

    3.1 Вибрати драйвер БД. (mysql або sqlite)

    3.2 Задати доступпи до БД (Логін Пароль)

    3.3 Задати ім'я БД

4. Виконайте команду   php bin/console doctrine:database:create     для створення БД

5. Виконайте команду   php bin/console doctrine:schema:create       для створення таблиць БД

6. Виконайте команду   php bin/console doctrine:fixtures:load       для заповнення БД тестовою інформацією

    6.1 Адмінісратор:
            Логін:  MrAdmin
            Пароль: 123456

    6.2 35 шаблонних відгуків користувачів.

7. Проект готовий до використання.

