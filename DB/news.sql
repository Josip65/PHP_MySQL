-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 07:03 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprog`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `archive` enum('N','Y') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `picture`, `date`, `archive`) VALUES
(1, 'U zadnje 44 godine nestalo 60 posto divljih životinja', 'Bioraznolikost u zadnjih nekoliko desetljeća prolazi kroz poražavajuće epizode, blago rečeno. Od 1970. pa do 2014. smanjena je populacija divljih životinjskih vrsta za nemalih 60 posto. Na to upućuju podaci Svjetskog fonda za zaštitu prirode (WWF). U izvješću naziva “Živi planet” (Living Planet Report), koji je rezultat rada WWF-a i Londonskog zoološkog društva, prikupljeno je mnoštvo podataka. U pitanju je 4000 raznih vrsta ptica, sisavaca, riba, vodozemaca i gmazova." ', 'images/lav.jpg', '2017-12-14 13:51:20', 'N'),
(2, 'Mahovina kao alternativa kanabisu?!', 'U Švicarskoj se proučava neobična mahovina čija se supstanca na internetu prodavala kao legalna droga. Otkriveno je da njezin aktivni sastojak ima sličan (i superiorniji) efekt ublažavanja boli te protuupalna svojstva od tetrahidrokanabinola (poznatiji kao THC) u kanabisu. Početak priče o tome da tip mahovine postane potencijalna alternativa medicinskom kanabisu seže još dalje. 1994. godine je japanski fitokemičar Yoshinori Asakawa otkrio kako jedna rijetka mahovina (Radula perrottetii) proizvodi prirodnu tvar perotetinen (PET). Radula perrottetii je porijeklom iz Japana, Kostarike i Novog Zelanda. Utvrdio je kako je njezin PET povezan s THC-om po tome što su im atomi povezani na sličan način. Razlikuju se po (trodimenzionalnoj) strukturi i po dodatnoj benzilnoj skupini.', 'images/maca.jpg', '2017-12-14 14:08:58', 'N'),
(3, 'Ako želite živjeti duže, jačajte mišiće.', 'IPrema novom istraživanju Sveučilišta Michigan ljudi koji imaju jače mišiće bi mogli živjeti duže od ljudi koji se ne bave nikakvom aktivnošću. Oni smatraju kako nikada nije kasno započeti s vježbanjem i građenjem mišića. Znanstvenici čak smatraju kako je važnije da stariji ljudi počnu vježbati nego mlađi. Nije potrebno povećavati mišićnu masu već snagu. Ne postoji čudotvorna metoda koja će zaustaviti starenje, ali jačanje mišića bi moglo u velikoj mjeri smanjiti mnoge probleme koje uzrokuje starenje. Mnogi ljudi iznad 65 godina imaju zdravstvene probleme i često su ovisni o tuđoj pomoći. Voditeljica studije dr. Kate Duchovny naglašava kako je najvažnije jačati naše ruke. Snaga stiska pokazuje sveukupnu snagu koju posjedujemo te ona slabi kako postajemo stariji. Često to zaboravljamo, ali ruke su jako važne jer s njima obavljamo svakodnevne poslove kao što su čišćenje, oblačenje, kuhanje i držanje predmeta.', 'images/clanak1.jpeg', '2017-12-14 14:11:30', 'Y'),
(4, 'Klimatske promjene će povećati cijenu piva', 'Zahvaljujući klimatskim promjenama pojavit će se problem dostupnosti i cijene piva. To je, otprilike, sažeto saznanje do kojeg su došli znanstvenici u jednoj recentnoj studiji. Naime, sve češći toplinski udari i pojava suše koji su uzrokovani klimatskim promjenama – naprosto će smanjiti urod ječma. Samim time i nužno proizvodnju piva, objavili su znanstvenici, vjerojatno na užas mnogih ljubitelja ove široko rasprostranjene kapljice. Muke po ječmu. Ječam je biljka koja je jako osjetljiva na sušu i vrućinu te će se urod iste smanjiti nastave li se klimatske promjene ovim tijekom. Posljedično će to dovesti do nestašice piva i logičnog rasta njegove cijene, navodi studija objavljena u časopisu Nature Plants.', 'images/clanak2.jpeg', '2017-12-14 14:10:55', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;