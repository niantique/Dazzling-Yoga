-- Active: 1748246604740@@localhost@3306@dazzling_yoga
DROP TABLE IF EXISTS professor;

DROP TABLE IF EXISTS location;

DROP TABLE IF EXISTS user;

DROP TABLE IF EXISTS owner;

DROP TABLE IF EXISTS chat;

DROP TABLE IF EXISTS studio;

DROP TABLE IF EXISTS city;

DROP TABLE IF EXISTS country;

DROP TABLE IF EXISTS class;

DROP TABLE IF EXISTS time;

DROP TABLE IF EXISTS recurrence;

DROP TABLE IF EXISTS payment;

DROP TABLE IF EXISTS card;

DROP TABLE IF EXISTS booking;

DROP TABLE IF EXISTS subscription;

CREATE TABLE country (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(48)
);

CREATE TABLE city (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(85),
    zipcode SMALLINT,
    country_id INTEGER,
    FOREIGN KEY (country_id) REFERENCES country (id)
);

CREATE TABLE owner (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    address VARCHAR(320),
    email VARCHAR(320),
    phone VARCHAR(15),
    password VARCHAR(60),
    city_id INTEGER,
    FOREIGN KEY (city_id) REFERENCES city (id)
);

CREATE TABLE subscription (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80),
    price FLOAT,
    description TEXT,
    start DATETIME DEFAULT CURRENT_TIMESTAMP,
    end DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE user (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    address VARCHAR(320),
    email VARCHAR(320),
    phone VARCHAR(15),
    password VARCHAR(60),
    city_id INTEGER,
    subscription_id INTEGER,
    FOREIGN KEY (city_id) REFERENCES city (id),
    FOREIGN KEY (subscription_id) REFERENCES subscription (id)
);

CREATE TABLE professor (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    address VARCHAR(320),
    email VARCHAR(320),
    phone VARCHAR(15),
    password VARCHAR(60),
    city_id INTEGER,
    FOREIGN KEY (city_id) REFERENCES city (id)
);

CREATE TABLE studio (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80),
    address VARCHAR(320),
    facilities VARCHAR(250),
    capacity SMALLINT,
    photos VARCHAR(250),
    website VARCHAR(250),
    slogan VARCHAR(250),
    socials VARCHAR(250),
    description TEXT,
    city_id INTEGER,
    owner_id INTEGER,
    FOREIGN KEY (city_id) REFERENCES city (id),
    FOREIGN KEY (owner_id) REFERENCES owner (id)
);

CREATE TABLE class (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80),
    category VARCHAR(30),
    description TEXT,
    time_id INTEGER,
    FOREIGN KEY (time_id) REFERENCES time(id)
);

CREATE TABLE time(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    date DATETIME,
    timeslot CHAR(7)
);

CREATE TABLE recurrence (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    type VARCHAR(50),
    day VARCHAR(10),
    class_id INTEGER,
    FOREIGN KEY (class_id) REFERENCES class (id)
);

CREATE TABLE booking (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    date DATETIME,
    rating FLOAT,
    comment TEXT,
    class_id INTEGER,
    user_id INTEGER,
    FOREIGN KEY (class_id) REFERENCES class (id),
    FOREIGN KEY (user_id) REFERENCES user (id)
);

CREATE TABLE location (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    start DATETIME DEFAULT CURRENT_TIMESTAMP,
    end DATETIME DEFAULT CURRENT_TIMESTAMP,
    comment VARCHAR(250),
    rating FLOAT,
    studio_id INTEGER,
    professor_id INTEGER,
    FOREIGN KEY (studio_id) REFERENCES studio (id),
    FOREIGN KEY (professor_id) REFERENCES professor (id)
);

CREATE TABLE card (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    number VARCHAR(20),
    expirationdate DATE,
    ccv VARCHAR(4)
);

CREATE TABLE payment (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    date DATETIME DEFAULT CURRENT_TIMESTAMP,
    invoice CHAR(10),
    value FLOAT,
    statut BOOLEAN,
    card_id INTEGER,
    FOREIGN KEY (card_id) REFERENCES card (id)
);

CREATE TABLE chat (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    start DATETIME,
    end DATETIME,
    name VARCHAR(50),
    professor_id INTEGER,
    class_id INTEGER,
    owner_id INTEGER,
    FOREIGN KEY (professor_id) REFERENCES professor (id),
    FOREIGN KEY (class_id) REFERENCES class (id),
    FOREIGN KEY (owner_id) REFERENCES owner (id)
);

INSERT INTO country(name) 
VALUES ('France'),
('Spain'),
('Italy'),
('Thailand'),
('United States');

INSERT INTO city(name, zipcode, country_id) VALUES
('Paris', 75000, 1),
('Lyon', 69100, 1),
('Bangkok', 10100,4),
('Chiang Mai', 50000,4),
('Los Angeles', 90000, 5),
('Miami', 33000, 5);

