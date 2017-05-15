-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2017 at 10:59 AM
-- Server version: 5.5.53-0+deb8u1
-- PHP Version: 5.6.29-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `weather_results`
--

-- --------------------------------------------------------

--
-- Table structure for table `ABSR`
--

CREATE TABLE IF NOT EXISTS `ABSR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'ABSR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ABSR`
--

INSERT INTO `ABSR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'ABSR', 'Tuscaloosa, AL', '84.8', 'Clear', NULL, NULL, NULL, '1494863701'),
(2, 'ABSR', 'Warrior, AL', '86.0', 'Clear', 'Air Quality Alert', '...CODE ORANGE AIR QUALITY ALERT HAS BEEN ISSUED FOR JEFFERSON AND\nSHELBY COUNTIES...\nThe Alabama Department of Environmental Management...ADEM...has\nissued an Air Quality Alert for Jefferson and Shelby Counties for\nMonday...May 15.\nUnder Code Orange conditions...ground level ozone concentrations are\nexpected to reach levels that are unhealthy for sensitive groups.\nChildren and people with asthma are individuals most at risk under\nthese expected conditions.\nADEM recommends the following actions during an air quality alert\nfor ozone:\nConserve electricity and set your air conditioner at a higher\ntemperature.\nLimit driving and combine errands.\nUse the bus or car pool to work.\nAvoid use of gasoline power lawn and garden equipment.\nRefuel cars and trucks after 6 PM.\nLimit engine idling.\nUse household...workshop...and garden chemicals in ways that keep\nevaporation to a minimum...or try to avoid them when poor air\nquality is forecast.\nIf breathing becomes difficult...move indoors.\nFor more in', '<a href="https://alerts.weather.gov/cap/wwacapget.php?x=AL125850555874.AirQualityAlert.1258506511D8AL.BMXAQABMX.e0b2a44dcee423fa6fb8b095d67969a8" target="_blank">Link</a>', '1494863702'),
(3, 'ABSR', 'Brookwood, AL', '85.0', 'Clear', 'Air Quality Alert', '...CODE ORANGE AIR QUALITY ALERT HAS BEEN ISSUED FOR JEFFERSON AND\nSHELBY COUNTIES...\nThe Alabama Department of Environmental Management...ADEM...has\nissued an Air Quality Alert for Jefferson and Shelby Counties for\nMonday...May 15.\nUnder Code Orange conditions...ground level ozone concentrations are\nexpected to reach levels that are unhealthy for sensitive groups.\nChildren and people with asthma are individuals most at risk under\nthese expected conditions.\nADEM recommends the following actions during an air quality alert\nfor ozone:\nConserve electricity and set your air conditioner at a higher\ntemperature.\nLimit driving and combine errands.\nUse the bus or car pool to work.\nAvoid use of gasoline power lawn and garden equipment.\nRefuel cars and trucks after 6 PM.\nLimit engine idling.\nUse household...workshop...and garden chemicals in ways that keep\nevaporation to a minimum...or try to avoid them when poor air\nquality is forecast.\nIf breathing becomes difficult...move indoors.\nFor more in', '<a href="https://alerts.weather.gov/cap/wwacapget.php?x=AL125850555874.AirQualityAlert.1258506511D8AL.BMXAQABMX.e0b2a44dcee423fa6fb8b095d67969a8" target="_blank">Link</a>', '1494863703');

-- --------------------------------------------------------

--
-- Table structure for table `ABWR`
--

CREATE TABLE IF NOT EXISTS `ABWR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'ABWR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ABWR`
--

INSERT INTO `ABWR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'ABWR', 'Brimingham, AL', '85.5', 'Clear', 'Air Quality Alert', '...CODE ORANGE AIR QUALITY ALERT HAS BEEN ISSUED FOR JEFFERSON AND\nSHELBY COUNTIES...\nThe Alabama Department of Environmental Management...ADEM...has\nissued an Air Quality Alert for Jefferson and Shelby Counties for\nMonday...May 15.\nUnder Code Orange conditions...ground level ozone concentrations are\nexpected to reach levels that are unhealthy for sensitive groups.\nChildren and people with asthma are individuals most at risk under\nthese expected conditions.\nADEM recommends the following actions during an air quality alert\nfor ozone:\nConserve electricity and set your air conditioner at a higher\ntemperature.\nLimit driving and combine errands.\nUse the bus or car pool to work.\nAvoid use of gasoline power lawn and garden equipment.\nRefuel cars and trucks after 6 PM.\nLimit engine idling.\nUse household...workshop...and garden chemicals in ways that keep\nevaporation to a minimum...or try to avoid them when poor air\nquality is forecast.\nIf breathing becomes difficult...move indoors.\nFor more in', '<a href="https://alerts.weather.gov/cap/wwacapget.php?x=AL125850555874.AirQualityAlert.1258506511D8AL.BMXAQABMX.e0b2a44dcee423fa6fb8b095d67969a8" target="_blank">Link</a>', '1494863703');

-- --------------------------------------------------------

--
-- Table structure for table `ARSR`
--

CREATE TABLE IF NOT EXISTS `ARSR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'ARSR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ARSR`
--

