create table cursos(
idcurso int not null primary key auto_increment,
titulo varchar(150) not null,
descricao varchar(400) not null,
imagem varchar(150) not null,
link varchar(150) not null
);

insert into cursos
(titulo,descricao,imagem,link)
VALUES
(
"JavaScript",
"Curso de JavaScript, voltado para o mercado de trabalho",
"curso-img.jpg",
"www.google.com"
),
(
"PHP",
"Curso de PHP, voltado para o mercado de trabalho",
"curso-img.jpg",
"www.google.com"
),
(
"SQL",
"Curso de SQL, voltado para o mercado de trabalho",
"curso-img.jpg",
"www.google.com"
),
(
"Bootstrap",
"Curso de Bootstrap, voltado para o mercado de trabalho",
"curso-img.jpg",
"www.google.com"
),
(
"Python",
"Curso de Python, voltado para o mercado de trabalho",
"curso-img.jpg",
"www.google.com"
)