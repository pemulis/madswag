--
-- Table structure for table `template`
--

DROP TABLE IF EXISTS `template`;
CREATE TABLE IF NOT EXISTS `template` (
  `pickID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `winner1` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `spread1` tinyint(2) DEFAULT NULL,
  `winner2` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `spread2` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`pickID`),
  UNIQUE KEY `userID` (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `template_actual`
--

DROP TABLE IF EXISTS `template_actual`;
CREATE TABLE IF NOT EXISTS `template_actual` (
  `gameID` tinyint(2) NOT NULL,
  `winner` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `spread` tinyint(2) NOT NULL,
  PRIMARY KEY (`gameID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template_gbg`
--

DROP TABLE IF EXISTS `template_gbg`;
CREATE TABLE IF NOT EXISTS `template_gbg` (
  `pickID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `winner1` tinyint(1) NOT NULL,
  `spread1` tinyint(2) NOT NULL,
  `winner2` tinyint(1) NOT NULL,
  `spread2` tinyint(2) NOT NULL,
  PRIMARY KEY (`pickID`),
  UNIQUE KEY `userID` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template_pfp`
--

DROP TABLE IF EXISTS `template_pfp`;
CREATE TABLE IF NOT EXISTS `template_pfp` (
  `pickID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `barID` int(9) NOT NULL,
  PRIMARY KEY (`pickID`),
  UNIQUE KEY `userID` (`userID`),
  KEY `template_pfp_ibfk_3` (`barID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template_scores`
--

DROP TABLE IF EXISTS `template_scores`;
CREATE TABLE IF NOT EXISTS `template_scores` (
  `pickID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `score` float(6,1) NOT NULL,
  `grade` float(5,2) NOT NULL,
  PRIMARY KEY (`pickID`),
  UNIQUE KEY `userID` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for table `template`
--
ALTER TABLE `template`
  ADD CONSTRAINT `template_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `useraccounts` (`userID`) ON DELETE CASCADE;

--
-- Constraints for table `template_gbg`
--
ALTER TABLE `template_gbg`
  ADD CONSTRAINT `template_gbg_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `template` (`userID`) ON DELETE CASCADE,
  ADD CONSTRAINT `template_gbg_ibfk_2` FOREIGN KEY (`pickID`) REFERENCES `template` (`pickID`) ON DELETE CASCADE;

--
-- Constraints for table `template_pfp`
--
ALTER TABLE `template_pfp`
  ADD CONSTRAINT `template_pfp_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `template` (`userID`) ON DELETE CASCADE,
  ADD CONSTRAINT `template_pfp_ibfk_1` FOREIGN KEY (`pickID`) REFERENCES `template` (`pickID`) ON DELETE CASCADE,
  ADD CONSTRAINT `template_pfp_ibfk_3` FOREIGN KEY (`barID`) REFERENCES `baraccounts` (`barID`) ON DELETE CASCADE;

--
-- Constraints for table `template_scores`
--
ALTER TABLE `template_scores`
  ADD CONSTRAINT `template_scores_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `template` (`userID`) ON DELETE CASCADE,
  ADD CONSTRAINT `template_scores_ibfk_1` FOREIGN KEY (`pickID`) REFERENCES `template` (`pickID`) ON DELETE CASCADE;
