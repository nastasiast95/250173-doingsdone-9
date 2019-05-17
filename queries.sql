INSERT INTO projects (name, user_id)
VALUES
('Входящие', 3),
('Учёба', 2),
('Работа', 1),
('Домашние дела', 4),
('Авто', 2);

INSERT INTO tasks (name, date_deadline, status, user_id, project_id)
VALUES
('Собеседование в IT компании', '2019-05-07', 0, 1, 3),
('Выполнить тестовое задание', '2018-12-25', 0, 1, 3),
('Сделать задание первого раздела', '2018-12-21', 1, 2, 2),
('Встреча с другом', '2018-12-22', 0, 3, 1),
('Купить корм для кота', NULL, 0, 4, 4),
('Заказать пиццу', NULL, 0, 4, 4);

INSERT INTO users (name, email, password)
VALUES
('Анастасия', 'nastya@mail.ru', 'meowmeow'),
('Кусик', 'kusik@mail.ru', 'zagryzu'),
('Брандашмыг', 'brrrr@mail.ru', 'dinosaur'),
('Фалафель', 'falafel@mail.ru', 'dinosaur');

-- Получить список из всех проектов для пользователя с id 1
SELECT * FROM projects
WHERE user_id = 1;

-- Получить список из всех задач для проекта с id 3
SELECT * FROM tasks
WHERE project_id = 3;

-- Пометить задачу с id 6 как выполненную
UPDATE tasks SET status = 1
WHERE id = 6;

-- Обновить название задачи с id 2 на 'Позвонить HR'
UPDATE tasks SET name = 'Позвонить HR'
WHERE id = 2;