INSERT INTO owner(firstname, lastname, address, email, phone, city_id) VALUES
('Emily', 'Thompson', '4821 Maple Grove Lane', 'emily.thompson87@gmail.com', 5552874, 11),
('William', 'Bay', '3261 Layman Court', 'william.b@gmail.com', 6783857621, 11),
('Louisa', 'Cook', '2073 May Street', 'louisa.cook@gmail.com', 6062569923, 11);

INSERT INTO subscription(name, price, description) VALUES
('Flexible Class Pass', 45, '- Members only pay for the classes they attend
- There’s no fixed number of classes to attend each month
- Unlike traditional memberships, there is no ongoing monthly fee
- Perfect for those with unpredictable schedules'),
('One Month Pass', 350, '350$ per month
- Members can attend as many yoga classes within the month, without any restrictions on class type or frequency.
- no hidden costs for attending additional classes. The subscription covers all classes, even workshops.'),
('One Year Pass', 3500, '- Members can attend any and all yoga classes offered by the studio for the entire year, without restrictions on frequency or class type.
- Full access to every class including workshops and specialty sessions.');

INSERT INTO user(firstname, lastname, address, email, phone, city_id, subscription_id) VALUES
('Mary', 'McDowell', '3554 Boone Street', 'mcdowellm@gmail.com', 3612898061, 11, 1),
('Margarita', 'Lee', '3902 Scenicview Drive', 'margaritalee@gmail.com', 4309854524, 11, 1),
('Joanne', 'Baker', '999 Eagle Drive', 'bakerjoanne@gmail.com', 7347442686, 11, 2),
('Virginia', 'Slusse', '4663 Centennial Farm Road', 'vslusse@gmail.com', 7125864678, 11,3);

INSERT INTO professor(firstname, lastname, address, email, phone, city_id) VALUES
('Betty', 'Nickels', '899 Parrish Avenue', 'bettnick@gmail.com', 8312453205, 11),
('Kathy', 'Mathews', '2235 Pine Garden Lane', 'kathmath@gmail.com', 7707434198, 11);

INSERT INTO studio(name, address, facilities, capacity, photos, website, slogan, socials, description, city_id, owner_id) VALUES
('Yoga Box', '1011 Cole Ave', 'shower', 15, 'https://images.unsplash.com/photo-1588286840104-8957b019727f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'https://www.yogabox.com/hollywood/', 'United We Flow', 'YogaBox', 'Situated at 1011 Cole Ave, the Yoga Box Hollywood studio merges LA’s dynamic spirit with the transformative power of yoga. This isn’t just another yoga class; it’s a revolution in fitness and well-being. Dive into our three signature formats: Sculpt, Power Flow, and Restore, each designed to challenge your body, sharpen your mind, and elevate your spirit so you can choose that style of yoga that fits your goals.

At Yoga Box Hollywood, our expert instructors are dedicated to guiding you from one breakthrough to the next. Our state-of-the-art facility is designed for top-tier performance and deep relaxation, making it the perfect arena for both seasoned yogis and beginners to thrive. You can reach new levels of strength, flexibility, and balance, and we’re here to help.

Are you ready to step onto the mat? We’re offering all new members a chance to start strong with our 3-Free Class Trial. Grab your mats and towels, and join us in the heart of Hollywood and be part of a fitness movement that’s redefining what it means to be strong and centered.', 11, 10),
('Ya Fit Pilates Studio', '5867 Kanan Road', 'Lotion', 20, 'https://lh3.googleusercontent.com/p/AF1QipNJjkYjRoiBMz9QIA39kgKEvlUCV6dDF0v7_kCM=s294-w294-h220-n-k-no', 'https://yafitpilates.com/agoura-hills/', 'Moove better Feel better Live better', 'YaFitPilates', 'Introducing Ya Fit Pilates, where tradition meets innovation in the heart of Agoura Hills! Discover a fusion of the classic principles of Pilates with dynamic, cutting-edge techniques that redefine your fitness journey.', 11, 9);

INSERT INTO class(name, category, description) VALUES
('Ashtanga Yoga', 'Yoga', 'Ashtanga Yoga is a dynamic and structured form of yoga that combines breath, movement, and meditation. It is a traditional practice popularized by Sri K. Pattabhi Jois, emphasizing a set sequence of postures linked by breath and movement (vinyasa).'),
('Hatha Yoga', 'Yoga', 'Hatha Yoga is a traditional form of yoga that focuses on physical postures (asanas), breath control (pranayama), and meditation to balance the body and mind. It is gentle and accessible, promoting flexibility, strength, and relaxation, making it ideal for beginners and those seeking a mindful, holistic practice.'),
('Vinyasa Yoga', 'Yoga', 'Vinyāsa is a smooth transition between asanas in flowing styles of modern yoga as exercise such as Vinyasa Krama Yoga and Ashtanga Vinyasa Yoga.'),
('Pilates', 'Other', 'Pilates is a system of exercise and movement that is designed to increase strength, flexibility, and balance. Pilates integrates breath and movement with proper body mechanics to increase greater physical and mental awareness of how the body moves and feels.');