INSERT INTO `ARSR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'ARSR', 'Nashville, AR', '85.3', 'Clear', NULL, NULL, NULL, '1494863704'),
(2, 'ARSR', 'Waldron, AR', '85.6', 'Clear', NULL, NULL, NULL, '1494863705');

-- --------------------------------------------------------

--
-- Table structure for table `AUTR`
--

CREATE TABLE IF NOT EXISTS `AUTR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'AUTR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AUTR`
--

INSERT INTO `AUTR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'AUTR', 'Prattville, AL', '86.3', 'Clear', NULL, NULL, NULL, '1494863705');

-- --------------------------------------------------------

--
-- Table structure for table `BBAY`
--

CREATE TABLE IF NOT EXISTS `BBAY` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'BBAY',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BBAY`
--

INSERT INTO `BBAY` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'BBAY', 'Bogalusa, LA', '91.2', 'Clear', NULL, NULL, NULL, '1494863706');

-- --------------------------------------------------------

--
-- Table structure for table `BHRR`
--

CREATE TABLE IF NOT EXISTS `BHRR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'BHRR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BHRR`
--

INSERT INTO `BHRR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'BHRR', 'Birmingham, AL', '85.5', 'Clear', 'Air Quality Alert', '...CODE ORANGE AIR QUALITY ALERT HAS BEEN ISSUED FOR JEFFERSON AND\nSHELBY COUNTIES...\nThe Alabama Department of Environmental Management...ADEM...has\nissued an Air Quality Alert for Jefferson and Shelby Counties for\nMonday...May 15.\nUnder Code Orange conditions...ground level ozone concentrations are\nexpected to reach levels that are unhealthy for sensitive groups.\nChildren and people with asthma are individuals most at risk under\nthese expected conditions.\nADEM recommends the following actions during an air quality alert\nfor ozone:\nConserve electricity and set your air conditioner at a higher\ntemperature.\nLimit driving and combine errands.\nUse the bus or car pool to work.\nAvoid use of gasoline power lawn and garden equipment.\nRefuel cars and trucks after 6 PM.\nLimit engine idling.\nUse household...workshop...and garden chemicals in ways that keep\nevaporation to a minimum...or try to avoid them when poor air\nquality is forecast.\nIf breathing becomes difficult...move indoors.\nFor more in', '<a href="https://alerts.weather.gov/cap/wwacapget.php?x=AL125850555874.AirQualityAlert.1258506511D8AL.BMXAQABMX.e0b2a44dcee423fa6fb8b095d67969a8" target="_blank">Link</a>', '1494863707');

-- --------------------------------------------------------

--
-- Table structure for table `BLMR`
--

CREATE TABLE IF NOT EXISTS `BLMR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'BLMR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BLMR`
--

INSERT INTO `BLMR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'BLMR', 'Hooper, WA', '48.6', 'Clear', NULL, NULL, NULL, '1494863708'),
(2, 'BLMR', 'Colfax, WA', '48.7', 'Clear', NULL, NULL, NULL, '1494863709'),
(3, 'BLMR', 'Thornton, WA', '48.6', 'Clear', NULL, NULL, NULL, '1494863710'),
(4, 'BLMR', 'Wallula, WA', '53.8', 'Clear', NULL, NULL, NULL, '1494863710'),
(5, 'BLMR', 'Milton, WA', '49.2', 'Mostly Cloudy', NULL, NULL, NULL, '1494863711'),
(6, 'BLMR', 'Walla Walla, WA', '55.6', 'Clear', NULL, NULL, NULL, '1494863712'),
(7, 'BLMR', 'Arlington, WA', '49.8', 'Mostly Cloudy', NULL, NULL, NULL, '1494863712');

-- --------------------------------------------------------

--
-- Table structure for table `BLUR`
--

CREATE TABLE IF NOT EXISTS `BLUR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'BLUR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BLUR`
--

INSERT INTO `BLUR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'BLUR', 'Waynesville, NC', '78.8', 'Clear', NULL, NULL, NULL, '1494863713'),
(2, 'BLUR', 'Naples, NC', '81.2', 'Clear', NULL, NULL, NULL, '1494863714');

-- --------------------------------------------------------

--
-- Table structure for table `BVRR`
--

CREATE TABLE IF NOT EXISTS `BVRR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'BVRR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BVRR`
--

