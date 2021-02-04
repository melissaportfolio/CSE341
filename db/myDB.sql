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
therapy_session_description VARCHAR(100)
);


CREATE TABLE therapist (
therapist_id SERIAL PRIMARY KEY,
full_name VARCHAR(60),
phone VARCHAR(30),
email VARCHAR(60)
);

CREATE TABLE appointments (
appointment_id SERIAL PRIMARY KEY,
appointment_type VARCHAR(30),
appointment_day DATE,
appointment_time TIME,
therapy_session_id INT,
therapist_id INT,
CONSTRAINT fk_therapy_session 
    FOREIGN KEY (therapy_session_id) 
        REFERENCES therapy_session(therapy_session_id),
CONSTRAINT fk_therapist_a
    FOREIGN KEY (therapist_id) 
        REFERENCES therapist(therapist_id)
);


CREATE TABLE customer (
customer_id SERIAL PRIMARY KEY,
first_name VARCHAR(30),
last_name VARCHAR(30),
street VARCHAR(60),
city VARCHAR(60),
state VARCHAR(8),
zip INT,
-- customer_email VARCHAR(30),
-- customer_password VARCHAR(10)
);

CREATE TABLE journal (
journal_entry_id SERIAL PRIMARY KEY,
journal_entry TEXT,
journal_entry_date DATE,
customer_id INT,
CONSTRAINT fk_customer
    FOREIGN KEY (customer_id) 
        REFERENCES customer(customer_id)
);