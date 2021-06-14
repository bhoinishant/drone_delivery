CREATE TABLE `med` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `altphone` varchar(50) NOT NULL,
  `gst` varchar(50) NOT NULL,
  `dl` varchar(50) NOT NULL,
  `aadhar` varchar(50) NOT NULL,
  `pan` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;