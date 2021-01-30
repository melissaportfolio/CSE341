INSERT INTO articles(article_name, article_type)
VALUES ('How to help your teen cope with anxiety', 'family'),
('Healthy coping strategies', 'individual'),
('Depression and your teen: how to help', 'family'),
('10 tips on how to overcome your fears', 'individual'),
('5 ways that you can move forward and overcome anxiety', 'individual');


INSERT INTO therapy_session(therapy_session_name, therapy_session_price, therapy_session_description)
VALUES ('individual session', '$60', 'One individual therapy session'),
('family session', '$120', 'One family therapy session'),
('individual session bundle', '$500', '10 individual therapy sessions'),
('family session bundle', '$900', '10 family therapy sessions');


INSERT INTO therapist(full_name, phone, email)
VALUES ('John Smith', '555-555-5555', 'therapist1@gmail.com'),
('Melanie Jones', '111-111-1111', 'therapist2@gmail.com');


INSERT INTO appointments(appointment_type, appointment_day, appointment_time, therapy_session_id, therapist_id)
VALUES ('individual', '2021-03-01', '17:00:00', 1, 1),
('individual', '2021-03-01', '18:00:00', 1, 1),
('individual', '2021-03-01', '19:00:00', 1, 1),
('family', '2021-03-01', '17:00:00', 2, 2),
('family', '2021-03-01', '18:00:00', 2, 2),
('family', '2021-03-01', '19:00:00', 2, 2);


INSERT INTO customer(first_name, last_name, street, city, state, zip)
VALUES ('Ellie', 'Jackson', '123 Golden Street', 'Provo', 'UT', '84606'),
('Nathan', 'Anderson', '345 Maple Drive', 'Provo', 'UT', '84606');

INSERT INTO journal(journal_entry, journal_entry_date, customer_id)
VALUES ('Today was a good day.', '2021-01-01', (SELECT customer_id FROM customer WHERE customer_id = 1)),
('Today was another good day.', '2021-01-02', (SELECT customer_id FROM customer WHERE customer_id = 1)),
('Third good day in a row.', '2021-01-03', (SELECT customer_id FROM customer WHERE customer_id = 1));
