--
-- Database: `dbstore`
--
CREATE DATABASE IF NOT EXISTS dbstore DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;

USE dbstore;

-- --------------------------------------------------------

--
-- Table structure for table "tbl_products"
--

CREATE TABLE tbl_products (
  id int(11) NOT NULL,
  code varchar(100) NOT NULL UNIQUE,
  name varchar(200) NOT NULL,
  description text NOT NULL,
  imagen varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table "tbl_products"
--

INSERT INTO tbl_products (id, code, name, description, imagen) 
VALUES
(1, '123-1231', 'Producto 1', 'Este es el producto 1', 'http://localhost/static/img/123-1231.jpg'),
(2, '123-1232', 'Producto 2', 'Este es el producto 2', 'http://localhost/static/img/123-1232.jpg'),
(3, '123-1233', 'Producto 3', 'Este es el producto 3', 'http://localhost/static/img/123-1233.jpg'),
(4, '123-1234', 'Producto 4', 'Este es el producto 4', 'http://localhost/static/img/123-1234.jpg'),
(5, '123-1235', 'Producto 5', 'Este es el producto 5', 'http://localhost/static/img/123-1235.jpg'),
(6, '123-1236', 'Producto 6', 'Este es el producto 6', 'http://localhost/static/img/123-1236.jpg'),
(7, '123-1237', 'Producto 7', 'Este es el producto 7', 'http://localhost/static/img/123-1237.jpg'),
(8, '123-1238', 'Producto 8', 'Este es el producto 8', 'http://localhost/static/img/123-1238.jpg'),
(9, '123-1239', 'Producto 9', 'Este es el producto 9', 'http://localhost/static/img/123-1239.jpg'),
(10, '123-1240', 'Producto 10', 'Este es el producto 10', 'http://localhost/static/img/123-1240.jpg');
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_products`
--
ALTER TABLE tbl_products
  ADD PRIMARY KEY (id);

ALTER TABLE `tbl_products` ADD UNIQUE(`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE tbl_products
  MODIFY id int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;

-- --------------------------------------------------------

--
-- Table structure for table "tbl_categories"
--

CREATE TABLE tbl_categories (
  id int(11) NOT NULL,
  name varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table "tbl_categories"
--

INSERT INTO tbl_categories (id, name) 
VALUES
(1, 'Categoría 1'), (2, 'Categoría 2'), (3, 'Categoría 3'), (4, 'Categoría 4'), (5, 'Categoría 5'),
(6, 'Categoría 6'), (7, 'Categoría 7'), (8, 'Categoría 8'), (9, 'Categoría 9'), (10, 'Categoría 10'),
(11, 'Categoría 11'), (12, 'Categoría 12'), (13, 'Categoría 13'), (14, 'Categoría 14'), (15, 'Categoría 15');
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE tbl_categories
  ADD PRIMARY KEY (id);

ALTER TABLE `tbl_categories` ADD UNIQUE(`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE tbl_categories
  MODIFY id int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;

-- --------------------------------------------------------

--
-- Table structure for table "tbl_products_categories"
--

CREATE TABLE tbl_products_categories (
  id_product int(11) NOT NULL,
  id_category int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table "tbl_products_categories"
--

INSERT INTO tbl_products_categories (id_product, id_category) 
VALUES
(1, 1), 
(2, 2), (2, 3),
(3, 4), (3, 5), (3, 6),
(4, 7), 
(5, 8), 
(6, 9), 
(7, 10), 
(8, 11), 
(9, 12), 
(10, 1);
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_products_categories`
--
ALTER TABLE tbl_products_categories
  ADD PRIMARY KEY (id_product, id_category);

/* Foreign Keys */
ALTER TABLE tbl_products_categories
  ADD CONSTRAINT `fk_products`
  FOREIGN KEY (`id_product`)
    REFERENCES `tbl_products`(`id`);
ALTER TABLE tbl_products_categories
  ADD CONSTRAINT `fk_categories`
  FOREIGN KEY (`id_category`)
    REFERENCES `tbl_categories`(`id`);
