CREATE TABLE `questions` (
  id int(30) NOT NULL,
  question text DEFAULT NULL,
  response varchar(300) NOT NULL
);

INSERT INTO questions (id,question,response) VALUES
(1, 'MAIN|main', 'https://kjsce.somaiya.edu/en');