INSERT INTO `BVRR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'BVRR', 'Boise, ID', '49.2', 'Clear', 'Flood Warning', 'The National Weather Service in Boise has issued a\n* Flood Warning for...\nSnowmelt in...\nNortheastern Elmore County in southwestern Idaho...\n* Until noon MDT Monday\n* Flooding continues along the south fork of the Boise River\nupstream of Anderson Ranch Reservoir. Continued snowmelt will keep\nflows elevated through the upcoming week.\n* Some locations that will experience flooding include...\nAtlanta, Pine, Rocky Bar, Featherville, Gunsight Peak, Trinity\nLakes, James Creek Summit, Barber Flat Guard Station, Dutch Creek\nGuard Station, Twin Springs and Anderson Ranch Reservoir.\n* This warning replaces the previously issued flood warning.', '<a href="https://alerts.weather.gov/cap/wwacapget.php?x=ID12585045D55C.FloodWarning.12585064F298ID.BOIFLWBOI.a0ac1df0234b8aff479d7f02725ee2a0" target="_blank">Link</a>', '1494863714'),
(2, 'BVRR', 'Widler, ID', '52.1', 'Clear', 'Flood Warning', '...The Flood Warning continues for the following rivers in Idaho...\nBoise River At Glenwood Bridge affecting Ada and Canyon Counties.\n.Releases from Lucky Peak reservoir are resulting in high river\nlevels on the Boise River below the dam. These flows are necessary\nfor flood control due to high elevation snowmelt and diminishing\nstorage space in the reservoir system. The high flows are expected\nto continue for the foreseeable future. The flows will increase to\naround 9200 cfs on Monday May 15th, and 9500 cfs on Tuesday May 16th.\nThe Flood Warning continues for\nThe Boise River At Glenwood Bridge.\n* until further notice...or until the warning is cancelled.\n* Minor flooding is occurring and Minor flooding is forecast.\n* Flood stage is 7000 cfs.\n* Forecast...The river will rise to near 9200 cfs on Monday and\n9500 cfs on Tuesday.\n* Impact...At 9500 cfs...Or 11.5 feet, flooding of low areas\nnear the river in Boise, Garden City, Eagle, Star, and Caldwell\nwill occur. Debris in the river will co', '<a href="https://alerts.weather.gov/cap/wwacapget.php?x=ID12585027E998.FloodWarning.12585064F298ID.BOIFLSBOI.311ee94e3560aec62d22833f43deb6fc" target="_blank">Link</a>', '1494863715');

-- --------------------------------------------------------

--
-- Table structure for table `EIRR`
--

CREATE TABLE IF NOT EXISTS `EIRR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'EIRR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `EIRR`
--

