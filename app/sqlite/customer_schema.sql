
CREATE TABLE adresses (
  id INTEGER PRIMARY KEY ASC,
  line_1_number_building VARCHAR,
  line_2_number_street INTEGER,
  line_3_area_locality VARCHAR,
  city VARCHAR,
  zip_postcode VARCHAR,
  state_province_county VARCHAR,
  iso_country_code VARCHAR,
  other_adress_details TEXT
);


--
-- Table structure for table `customers`
--

CREATE TABLE customers (
id INTEGER PRIMARY KEY ASC,
  customer_name VARCHAR,
  customer_phone VARCHAR,
  customer_email VARCHAR
); 


--
-- Table structure for table `customers_adresses`
--

CREATE TABLE customers_adresses (
id INTEGER PRIMARY KEY ASC,
  adress_id INTEGER,
  customer_id INTEGER
); 

--
-- Table structure for table `customers_payment_informations`
--

CREATE TABLE customers_payment_informations (
id INTEGER PRIMARY KEY ASC,
  customer_id INTEGER,
  payment_information_id INTEGER
); 

--
-- Table structure for table `payment_informations`
--

CREATE TABLE payment_informations (
id INTEGER PRIMARY KEY ASC,
  payment_method VARCHAR,
  card_number VARCHAR,
  date_of_expiry VARCHAR,
  security_number VARCHAR,
  other_details TEXT
);


--
-- Table structure for table `users`
--

CREATE TABLE users (
id INTEGER PRIMARY KEY ASC,
  username VARCHAR,
  password VARCHAR,
  email VARCHAR,
  name VARCHAR,
  role VARCHAR,
  hash_change_password VARCHAR,
  created VARCHAR,
  modified VARCHAR
  avatar VARCHAR
); 

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `role`, `hash_change_password`, `created`, `modified`) VALUES
(2, 'admin', 'afebb4a30fffa1f413fd3045a5646d1fad3bd17a', 'admin@admin.com', NULL, 'admin', NULL, '2014-11-02 04:42:15', '2014-11-03 01:45:17'),
(3, 'author', '5e2b8e0a57ae97ce13591ff18ac554384bef92a3', 'author@author.com', NULL, 'author', NULL, '2014-11-02 22:06:24', '2014-11-03 07:39:51'),
(4, 'visiteur', '3a8c30145c9f28a480337f8f3628b18368407165', 'visiteur@visiteur.com', NULL, NULL, NULL, '2014-11-03 06:36:09', '2014-11-03 06:36:09');


