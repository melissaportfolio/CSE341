/*
Create db on server
Create needed tables
Choose appropriate data types for each column
Ensure a PK to each table
Include FK where possible
Eliminate redundancy

Tables:
User
Item (therapy sessions)
Appointments
Materials
Therapist w/contact information
Journal
*/

CREATE TABLE customer (
customer_id SERIAL PRIMARY KEY,
first_name VARCHAR(30),
last_name VARCHAR(30),
street VARCHAR(60),
city VARCHAR(60),
state VARCHAR(8),
zip INT,

CONSTRAINT fk_therapist
FOREIGN KEY (therapist_id)
REFERENCES therapist(therapist_id),

CONSTRAINT fk_appointments
FOREIGN KEY (appointment_id)
REFERENCES appointments(appointment_id),

CONSTRAINT fk_journal
FOREIGN KEY (journal_id)
REFERENCES journal(journal_id)
);

CREATE TABLE therapy_session (
therapy_session_id SERIAL PRIMARY KEY,
therapy_session_name VARCHAR(60),
therapy_session_price VARCHAR(10),
therapy_session_description VARCHAR(100)
);

CREATE TABLE appointments (
appointment_id SERIAL PRIMARY KEY,
appointment_type VARCHAR(30),
appointment_day DATETIME,
appointment_time DATETIME,

CONSTRAINT fk_therapist
FOREIGN KEY (therapist_id)
REFERENCES therapist(therapist_id),

CONSTRAINT fk_therapy_session
FOREIGN KEY (therapy_session_id)
REFERENCES therapy_session(therapy_session_id)
);

CREATE TABLE articles (
article_id SERIAL PRIMARY KEY,
article_name VARCHAR(60),
article_type VARCHAR(60)
);

CREATE TABLE therapist (
therapist_id SERIAL PRIMARY KEY,
full_name VARCHAR(60),
phone VARCHAR(30),
email VARCHAR(60),

CONSTRAINT fk_appointments
FOREIGN KEY (appointment_id)
REFERENCES appointments(appointment_id)
);

CREATE TABLE journal (
journal_id SERIAL PRIMARY KEY,

CONSTRAINT fk_customer
FOREIGN KEY (customer_id)
REFERENCES customer(customer_id)

);