INSERT INTO `EIRR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'EIRR', 'Twin Falls, ID', '48.0', 'Mostly Cloudy', 'Special Weather Statement', '...Late Spring Storm System On Track to Impact Southeast Idaho\nTuesday Night Through Thursday...\nA late spring storm system will bring winter like conditions to\nthe Snake Plain and South Central Highlands Tuesday night through\nThursday. Snow levels near 7500 feet Tuesday afternoon will fall\nto the valley floors by Wednesday morning. snow accumulations of\na trace to 2 inches are expected below 6000 feet elevation, and 2\nto 6 inches above 6000 feet, including the east bench areas.\nWesterly winds Tuesday afternoon will increase to 25 to 35 mph\nwith gusts to 45 mph and continue well into Tuesday night.', '<a href="https://alerts.weather.gov/cap/wwacapget.php?x=ID12585063341C.SpecialWeatherStatement.12585064F298ID.PIHSPSPIH.d45403c583715667114e05075d362f60" target="_blank">Link</a>', '1494863715'),
(2, 'EIRR', 'Rupert, ID (Northside)', '50.9', 'Partly Cloudy', 'Flood Warning', 'The National Weather Service in Pocatello has extended the\n* Flood Warning for...\nRain and Snowmelt in...\nCuster County in central Idaho...\nBlaine County in central Idaho...\nNorthwestern Butte County in southeastern Idaho...\n* Until 200 PM MDT Monday\n* A marked decrease in flow has been observed on many area rivers\ndue to cooler temperatures and diminished precipitation. Area\nrivers will continue to run near or outside their normal banks\nthrough the next 24 hours and thus the areal flood warning will\ncontinue for a large portion of Custer, Blaine, and northwest\nButte Counties. Many back country roads may still be inundated\nwith water or washed out and travel in those areas is not advised.', '<a href="https://alerts.weather.gov/cap/wwacapget.php?x=ID12585054C3A0.FloodWarning.12585064F2FCID.PIHFLWPIH.bd8141ea7c49e3f69eb3d5bd196b6a2d" target="_blank">Link</a>', '1494863716'),
(3, 'EIRR', 'Hatch, UT (Raft River)', '59.1', 'Clear', 'Winter Storm Watch', '...WINTER STORM WATCH IN EFFECT FROM LATE TUESDAY NIGHT THROUGH\nWEDNESDAY EVENING...\nThe National Weather Service in Salt Lake City has issued a\nWinter Storm Watch...which is in effect from late Tuesday night\nthrough Wednesday evening.\n* AFFECTED AREA...The Wasatch Mountains.\n* SNOW ACCUMULATIONS...7 to 14 inches by late Wednesday evening.\n* TIMING...Developing ahead of the Wednesday morning commute, and\npersisting heavy at times into the evening.\n* WINDS...West Northwest gusts around 50 mph near exposed\nridgelines.\n* IMPACTS...Snow early Wednesday is expected to impact the\nWednesday morning commute. Winter driving conditions are\npossible including along Interstate 80 through Parleys Canyon,\nnear Logan Summit and also Sardine Summit. Visibilities will be\nreduced due to blowing and drifting snow. Allow extra time for\ntravel on Wednesday. Check your winter survival kit in your car,\nmaking sure you have extra clothing, blankets, shovel, food,\nwater, flashlight and batteries.', '<a href="https://alerts.weather.gov/cap/wwacapget.php?x=UT125850631540.WinterStormWatch.125850900DC0UT.SLCWSWSLC.c68dc7fb414401f6362c8a649f39d61a" target="_blank">Link</a>', '1494863717'),
(4, 'EIRR', 'Burley, ID (Oakley)', '50.1', 'Partly Cloudy', 'Special Weather Statement', '...Late Spring Storm System On Track to Impact Southeast Idaho\nTuesday Night Through Thursday...\nA late spring storm system will bring winter like conditions to\nthe Snake Plain and South Central Highlands Tuesday night through\nThursday. Snow levels near 7500 feet Tuesday afternoon will fall\nto the valley floors by Wednesday morning. snow accumulations of\na trace to 2 inches are expected below 6000 feet elevation, and 2\nto 6 inches above 6000 feet, including the east bench areas.\nWesterly winds Tuesday afternoon will increase to 25 to 35 mph\nwith gusts to 45 mph and continue well into Tuesday night.', '<a href="https://alerts.weather.gov/cap/wwacapget.php?x=ID12585063341C.SpecialWeatherStatement.12585064F298ID.PIHSPSPIH.d45403c583715667114e05075d362f60" target="_blank">Link</a>', '1494863717'),
(5, 'EIRR', 'Rexburg, ID (Yellowstone)', '53.6', 'Partly Cloudy', 'Special Weather Statement', '...Late Spring Storm System On Track to Impact Southeast Idaho\nTuesday Night Through Thursday...\nA late spring storm system will bring winter like conditions back\nto Southwest Idaho Tuesday night through Thursday. Snow levels\nTuesday evening will be near 7500 feet elevation and lower to\nnear 4000 feet elevation by Wednesday morning. For the Central\nMountains, a trace to 5 inches of snow is possible below 6500\nfeet, and 5 to 10 inches are expected at elevations of 6500 to\n9000 feet. For the Eastern Highlands below 6000 feet, mixed rain\nand snow will provide accumulations up to 2 inches, and above 6000\nfeet up to 6 inches of snow.', '<a href="https://alerts.weather.gov/cap/wwacapget.php?x=ID12585063341C.SpecialWeatherStatement.12585064F298ID.PIHSPSPIH.6aeb3c9298ad3db2ac141aa042560e69" target="_blank">Link</a>', '1494863718'),
(6, 'EIRR', 'Parker, ID (St Anthony)', '50.2', 'Partly Cloudy', 'Special Weather Statement', '...Late Spring Storm System On Track to Impact Southeast Idaho\nTuesday Night Through Thursday...\nA late spring storm system will bring winter like conditions back\nto Southwest Idaho Tuesday night through Thursday. Snow levels\nTuesday evening will be near 7500 feet elevation and lower to\nnear 4000 feet elevation by Wednesday morning. For the Central\nMountains, a trace to 5 inches of snow is possible below 6500\nfeet, and 5 to 10 inches are expected at elevations of 6500 to\n9000 feet. For the Eastern Highlands below 6000 feet, mixed rain\nand snow will provide accumulations up to 2 inches, and above 6000\nfeet up to 6 inches of snow.', '<a href="https://alerts.weather.gov/cap/wwacapget.php?x=ID12585063341C.SpecialWeatherStatement.12585064F298ID.PIHSPSPIH.6aeb3c9298ad3db2ac141aa042560e69" target="_blank">Link</a>', '1494863719'),
(7, 'EIRR', 'Ammon, ID (Goshen)', '53.2', 'Partly Cloudy', 'Special Weather Statement', '...Late Spring Storm System On Track to Impact Southeast Idaho\nTuesday Night Through Thursday...\nA late spring storm system will bring winter like conditions back\nto Southwest Idaho Tuesday night through Thursday. Snow levels\nTuesday evening will be near 7500 feet elevation and lower to\nnear 4000 feet elevation by Wednesday morning. For the Central\nMountains, a trace to 5 inches of snow is possible below 6500\nfeet, and 5 to 10 inches are expected at elevations of 6500 to\n9000 feet. For the Eastern Highlands below 6000 feet, mixed rain\nand snow will provide accumulations up to 2 inches, and above 6000\nfeet up to 6 inches of snow.', '<a href="https://alerts.weather.gov/cap/wwacapget.php?x=ID12585063341C.SpecialWeatherStatement.12585064F298ID.PIHSPSPIH.6aeb3c9298ad3db2ac141aa042560e69" target="_blank">Link</a>', '1494863720'),
(8, 'EIRR', 'Ririe, ID (East Belt)', '53.1', 'Partly Cloudy', 'Special Weather Statement', '...Late Spring Storm System On Track to Impact Southeast Idaho\nTuesday Night Through Thursday...\nA late spring storm system will bring winter like conditions back\nto Southwest Idaho Tuesday night through Thursday. Snow levels\nTuesday evening will be near 7500 feet elevation and lower to\nnear 4000 feet elevation by Wednesday morning. For the Central\nMountains, a trace to 5 inches of snow is possible below 6500\nfeet, and 5 to 10 inches are expected at elevations of 6500 to\n9000 feet. For the Eastern Highlands below 6000 feet, mixed rain\nand snow will provide accumulations up to 2 inches, and above 6000\nfeet up to 6 inches of snow.', '<a href="https://alerts.weather.gov/cap/wwacapget.php?x=ID12585063341C.SpecialWeatherStatement.12585064F298ID.PIHSPSPIH.6aeb3c9298ad3db2ac141aa042560e69" target="_blank">Link</a>', '1494863721'),
(9, 'EIRR', 'Ucon, ID (West Belt)', '52.7', 'Partly Cloudy', 'Special Weather Statement', '...Late Spring Storm System On Track to Impact Southeast Idaho\nTuesday Night Through Thursday...\nA late spring storm system will bring winter like conditions back\nto Southwest Idaho Tuesday night through Thursday. Snow levels\nTuesday evening will be near 7500 feet elevation and lower to\nnear 4000 feet elevation by Wednesday morning. For the Central\nMountains, a trace to 5 inches of snow is possible below 6500\nfeet, and 5 to 10 inches are expected at elevations of 6500 to\n9000 feet. For the Eastern Highlands below 6000 feet, mixed rain\nand snow will provide accumulations up to 2 inches, and above 6000\nfeet up to 6 inches of snow.', '<a href="https://alerts.weather.gov/cap/wwacapget.php?x=ID12585063341C.SpecialWeatherStatement.12585064F298ID.PIHSPSPIH.6aeb3c9298ad3db2ac141aa042560e69" target="_blank">Link</a>', '1494863721'),
(10, 'EIRR', 'Idaho Falls, ID (Old Butte)', '52.5', 'Partly Cloudy', 'Special Weather Statement', '...Late Spring Storm System On Track to Impact Southeast Idaho\nTuesday Night Through Thursday...\nA late spring storm system will bring winter like conditions back\nto Southwest Idaho Tuesday night through Thursday. Snow levels\nTuesday evening will be near 7500 feet elevation and lower to\nnear 4000 feet elevation by Wednesday morning. For the Central\nMountains, a trace to 5 inches of snow is possible below 6500\nfeet, and 5 to 10 inches are expected at elevations of 6500 to\n9000 feet. For the Eastern Highlands below 6000 feet, mixed rain\nand snow will provide accumulations up to 2 inches, and above 6000\nfeet up to 6 inches of snow.', '<a href="https://alerts.weather.gov/cap/wwacapget.php?x=ID12585063341C.SpecialWeatherStatement.12585064F298ID.PIHSPSPIH.6aeb3c9298ad3db2ac141aa042560e69" target="_blank">Link</a>', '1494863722');

-- --------------------------------------------------------

--
-- Table structure for table `GDLK`
--

CREATE TABLE IF NOT EXISTS `GDLK` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'GDLK',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `GDLK`
--

INSERT INTO `GDLK` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'GDLK', 'Kalamazoo, MI', '67.9', 'Clear', NULL, NULL, NULL, '1494863723');

-- --------------------------------------------------------

--
-- Table structure for table `GRNW`
--

CREATE TABLE IF NOT EXISTS `GRNW` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'GRNW',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `GRNW`
--

INSERT INTO `GRNW` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'GRNW', 'Kooskia, ID', '50.5', 'Clear', NULL, NULL, NULL, '1494863723'),
(2, 'GRNW', 'Lewiston, ID', '52.1', 'Partly Cloudy', NULL, NULL, NULL, '1494863724');

-- --------------------------------------------------------

--
-- Table structure for table `HERR`
--

CREATE TABLE IF NOT EXISTS `HERR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'HERR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HERR`
--

