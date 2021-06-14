CREATE TABLE `pilot` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `altmobile` varchar(50) NOT NULL,
  `d_type` varchar(50) NOT NULL,
  `d_range` varchar(50) NOT NULL,
  `uin` varchar(50) NOT NULL,
  `aadhar` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `medicine` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `altphone` varchar(100) NOT NULL,
  `gst` varchar(100) NOT NULL,
  `dl` varchar(100) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `aadhar` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `image` varchar(50) NOT NULL,
  `pan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;