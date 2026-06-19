CREATE TABLE books (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  author VARCHAR(255),
  price INT,
  image VARCHAR(255)
);
CREATE TABLE cart (
  id INT AUTO_INCREMENT PRIMARY KEY,
  book_id INT,
  quantity INT
);
INSERT INTO `books` (`id`, `title`, `author`, `price`, `image`) VALUES
(1, 'Гарри Поттер', 'Дж. Роулинг', 899, 'images/book1.jpg'),
(2, 'Властелин колец', 'Толкин', 1200, 'images/book2.jpg'),
(3, 'Метро 2033', 'Глуховский', 750, 'images/book3.jpg'),
(4, 'Шерлок Холмс', 'Дойл', 650, 'images/book4.jpg'),
(5, 'Ёжик в тумане', 'С.Козлов', 950, 'images/book5.jpg'),
(6, 'Алхимик', 'П.Коэльо', 700, 'images/book6.jpg'),
(7, 'Сто лет одиночества', 'Г.Гарсиа', 1200, 'images/book7.jpg'),
(8, 'Из тьмы веков', 'И.Базоркин', 1800, 'images/book8.jpg'),
(9, 'Милый друг', 'Г.Д.Мопассан', 900, 'images/book9.jpg'),
(10, 'Маленький принц', 'А.Экзюпери', 1100, 'images/book10.jpg'),
(11, 'Призрак оперы', 'Г.Леру', 850, 'images/book11.jpg'),
(12, 'Белый клык', 'Д.Лондон', 699, 'images/book12.jpg');