INSERT INTO `HERR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'HERR', 'Duke, OK', '84.3', 'Clear', NULL, NULL, NULL, '1494863725');

-- --------------------------------------------------------

--
-- Table structure for table `KAWR`
--

CREATE TABLE IF NOT EXISTS `KAWR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'KAWR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `KAWR`
--

INSERT INTO `KAWR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'KAWR', 'Kearney, MO', '78.7', 'Clear', NULL, NULL, NULL, '1494863725');

-- --------------------------------------------------------

--
-- Table structure for table `KNWA`
--

CREATE TABLE IF NOT EXISTS `KNWA` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'KNWA',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `KNWA`
--

INSERT INTO `KNWA` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'KNWA', 'Glouster, OH (Kanawha)', '70.1', 'Clear', NULL, NULL, NULL, '1494863726'),
(2, 'KNWA', 'Mullens, WV', '74.0', 'Partly Cloudy', NULL, NULL, NULL, '1494863727');

-- --------------------------------------------------------

--
-- Table structure for table `KORR`
--

CREATE TABLE IF NOT EXISTS `KORR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'KORR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `KORR`
--

INSERT INTO `KORR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'KORR', 'Hutchinson, KS', '80.3', 'Clear', NULL, NULL, NULL, '1494863727'),
(2, 'KORR', 'Conway Springs, KS', '77.6', 'Clear', NULL, NULL, NULL, '1494863728'),
(3, 'KORR', 'Kingman, KS', '78.8', 'Clear', NULL, NULL, NULL, '1494863728'),
(4, 'KORR', 'Great Bend, KS', '79.3', 'Clear', NULL, NULL, NULL, '1494863729'),
(5, 'KORR', 'Scott City, KS', '79.2', 'Clear', NULL, NULL, NULL, '1494863730'),
(6, 'KORR', 'Sheridan Lake, CO (Towner)', '73.8', 'Mostly Cloudy', NULL, NULL, NULL, '1494863730'),
(7, 'KORR', 'Hoisington, KS', '80.4', 'Clear', NULL, NULL, NULL, '1494863731'),
(8, 'KORR', 'Lyons, KS (Geneseo)', '80.3', 'Clear', NULL, NULL, NULL, '1494863732'),
(9, 'KORR', 'Salina, KS', '80.9', 'Clear', NULL, NULL, NULL, '1494863732'),
(10, 'KORR', 'McPherson, KS', '79.4', 'Clear', NULL, NULL, NULL, '1494863734'),
(11, 'KORR', 'Newton, KS', '77.9', 'Clear', NULL, NULL, NULL, '1494863734');

-- --------------------------------------------------------

--
-- Table structure for table `LASR`
--

CREATE TABLE IF NOT EXISTS `LASR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'LASR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `LASR`
--

