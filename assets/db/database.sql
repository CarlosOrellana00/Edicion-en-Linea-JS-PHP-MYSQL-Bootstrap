--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sample`
--

CREATE TABLE `tbl_sample` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `gender` enum('Male','Female') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sample`
--

INSERT INTO `tbl_sample` (`id`, `first_name`, `last_name`, `gender`) VALUES
(1, 'John', 'Smith', 'Male'),
(2, 'Peter', 'Parker', 'Male'),
(4, 'Donna', 'Huber', 'Female'),
(5, 'Anastasia', 'Peterson', 'Female'),
(6, 'Ollen', 'Donald', 'Male'),
(10, 'Joseph', 'Stein', 'Male'),
(11, 'Wilson', 'Parker', 'Female'),
(12, 'Lillie', 'Kirst', 'Female'),
(13, 'James', 'Whitchurch', 'Male'),
(14, 'Timothy', 'Brewer', 'Male'),
(16, 'Sally', 'Martin', 'Male'),
(17, 'Allison', 'Pinkston', 'Male'),
(18, 'Karen', 'Davis', 'Female'),
(19, 'Jaclyn', 'Rocco', 'Male'),
(20, 'Pamela', 'Boyter', 'Male'),
(21, 'Anthony', 'Alaniz', 'Male'),
(22, 'Myrtle', 'Stiltner', 'Male'),
(23, 'Gary', 'Hernandez', 'Male'),
(24, 'Fred', 'Smith', 'Male'),
(25, 'Ronald', 'John', 'Male'),
(26, 'Stephen', 'Mohamed', 'Male'),
(28, 'Michael', 'Dyer', 'Male'),
(29, 'Betty', 'Beam', 'Male'),
(30, 'Anny', 'Peterson', 'Female'),
(31, 'Peter', 'Stodola', 'Male'),
(32, 'Rose', 'Johnson', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_sample`
--
ALTER TABLE `tbl_sample`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_sample`
--
ALTER TABLE `tbl_sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;