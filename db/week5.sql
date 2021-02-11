create table Scriptures (
    id INT, 
    book VARCHAR(30), 
    chapter VARCHAR(30), 
    verse VARCHAR(255), 
    content VARCHAR(255));



CREATE TABLE topic(
	id SERIAL PRIMARY KEY,
	name VARCHAR(50) NOT NULL
);

CREATE TABLE scripture_topic(
	scripture_id int NOT NULL,
	topic_id int NOT NULL
);

ALTER TABLE scripture_topic ADD FOREIGN KEY (scripture_id) REFERENCES Scriptures(id);
ALTER TABLE scripture_topic ADD FOREIGN KEY (topic_id) REFERENCES topic(id); 

INSERT INTO Scriptures(id, book, chapter, verse, content)
VALUES(5, 'Hebrews', 11, 4, 'By faith Abel offered unto God a more excellent sacrifice than Cain, by which he obtained witness that he was righteous, God testifying of his gifts: and by it he being dead yet speaketh.'),
(6, '1 Corinthians', 13, 13, 'And now abideth faith, hope, charity, these three; but the greatest of these is charity.'),
(7, 'Moroni', 7, 47, 'But charity is the pure love of Christ, and it endureth forever; and whoso is found possessed of it at the last day, it shall be well with him.');