INSERT INTO `LASR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'LASR', 'Minden, LA (Hope)', '89.2', 'Clear', NULL, NULL, NULL, '1494863735'),
(2, 'LASR', 'Princeton, LA', '84.8', 'Clear', NULL, NULL, NULL, '1494863736'),
(3, 'LASR', 'Hodge, LA', '92.2', 'Clear', NULL, NULL, NULL, '1494863736');

-- --------------------------------------------------------

--
-- Table structure for table `LBWR`
--

CREATE TABLE IF NOT EXISTS `LBWR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'LBWR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `LBWR`
--

INSERT INTO `LBWR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'LBWR', 'Whiteface, TX', '79.3', 'Mostly Cloudy', NULL, NULL, NULL, '1494863737'),
(2, 'LBWR', 'Broadview, NM', '78.1', 'Partly Cloudy', 'Fire Weather Watch', '...CRITICAL FIRE WEATHER CONDITIONS TODAY ACROSS CENTRAL AND\nSOUTHWEST NEW MEXICO...THEN SHIFTING TO THE NORTHEAST AND EAST\nCENTRAL PLAINS TUESDAY...\n.A potent upper level low pressure system, currently moving\nsoutheast into Southern California, will race toward New Mexico\ntoday and move over the state late Tuesday. Ahead of this system\ntoday, strong winds and very dry air in the mid levels of the\natmosphere will mix down to the the surface and create critical\nfire weather conditions across much of central and southern New\nMexico. The focus for critical fire weather conditions will shift\nfurther south and east Tuesday and include the Eastern Plains of\nNew Mexico.\n...FIRE WEATHER WATCH IN EFFECT FROM TUESDAY MORNING THROUGH\nTUESDAY EVENING...\nThe National Weather Service in Albuquerque has issued a Fire\nWeather Watch...which is in effect from Tuesday morning through\nTuesday evening.\n* AREA AND TIMING...Northeast and East Central Plains late Tuesday\nmorning through Tuesday evening.\n* 20 ', '<a href="https://alerts.weather.gov/cap/wwacapget.php?x=NM125850630D0C.FireWeatherWatch.12585080A470NM.ABQRFWABQ.5c63cabce110e78e0948003b5080a557" target="_blank">Link</a>', '1494863738'),
(3, 'LBWR', 'Seagraves, TX', '79.9', 'Clear', NULL, NULL, NULL, '1494863739'),
(4, 'LBWR', 'Dimmitt, TX', '75.3', 'Partly Cloudy', NULL, NULL, NULL, '1494863739');

-- --------------------------------------------------------

--
-- Table structure for table `MMTR`
--

CREATE TABLE IF NOT EXISTS `MMTR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'MMTR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MMTR`
--

INSERT INTO `MMTR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'MMTR', 'Columbia Falls, MT (Kalispell)', '42.9', 'Clear', NULL, NULL, NULL, '1494863740'),
(2, 'MMTR', 'Eureka, MT', '46.4', 'Clear', NULL, NULL, NULL, '1494863740');

-- --------------------------------------------------------

--
-- Table structure for table `MSRR`
--

CREATE TABLE IF NOT EXISTS `MSRR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'MSRR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MSRR`
--

INSERT INTO `MSRR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'MSRR', 'Bay Springs, MS', '92.5', 'Clear', NULL, NULL, NULL, '1494863741');

-- --------------------------------------------------------

--
-- Table structure for table `PSRR`
--

CREATE TABLE IF NOT EXISTS `PSRR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'PSRR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PSRR`
--

INSERT INTO `PSRR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'PSRR', 'Camp Pendelton, CA (Miramar)', '52.3', 'Partly Cloudy', NULL, NULL, NULL, '1494863742'),
(2, 'PSRR', 'Escondido, CA', '55.3', 'Mostly Cloudy', NULL, NULL, NULL, '1494863742');

-- --------------------------------------------------------

--
-- Table structure for table `PVSR`
--

CREATE TABLE IF NOT EXISTS `PVSR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'PVSR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PVSR`
--

INSERT INTO `PVSR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'PVSR', 'Pecos, TX', '88.0', 'Clear', NULL, NULL, NULL, '1494863743');

-- --------------------------------------------------------

--
-- Table structure for table `SKOL`
--

CREATE TABLE IF NOT EXISTS `SKOL` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'SKOL',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SKOL`
--

