-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2020 at 05:00 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `pass` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `book_title` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `book_author` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `book_image` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `book_descr` text COLLATE latin1_general_ci,
  `book_price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_title`, `book_author`, `book_image`, `book_descr`, `book_price`) VALUES
('1', 'Rage', 'WILBUR SMITH', 'a1.jpg', 'Rage is a 1987 novel by Wilbur Smith set in the Union of South Africa, immediately following World War II.Smith described it at the time as \"the most onerous book I have ever written and also the biggest book\" because of its subject matter', '249.00'),
('10', 'Buzz Kill', 'Beth Fantaskey', 'c2.jpg', 'Buzz Kill. BUZZKILL is a crime-solving mystery written by the best-selling author Beth Fantaskey.She starts to write a list of people that despise Coach Killdare and she eventually comes up with a genuine murder mystery on her hands.', '210.00'),
('11', 'Odd, Weird, and Little ', 'Patrick Jennings', 'c3.jpg', 'Odd, Weird & Little. Readers who love Andrew Clements, Dan Gutman, Gordon Korman, and Tom Angleberger will find this charming, funny, easy-to-read middle-grade novel from the beloved Patrick Jennings an absolute hoot! When the new kid joins his class,oodrow agrees with his schoolmates--Toulouse is really weird.', '369.00'),
('12', 'The childrens book of Virtues', 'WILLIAM J. BENNETT', 'c4.jpg', 'The Childrens Book of Virtues is an enduring treasury of literature and art that will help lead young minds toward what is noble and gentle and fine.', '300.00'),
('13', ' The Big Sleep', 'Raymond Chandler', 'cr1.jpg', 'Los Angeles PI Philip Marlowe is working for the Sternwood family.Old man Sternwood, crippled and wheelchair-bound, is being given the squeeze by a blackmailer and he wants Marlowe to makethe problem go away.But with Sternwoods two wild, devil-may-care daughters prowling LAs seedy backstreets,Marlowes got his work cut out - and thats before he stumbles over the first corpse.Raymond Chandler was born in Chicago in 1888 and moved to England with his family when he was 12.He attended Dulwich College, Alma Mater to some of the 20th centurys most renowned writers.Returning to America in 1912, he settled in California, worked in a number of jobs, and later married. ', '659.00'),
('14', 'The Girl with the Dragon Tattoo', 'Raymond Chandler', 'cr2.jpg', 'Forty years ago, Harriet Vanger disappeared from a family gathering on the island owned and inhabited by the powerful Vanger clan. Her body was never found, yet her uncle is convinced it was murder - and that the killer is a member of his own tightly knit but dysfunctional family.He employs disgraced financial journalist Mikael Blomkvist and the tattooed,truculent computer hacker Lisbeth Salander to investigate. When the pair link Harriets disappearance to a number of grotesque murders from 40 years ago, they begin to unravel a dark and appalling family history.', '1500.00'),
('15', 'The Murder of Roger Ackroyd', 'Agatha Christie', 'cr3.jpg', 'Mrs Farrars is found dead of an apparent overdose one year after the death of her husband.The villagers of Kings Abbot are suspicious. The rumour is that she poisoned her husband and was in love with Roger Ackroyd. \r\nWhen he is found murdered the following day, there is little to go on.Luckily one of the newest residents who has retired to this normally quiet village is none other than Monsieur Hercule Poirot.', '310.00'),
('16', 'dont Let  go', 'Harlen Coben ', 'cr4.jpg', 'The brilliant new thriller from the international best-selling author of Home and Fool Me Once.Mistaken identities, dark family secrets and a murderous conspiracy lie at the heart of this gripping new best-seller.A small town is hiding big secrets.Fifteen years ago in New Jersey, a teenage boy and girl were found dead.Most people concluded it was a tragic suicide pact.The dead boys brother, Nap Dumas, did not.Now Nap is a cop - but hes a cop who plays by his own rules,and who has never made peace with his past.', '208.00'),
('17', 'The Carrow Haunt', 'DARCY COATES', 'h1.jpg', 'The dead are restless here Remy is a tour guide for Carrow House, a notoriously haunted building. When shes asked to host seven guests for a week-long stay to research Carrows phenomena,she hopes to finally experience some of the sightings that made the house famous.At first, its everything they hoped for. Then a storm moves in, cutting off their contact with the outside world,and things quickly become twisted. Doors open on their own. Seances go disastrously wrong. Red liquid seeps from behind the wallpaper.Their spirit medium wanders through the house during the night, seemingly in a trance.\r\n', '165.00'),
('18', 'The Amityville Horror', 'JAY ANSON', 'h2.jpg', 'In December 1975, the Lutz family moved into their new home on suburban Long Island.George and Kathleen Lutz knew that, one year earlier, Ronald DeFeo had murdered his parents, brothers,and sisters in the house, but the property - complete with boathouse and swimming pool - and the price were too good to pass up.Twenty-eight days later, the entire Lutz family fled in terror.This is the spellbinding, best-selling, true story that gripped the nation - the story of a house possessed by evil spirits,haunted by psychic phenomena almost too terrible to describe.', '658.00'),
('19', 'The Siren and the Specter', 'JONATHAN JANZ', 'h3.jpg', 'When David Caine, a celebrated skeptic of the supernatural, is invited by an old friend to spend a month in \"the most haunted house in Virginia,\" he believes the case will be like any other. But the Alexander House is different. Built by a 1700s land baron to contain the madness and depravity of his eldest son,the house is plagued by shadows of the past and the lingering taint of bloodshed. David is haunted, as well.For 22 years ago, he turned away the woman he loved, and she took her life in sorrow. And David suspects she followed him to the Alexander House. \r\n', '365.00'),
('2', 'Treasure of Egypt', 'BARBARA IVIE GREEN', 'a2.jpg', 'Treasure of Egypt Hold on to your seat! This is a fast paced, action-packed romantic adventure. Journey to the land of the Pharaohs in this lighthearted tale, where the search for lost treasure digs up more than a little danger. In the year 1863, a time when the whole world was seeking Egypts secrets, an ancient map, leading to the greatest treasure known to man, resurfaces. As luck would have it, Lord Alecsian Brighton wins the mottled old scrap of parchment in one of Londons most notorious gaming hells, along with its ominous curse. Despite the allure of treasure, Alec has no real interest in gallivanting across the Egyptian countryside in order to find it', '1001.00'),
('20', 'April Fools', ' RICHIE TANKERSLEY CUSICK', 'h4.jpg', 'Belinda believes that she and her friends are the only witnesses to a fatal car accident, \r\nbut a series of cruel and dangerous pranks makes her suspect that there were other persons on the scene that night.', '150.00'),
('21', 'Life is What You Make it ', 'PREETI SHENOY', 'l1.jpg', 'What would you do if destiny twisted the road you took? What if it threw you to a place you did not want to go? Would you fight, would you run or would you accept?Set across two cities in India in the early eighties,Life is What You Make it is a gripping account of a few significant years of Ankita’s life.Ankita Sharma has the world at her feet. She is young, good-looking, smart and tones of friends and boys swooning over her. She also manages to get into a premier management school for her MBA.Six months later , she is a patient in a mental health hospital.Life has cruelly and coldly snatched that which meant the most to her and she must now fight to get it all back.', '250.00'),
('22', 'I too had a love story', 'RAVINDER SINGH', 'l2.jpg', 'I Too had a Love Story brings to life one of the decades most-loved romance novels with gorgeous illustrations in a brand new design.With a personal note from the author, this book is a collectors edition. It will also make for a fabulous gift.Do love stories ever die? How would you react when a beautiful person comes into your life, and then goes away from you forever?Not all love stories are meant to have a perfect ending. I Too Had a Love Story is one such saga.It is the tender and heartfelt tale of Ravin and Khushi--two people who found each other on a matrimonial site and fell in love until life put their love to the ultimate test.Romantic, emotional and sincere, this heartbreaking true life story has already touched a million hearts. This bestselling novel is a must-read for anyone who believes in the magic of love.', '300.00'),
('23', '2states ', 'CHETHAN BHAGAT', 'l3.jpg', 'Welcome to 2 States, the story of Krish and Ananya, who are from two different states of India,deeply in love with each other, and who want to get married. Of course, their parents don’t agree. To convert their love story into a love marriage, the couple have a tough battle ahead of them—for it is easy to fight and rebel, \r\nbut harder by far to convince. Will they make it?From the bestselling author Chetan Bhagat comes another witty tale about inter-community marriages in modern India.', '150.00'),
('24', 'Half girlfriend ', 'CHETHAN BHAGAT', 'l4.jpg', 'Once upon a time, there was a Bihari boy called Madhav. He fell in love with girl called Riya.Madhav didn’t speak English well. Riya did.Madhav wanted a relationship. Riya didn’t.Riya just wanted friendship. Madhav didn’t.Riya suggested a compromise. She agreed to be his half girlfriend.', '250.00'),
('25', ' Who will cry when you die? ', ' ROBIN SHARMA', 'm1.jpg', 'Does the gem of wisdom quoted above strike a chord deep within you? Do you feel that life is slipping by so fast that you just might never get the chance to live with the meaning, happiness and joy you know you deserve? If so, then this very special book by leadership guru Robin S. Sharma, the author whose Monk Who Sold His Ferrari series has transformed the lives of thousands, will be the guiding light that leads you to a brilliant new way of living. In this easy-to-read yet wisdom-rich manual, Robin S. Sharma offers 101 simple solutions to life’s most complex problems, ranging from a little-known method for beating stress and worry to a powerful way to enjoy the journey while you create a legacy that lasts. Other lessons include “Honor Your Past,” “Start Your Day Well,” “See Troubles as Blessings” and “Discover Your Calling.”If you are finally ready to move beyond a life spent chasing success to one of deep significance, this is the ideal book for you.\r\n', '249.00'),
('26', 'A monk who sold his ferrari', 'ROBIN SHARMA', 'm2.jpg', 'This is the incredible story of Julian Mantle, a superstar lawyer whose out-of-balance lifestyle leads him to a near-fatal heart attack in a packed courtroom. His collapse brings on a spiritual crisis, forcing him to seek answers to lifes most important questions.Hoping to find happiness and fulfilment, he embarks upon an extraordinary odyssey to an ancient culture, where he discovers a powerful system to release the potential of his mind, body and soul, and learns to live with greater passion, purpose and peace.Brilliantly blending the timeless spiritual wisdom of the East with the cutting-edge success principles of the West, this truly inspiring tale has shown millions of people around the world how to live with greater courage, balance, abundance and joy. \r\n', '350.00'),
('27', 'Eat that frog', 'BRIAN TRACY', 'm3.jpg', 'There just isnt enough time for everything on our to-do list - and there never will be. Successful people dont try to do everything. They learn to focus on the most important tasks and make sure those get done.They eat their frogs. Theres an old saying that if the first thing you do each morning is eat a live frog,youll have the satisfaction of knowing youre done with the worst thing youll have to do all day. For Tracy,eating a frog is a metaphor for tackling your most challenging task - but also the one that can have the greatest positive impact on your life. Eat That Frog! shows you how to organize each day so you can zero in on these critical tasks and accomplish them efficiently and effectively.', '239.00'),
('28', 'The Alchemist', 'PAULO COELHO', 'm4.jpg', 'Paulo Coelhos enchanting novel has inspired a devoted following around the world. This story, dazzling in its simplicity and wisdom, is about an Andalusian shepherd boy named Santiago who travels from his homeland in Spain to the Egyptian desert in search of treasure buried in the Pyramids. Along the way he meets a Gypsy woman, a man who calls himself king, and an Alchemist, all of whom point Santiago in the direction of his quest. No one knows what the treasure is,or if Santiago will be able to surmount the obstacles along the way But what starts out as a journey to find worldly goods turns into a meditation on the treasures found within.', '100.00'),
('29', 'Once upon a time travel', ' SARIAH WILSON', 't1.jpg', 'Recent college grad Emma Damon knows the Rose Room in Hartley Hall is off limits,which is exactly why she can’t wait to get inside. Once she enters the forbidden room,Emma learns more about the history of the museum than she ever intended to know.\r\nWaking up confused and shocked in 1816, all Emma wants is to return to her cozy home with flushing toilets and disposable razors.But when she’s mistaken for someone else, Emma must pretend to be everything she’s not. About to be engaged to the Earl of Hartley’s brother, Emma fails miserably at playing the role of a sophisticated lady.', '159.00'),
('3', 'The Boy Who saw', 'SIMON TOYNE', 'a3.jpg', 'Solomon Creed, the enigmatic hero introduced in The Searcher, must stop a killer tied to a conspiracy stretching back over generations to the dying days of World War II.Solomon Creed has no recollection of who he is, or where he comes from. The only solid clue to his identity is a label stitched in his jacket that reads: \"This suit was made to treasure for Mr.Solomon Creed.\"The jacket fits perfectly, and so does the name, but there is a second name on the label,he name of the tailor who made the suit and an address in southern France. Solomon heads to France in search of this man,hoping to discover more about who he is. But instead of answers he finds a bloody corpse,the Star of David carved into his chest and the words \"Finishing what was begun\" daubed in blood on the wall.When the police discover Solomon at the crime scene they suspect he is the murderer and lock him up. ', '399.00'),
('30', 'On the road ', ' JACK KEROUAC', 't2.jpg', 'The legendary novel of freedom and the search for authenticity that defined a generation, now in a striking new Pengiun Classics Deluxe Edition.Inspired by Jack Kerouacs adventures with Neal Cassady, On the Road tells the story of two friends whose cross-country road trips are a quest for meaning and true experience.Written with a mixture of sad-eyed naiveté and wild ambition and imbued with Kerouacs love of America,his compassion for humanity, and his sense of language as jazz, On the Road is the quintessential American vision of freedom and hope,a book that changed American literature and changed anyone who has ever picked it up.', '370.00'),
('31', 'Inder the Tuscan Sun', 'FRANCES MAYES', 't3.jpg', 'Twenty years ago, Frances Mayes—widely published poet, gourmet cook, and travel writer—introduced readers to a wondrous new world when she bought and restored an abandoned villa called Bramasole in the spectacular Tuscan countryside. Under the Tuscan inspired generations to embark on their own journeys—whether that be flying to a foreign country in search of themselves, \r\nsavoring one of the books dozens of delicious seasonal recipes, or simply being transported by Mayess signature evocative, sensory language. Now, with a new afterword from the Bard of Tuscany herself, the 20th anniversary edition of Under the Tuscan Sun brings us up-to-date with the books most beloved characters.', '498.00'),
('32', 'Travels with Charley', ' JOHN STEINBACK', 't4.jpg', 'An intimate journey across America, as told by one of its most beloved writersTo hear the speech of the real America, to smell the grass and the trees, to see the colors and the light—these were John Steinbecks goals as he set out,at the age of fifty-eight, to rediscover the country he had been writing about for so many years.With Charley, his French poodle, Steinbeck drives the interstates and the country roads, dines with truckers, encounters bears at Yellowstone and old friends in San Francisco.Along the way he reflects on the American character, racial hostility, the particular form of American loneliness he finds almost everywhere, and  the unexpected kindness of strangers.', '524.00'),
('33', '45tghy', 'ghyr', 'a1.jpg', 'defrgt', '369.00'),
('4', 'Prince Of Thorns', 'MARK LAWRENCE', 'a4.jpg', 'When he was nine, he watched his mother and brother killed before him. By the time he was 13, he was the leader of a band of bloodthirsty thugs. By 15, he intends to be king. It time for Prince Honorous Jorg Ancrath to return to the castle he turned his back on and take what rightfully his.', '568.00'),
('5', 'The story of my experiments with truth', 'gandhi', 'ab1.jpg', 'Personal account of the life of the man who freed India from colonization through the Satyagraha (nonviolent protest)movement. His early boyhood life, legal studies, purification and ultimate salvation of his homeland is carefully recounted in this inspiring and critical work of insurmountable importance.', '90.00'),
('6', 'Long walk to freedom', ' NELSON MANDELA', 'ab2.jpg', 'Nelson Mandela is one of the great moral and political leaders of our time:an international hero whose lifelong dedication to the fight againstracial oppression in South Africa won him the Nobel Peace Prize and the presidency of his country.Since his triumphant release in 1990 from more than a quarter-century of imprisonment,Mandela has been at the center of the most compelling and inspiring political drama in the world.', '243.00'),
('7', 'The autobiography of Benjamin Franklin', ' Benjamin Franklin', 'ab3.jpg', 'Left unfinished at the time of his death, The Autobiography of Benjamin Franklin has endured as one of the mostwell-known and influential autobiographies ever written. From his early years in Boston and Philadelphia to the publication of his Poor Richards Almanac to the American Revolution and beyond, Franklins autobiography is a fascinating,personal exploration into the life of Americas most interesting founding father. ', '93.00'),
('8', 'Autobiography of a Yogi', 'Paramahansa Yogananda', 'ab4.jpg', 'When Autobiography of a Yogi first appeared in 1946, it was acclaimed as a landmark work in its field.The New York Times hailed it as \"a rare account\". Newsweek pronounced it \"fascinating\".The San Francisco Chronicle declared, \"Yogananda presents a convincing case for yoga,and those who came to scoff may remain to pray.\" Today it is still one of the most widely read and respected books ever published on the wisdom of the East. ', '195.00'),
('9', 'The Secret of the Old Clock', 'CAROLYN KEENE', 'c1.jpg', 'The Secret of the Old Clock is the mystery that began it all for Americas favorite teenaged slueth.The accidental rescue of a little girl who lives with her two great-aunts leads to an adventurous search for a missing will.', '365.00');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `pin_code` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `country` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `name`, `address`, `city`, `pin_code`, `country`) VALUES
(8, 'chinnu', 'gowdanapalya', 'bangalore', '560061', 'India'),
(9, '', '', '', '', ''),
(10, 'Raghukumar AR', 'No.12 3rd main Gowdanapalya, Muralikrishna school road', 'Bengaluru', '560061', 'India'),
(11, 'shubha v', 'bangalore, bangalore', 'BANGALORE', '560062', 'India'),
(12, 'Meghana.M', 'bangalore, bangalore', 'BANGALORE', '560062', 'India'),
(13, 'Meghana.M', 'bang', 'bang', '560063', 'india'),
(14, 'chinnu', 'bang', 'bang', '560096', 'india'),
(15, 'jyothi', 'bangalore', 'gowdanapalya', '560062', 'India'),
(16, 'abcef', 'No.12 3rd main Gowdanapalya, Muralikrishna school road', 'Bengaluru', '560061', 'India'),
(17, 'chinnu', 'bang', 'banga', '560063', 'imdia'),
(18, 'teju', 'yel', 'yel', '56063', 'el'),
(19, 'teee', 'ttt', 'ttt', '560061', 'india'),
(20, 'ram', 'bang', 'bang', '560061', 'india'),
(21, 'chinnu', 'bangalore', 'BANGALORE', '560062', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` text NOT NULL,
  `logs` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `message`, `status`, `logs`) VALUES
(3, 'shubha v', 'schinnu1608@gmail.com', 'books', '0', '2019-11-18 07:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `customerid` int(10) UNSIGNED NOT NULL,
  `amount` decimal(6,2) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ship_name` char(60) COLLATE latin1_general_ci NOT NULL,
  `ship_address` char(80) COLLATE latin1_general_ci NOT NULL,
  `ship_city` char(30) COLLATE latin1_general_ci NOT NULL,
  `ship_pin_code` char(10) COLLATE latin1_general_ci NOT NULL,
  `ship_country` char(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customerid`, `amount`, `date`, `ship_name`, `ship_address`, `ship_city`, `ship_pin_code`, `ship_country`) VALUES
(8, 8, '200.00', '2019-11-16 09:30:45', 'chinnu', 'gowdanapalya', 'bangalore', '560061', 'India'),
(9, 9, '0.00', '2019-11-16 09:32:07', '', '', '', '', ''),
(10, 10, '1000.00', '2019-11-16 10:01:53', 'Raghukumar AR', 'No.12 3rd main Gowdanapalya, Muralikrishna school road', 'Bengaluru', '560061', 'India'),
(11, 11, '200.00', '2019-11-16 10:51:22', 'shubha v', 'bangalore, bangalore', 'BANGALORE', '560062', 'India'),
(12, 11, '200.00', '2019-11-16 11:44:02', 'shubha v', 'bangalore, bangalore', 'BANGALORE', '560062', 'India'),
(13, 11, '1000.00', '2019-11-17 04:49:52', 'shubha v', 'bangalore, bangalore', 'BANGALORE', '560062', 'India'),
(14, 11, '1000.00', '2019-11-17 21:19:53', 'shubha v', 'bangalore, bangalore', 'BANGALORE', '560062', 'India'),
(15, 11, '200.00', '2019-11-17 23:48:26', 'shubha v', 'bangalore, bangalore', 'BANGALORE', '560062', 'India'),
(16, 11, '200.00', '2019-11-17 23:50:14', 'shubha v', 'bangalore, bangalore', 'BANGALORE', '560062', 'India'),
(17, 11, '200.00', '2019-11-17 23:50:42', 'shubha v', 'bangalore, bangalore', 'BANGALORE', '560062', 'India'),
(18, 11, '400.00', '2019-11-17 23:52:00', 'shubha v', 'bangalore, bangalore', 'BANGALORE', '560062', 'India'),
(19, 11, '400.00', '2019-11-17 23:52:14', 'shubha v', 'bangalore, bangalore', 'BANGALORE', '560062', 'India'),
(20, 11, '400.00', '2019-11-17 23:53:37', 'shubha v', 'bangalore, bangalore', 'BANGALORE', '560062', 'India'),
(21, 12, '600.00', '2019-11-17 23:54:26', 'Meghana.M', 'bangalore, bangalore', 'BANGALORE', '560062', 'India'),
(22, 9, '0.00', '2019-11-17 23:54:39', '', '', '', '', ''),
(23, 13, '200.00', '2019-11-17 23:55:13', 'Meghana.M', 'bang', 'bang', '560063', 'india'),
(24, 11, '200.00', '2019-11-23 03:43:14', 'shubha v', 'bangalore, bangalore', 'BANGALORE', '560062', 'India'),
(25, 14, '200.00', '2019-11-23 03:44:17', 'chinnu', 'bang', 'bang', '560096', 'india'),
(26, 15, '400.00', '2019-11-23 11:59:02', 'jyothi', 'bangalore', 'gowdanapalya', '560062', 'India'),
(27, 11, '738.00', '2019-11-29 03:12:45', 'shubha v', 'bangalore, bangalore', 'BANGALORE', '560062', 'India'),
(28, 9, '0.00', '2019-11-29 03:12:57', '', '', '', '', ''),
(29, 9, '0.00', '2019-11-29 03:13:27', '', '', '', '', ''),
(30, 10, '300.00', '2019-11-29 03:13:54', 'Raghukumar AR', 'No.12 3rd main Gowdanapalya, Muralikrishna school road', 'Bengaluru', '560061', 'India'),
(31, 16, '300.00', '2019-11-29 03:14:25', 'abcef', 'No.12 3rd main Gowdanapalya, Muralikrishna school road', 'Bengaluru', '560061', 'India'),
(32, 9, '0.00', '2019-11-29 03:14:56', '', '', '', '', ''),
(33, 17, '600.00', '2019-11-29 03:15:51', 'chinnu', 'bang', 'banga', '560063', 'imdia'),
(34, 9, '0.00', '2019-11-29 03:16:31', '', '', '', '', ''),
(35, 18, '659.00', '2019-11-29 03:17:50', 'teju', 'yel', 'yel', '56063', 'el'),
(36, 19, '369.00', '2019-12-03 09:39:23', 'teee', 'ttt', 'ttt', '560061', 'india'),
(37, 20, '310.00', '2019-12-03 09:40:18', 'ram', 'bang', 'bang', '560061', 'india'),
(38, 21, '900.00', '2020-05-19 07:36:29', 'chinnu', 'bangalore', 'BANGALORE', '560062', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `book_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `item_price` decimal(6,2) NOT NULL,
  `quantity` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`orderid`, `book_id`, `item_price`, `quantity`) VALUES
(8, '1', '200.00', 1),
(10, '12', '200.00', 5),
(11, '1', '200.00', 5),
(11, '11', '369.00', 2),
(11, '12', '200.00', 1),
(11, '13', '200.00', 1),
(11, '9', '200.00', 5),
(21, '11', '200.00', 1),
(21, '12', '200.00', 2),
(23, '12', '200.00', 1),
(25, '12', '200.00', 1),
(26, '10', '200.00', 2),
(31, '12', '300.00', 1),
(33, '12', '300.00', 2),
(35, '13', '659.00', 1),
(36, '11', '369.00', 1),
(37, '15', '310.00', 1),
(38, '12', '300.00', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`,`pass`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD UNIQUE KEY `orderid` (`orderid`,`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
