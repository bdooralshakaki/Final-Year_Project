CREATE TABLE IF NOT EXISTS `userProfile` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `bio` varchar(300) NOT NULL,
  `location` varchar(15) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `userEmail` varchar(30) NOT NULL,
  `dateAdd` date NOT NULL,
  `Status` varchar(300) NOT NULL,
  `userPic` varchar(200) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;


CREATE TABLE IF NOT EXISTS `review` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `cPic` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`cid`),
  FOREIGN KEY (uid)
  REFERENCES users(userId)
  ON DELETE CASCADE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;



CREATE TABLE IF NOT EXISTS `Status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `allStatus` varchar(255) NOT NULL,
  `dateAdd` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;