INSERT INTO `SKOL` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'SKOL', 'Moline, KS', '80.0', 'Partly Cloudy', NULL, NULL, NULL, '1494863744'),
(2, 'SKOL', 'Neodesha, KS', '78.6', 'Clear', NULL, NULL, NULL, '1494863744'),
(3, 'SKOL', 'Chanute, KS', '78.6', 'Clear', NULL, NULL, NULL, '1494863745'),
(4, 'SKOL', 'Tulsa, OK', '80.5', 'Partly Cloudy', NULL, NULL, NULL, '1494863746'),
(5, 'SKOL', 'Coffeyville, KS', '79.4', 'Clear', NULL, NULL, NULL, '1494863746'),
(6, 'SKOL', 'Pittsburg, KS', '79.0', 'Clear', NULL, NULL, NULL, '1494863747');

-- --------------------------------------------------------

--
-- Table structure for table `SLWC`
--

CREATE TABLE IF NOT EXISTS `SLWC` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'SLWC',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SLWC`
--

INSERT INTO `SLWC` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'SLWC', 'Stillwater, OK', '79.6', 'Partly Cloudy', NULL, NULL, NULL, '1494863747'),
(2, 'SLWC', 'Oklahoma City, OK', '80.2', 'Partly Cloudy', NULL, NULL, NULL, '1494863748'),
(3, 'SLWC', 'Lawton, OK', '85.1', 'Clear', NULL, NULL, NULL, '1494863749');

-- --------------------------------------------------------

--
-- Table structure for table `SRRR`
--

CREATE TABLE IF NOT EXISTS `SRRR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'SRRR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SRRR`
--

INSERT INTO `SRRR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'SRRR', 'Cheyenne, WY', '60.9', 'Overcast', NULL, NULL, NULL, '1494863749');

-- --------------------------------------------------------

--
-- Table structure for table `TIBR`
--

CREATE TABLE IF NOT EXISTS `TIBR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'TIBR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TIBR`
--

INSERT INTO `TIBR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'TIBR', 'Deridder, LA', '84.1', 'Clear', NULL, NULL, NULL, '1494863750');

-- --------------------------------------------------------

--
-- Table structure for table `TXNR`
--

CREATE TABLE IF NOT EXISTS `TXNR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'TXNR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TXNR`
--

INSERT INTO `TXNR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'TXNR', 'Lovington, NM', '79.9', 'Clear', NULL, NULL, NULL, '1494863751');

-- --------------------------------------------------------

--
-- Table structure for table `VSOR`
--

CREATE TABLE IF NOT EXISTS `VSOR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'VSOR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `VSOR`
--

