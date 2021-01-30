DROP TABLE IF EXISTS customer CASCADE;
DROP TABLE IF EXISTS therapy_session CASCADE;
DROP TABLE IF EXISTS appointments CASCADE;
DROP TABLE IF EXISTS articles CASCADE;
DROP TABLE IF EXISTS therapist CASCADE;
DROP TABLE IF EXISTS journal CASCADE;

CREATE TABLE articles (
article_id SERIAL PRIMARY KEY,
article_name VARCHAR(60),
article_type VARCHAR(60)
);

CREATE TABLE therapy_session (
therapy_session_id SERIAL PRIMARY KEY,
therapy_session_name VARCHAR(60),
therapy_session_price VARCHAR(10),
therapy_session_description VARCHAR(100),
article_id INT,
CONSTRAINT fk_article 
    FOREIGN KEY (article_id) 
        REFERENCES articles(article_id)
);


CREATE TABLE appointments (
appointment_id SERIAL PRIMARY KEY,
appointment_type VARCHAR(30),
appointment_day TIMESTAMP,
appointment_time TIMESTAMP,
therapy_session_id INT,
CONSTRAINT fk_therapy_session 
    FOREIGN KEY (therapy_session_id) 
        REFERENCES therapy_session(therapy_session_id)
);


CREATE TABLE therapist (
therapist_id SERIAL PRIMARY KEY,
full_name VARCHAR(60),
phone VARCHAR(30),
email VARCHAR(60),
appointment_id INT,
CONSTRAINT fk_appointment_t 
    FOREIGN KEY (appointment_id) 
        REFERENCES appointments(appointment_id)
);


CREATE TABLE journal (
journal_id SERIAL PRIMARY KEY,
journal_entry_id SERIAL,
journal_entry TEXT,
journal_entry_date TIMESTAMP
);


CREATE TABLE customer (
customer_id SERIAL PRIMARY KEY,
first_name VARCHAR(30),
last_name VARCHAR(30),
street VARCHAR(60),
city VARCHAR(60),
state VARCHAR(8),
zip INT,
therapist_id INT,
appointment_id INT,
journal_id INT,
CONSTRAINT fk_therapist 
    FOREIGN KEY (therapist_id) 
        REFERENCES therapist(therapist_id),
CONSTRAINT fk_appointment_c 
    FOREIGN KEY (appointment_id) 
        REFERENCES appointments(appointment_id),
CONSTRAINT fk_journal 
    FOREIGN KEY (journal_id) 
        REFERENCES journal(journal_id)
);