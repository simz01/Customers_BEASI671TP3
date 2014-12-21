
CREATE TABLE adresses (
  id INTEGER PRIMARY KEY ASC,
  line_1_number_building TEXT,
  line_2_number_street INTEGER,
  line_3_area_locality TEXT,
  city TEXT,
  zip_postcode TEXT,
  state_province_county TEXT,
  iso_country_code TEXT,
  other_adress_details TEXT
);


--
-- Table structure for table `customers`
--

CREATE TABLE customers (
id INTEGER PRIMARY KEY ASC,
  customer_name TEXT,
  customer_phone TEXT,
  customer_email TEXT
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
  payment_method TEXT,
  card_number TEXT,
  date_of_expiry TEXT,
  security_number TEXT,
  other_details TEXT
);


--
-- Table structure for table `users`
--

CREATE TABLE users (
id INTEGER PRIMARY KEY ASC,
  username TEXT,
  password TEXT,
  email TEXT,
  name TEXT,
  role TEXT,
  hash_change_password TEXT,
  created TEXT,
  modified TEXT
); 

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `role`, `hash_change_password`, `created`, `modified`) VALUES
(2, 'admin', 'afebb4a30fffa1f413fd3045a5646d1fad3bd17a', 'admin@admin.com', NULL, 'admin', NULL, '2014-11-02 04:42:15', '2014-11-03 01:45:17'),
(3, 'author', '5e2b8e0a57ae97ce13591ff18ac554384bef92a3', 'author@author.com', NULL, 'author', NULL, '2014-11-02 22:06:24', '2014-11-03 07:39:51'),
(4, 'visiteur', '3a8c30145c9f28a480337f8f3628b18368407165', 'visiteur@visiteur.com', NULL, NULL, NULL, '2014-11-03 06:36:09', '2014-11-03 06:36:09');