INSERT INTO `VSOR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'VSOR', 'Vicksburg, MS', '85.3', 'Clear', 'Flood Warning', '...The Flood Warning continues for the following rivers in\nArkansas...Mississippi...Louisiana...\nMississippi River Near Arkansas City affecting Chicot...Desha...\nBolivar and Washington Counties\nMississippi River Near Greenville affecting Chicot...East Carroll...\nIssaquena and Washington Counties\nMississippi River At Vicksburg affecting Madison...Tensas...\nClaiborne...Jefferson and Warren Counties/Parishes\nMississippi River At Natchez affecting Concordia...Adams and\nWilkinson Counties/Parishes\n...Flood Warning extended until Sunday May 28...\nThe Flood Warning continues for\nThe Mississippi River At Vicksburg\n* until Sunday May 28.\n* At  8:00 PM Sunday the stage was 45.3 feet.\n* Minor flooding is occurring and Moderate flooding is forecast.\n* Flood stage is 43.0 feet.\n* Forecast...The river will continue rising to near 46.5 feet Friday\nMay 19.\n* Impact...At 46.8 feet...LeTourneau Technologies experiences flooding\nproblems. Vicksburg Floodwallgate number 7 at lumber yard is\nclosed.\n* Impac', '<a href="https://alerts.weather.gov/cap/wwacapget.php?x=MS12585061DE50.FloodWarning.125851374A40MS.JANFLSJAN.02e7ed0ce2ff8b5ad6346672d785a7a3" target="_blank">Link</a>', '1494863751');

-- --------------------------------------------------------

--
-- Table structure for table `WSOR`
--

CREATE TABLE IF NOT EXISTS `WSOR` (
`KEY` int(11) NOT NULL,
  `Territory` varchar(4) NOT NULL DEFAULT 'WSOR',
  `Locations` varchar(100) DEFAULT NULL,
  `Temperature` varchar(4) NOT NULL,
  `Conditions` varchar(100) DEFAULT NULL,
  `Warned` varchar(100) DEFAULT NULL,
  `Warning_Text` varchar(1000) DEFAULT NULL,
  `Warning_Link` varchar(200) DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `WSOR`
--

INSERT INTO `WSOR` (`KEY`, `Territory`, `Locations`, `Temperature`, `Conditions`, `Warned`, `Warning_Text`, `Warning_Link`, `Time`) VALUES
(1, 'WSOR', 'Slinger, WI (Milwaukee)', '67.4', 'Partly Cloudy', NULL, NULL, NULL, '1494863752'),
(2, 'WSOR', 'Edgerton, WI (Madison)', '72.4', 'Partly Cloudy', NULL, NULL, NULL, '1494863752'),
(3, 'WSOR', 'Watertown, WI', '71.7', 'Clear', NULL, NULL, NULL, '1494863753'),
(4, 'WSOR', 'Cambria, WI', '71.4', 'Clear', NULL, NULL, NULL, '1494863754'),
(5, 'WSOR', 'Oshkosh, WI', '64.0', 'Clear', NULL, NULL, NULL, '1494863754'),
(6, 'WSOR', 'Fairwater, WI (Markesan)', '70.5', 'Partly Cloudy', NULL, NULL, NULL, '1494863755'),
(7, 'WSOR', 'Plymouth, WI', '62.0', 'Partly Cloudy', NULL, NULL, NULL, '1494863756'),
(8, 'WSOR', 'Lone Rock, WI (Prairie)', '68.6', 'Partly Cloudy', NULL, NULL, NULL, '1494863756'),
(9, 'WSOR', 'Palmyra, WI (Waukesha)', '72.4', 'Clear', NULL, NULL, NULL, '1494863757'),
(10, 'WSOR', 'Juda, WI (Monroe)', '70.6', 'Partly Cloudy', NULL, NULL, NULL, '1494863758'),
(11, 'WSOR', 'Walworth, WI (Fox Lake)', '70.8', 'Clear', NULL, NULL, NULL, '1494863758'),
(12, 'WSOR', 'Elkhorn, WI', '73.1', 'Partly Cloudy', NULL, NULL, NULL, '1494863759'),
(13, 'WSOR', 'Lodi, WI (Reedsburg)', '71.3', 'Partly Cloudy', NULL, NULL, NULL, '1494863760'),
(14, 'WSOR', 'Cottage Grove, WI', '71.9', 'Partly Cloudy', NULL, NULL, NULL, '1494863760'),
(15, 'WSOR', 'Sheboygan Falls, WI', '59.7', 'Partly Cloudy', NULL, NULL, NULL, '1494863761');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ABSR`
--
ALTER TABLE `ABSR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `ABWR`
--
ALTER TABLE `ABWR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `ARSR`
--
ALTER TABLE `ARSR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `AUTR`
--
ALTER TABLE `AUTR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `BBAY`
--
ALTER TABLE `BBAY`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `BHRR`
--
ALTER TABLE `BHRR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `BLMR`
--
ALTER TABLE `BLMR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `BLUR`
--
ALTER TABLE `BLUR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `BVRR`
--
ALTER TABLE `BVRR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `EIRR`
--
ALTER TABLE `EIRR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `GDLK`
--
ALTER TABLE `GDLK`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `GRNW`
--
ALTER TABLE `GRNW`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `HERR`
--
ALTER TABLE `HERR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `KAWR`
--
ALTER TABLE `KAWR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `KNWA`
--
ALTER TABLE `KNWA`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `KORR`
--
ALTER TABLE `KORR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `LASR`
--
ALTER TABLE `LASR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `LBWR`
--
ALTER TABLE `LBWR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `MMTR`
--
ALTER TABLE `MMTR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `MSRR`
--
ALTER TABLE `MSRR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `PSRR`
--
ALTER TABLE `PSRR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `PVSR`
--
ALTER TABLE `PVSR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `SKOL`
--
ALTER TABLE `SKOL`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `SLWC`
--
ALTER TABLE `SLWC`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `SRRR`
--
ALTER TABLE `SRRR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `TIBR`
--
ALTER TABLE `TIBR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `TXNR`
--
ALTER TABLE `TXNR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `VSOR`
--
ALTER TABLE `VSOR`
 ADD PRIMARY KEY (`KEY`);

--
-- Indexes for table `WSOR`
--
ALTER TABLE `WSOR`
 ADD PRIMARY KEY (`KEY`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ABSR`
--
ALTER TABLE `ABSR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ABWR`
--
ALTER TABLE `ABWR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ARSR`
--
ALTER TABLE `ARSR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `AUTR`
--
ALTER TABLE `AUTR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `BBAY`
--
ALTER TABLE `BBAY`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `BHRR`
--
ALTER TABLE `BHRR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `BLMR`
--
ALTER TABLE `BLMR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `BLUR`
--
ALTER TABLE `BLUR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `BVRR`
--
ALTER TABLE `BVRR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `EIRR`
--
ALTER TABLE `EIRR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `GDLK`
--
ALTER TABLE `GDLK`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `GRNW`
--
ALTER TABLE `GRNW`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `HERR`
--
ALTER TABLE `HERR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `KAWR`
--
ALTER TABLE `KAWR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `KNWA`
--
ALTER TABLE `KNWA`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `KORR`
--
ALTER TABLE `KORR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `LASR`
--
ALTER TABLE `LASR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `LBWR`
--
ALTER TABLE `LBWR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `MMTR`
--
ALTER TABLE `MMTR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `MSRR`
--
ALTER TABLE `MSRR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `PSRR`
--
ALTER TABLE `PSRR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `PVSR`
--
ALTER TABLE `PVSR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `SKOL`
--
ALTER TABLE `SKOL`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `SLWC`
--
ALTER TABLE `SLWC`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `SRRR`
--
ALTER TABLE `SRRR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `TIBR`
--
ALTER TABLE `TIBR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `TXNR`
--
ALTER TABLE `TXNR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `VSOR`
--
ALTER TABLE `VSOR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `WSOR`
--
ALTER TABLE `WSOR`
MODIFY `KEY` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
