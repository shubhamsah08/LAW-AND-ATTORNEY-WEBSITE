-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 08:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyermanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `contact_data`
--

CREATE TABLE `contact_data` (
  `id` int(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_data`
--

INSERT INTO `contact_data` (`id`, `name`, `email`, `phone`, `message`) VALUES
(2, 'prajakta', 'prajakta@gmail.com', '918378847021', 'xcswefwefw'),
(3, 'sonali', 'prajakta@gmail.com', '918378847021', 'xscfdrgdthyjgkuhijlk;l'),
(4, 'sonali', 'prajakta@gmail.com', '918378847021', 'xscfdrgdthyjgkuhijlk;l'),
(5, 'bharat', 'sonali@gmail.com', '918378847021', 'sfdgchvhj'),
(8, 'abc', 'abc@gmail.com', '1234567890', 'hello '),
(9, 'yogesh yetal', 'yogesh@gmail.com', '9175596266', 'Ok'),
(10, 'yogesh yetal', 'yogesh@gmail.com', '1234567890', 'hello by');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(200) NOT NULL,
  `section` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `punishment` longtext NOT NULL,
  `text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `section`, `description`, `punishment`, `text`) VALUES
(0, '', '', '', ''),
(1, 'Section 302 IPC', 'We often hear, that the court has found someone guilty of committing the offense of murder under Section 302 of the Indian Penal Code (IPC). In cases like these, the court punishes the killer with either the death penalty or life imprisonment. However, a large number of the Indian population is still unaware of what Section 302 of the IPC deals with. Here is a glimpse of Section 302:', 'Death penalty is a legal process whereby a person is sentenced to death by the state as a punishment for a heinous crime. In India, the death penalty is given for rare cases. The criteria for a crime to be a rarest case has not been defined. According to data from Amnesty International, at least 100 people were executed (but not executed) in 2007, 40 in 2006, 77 in 2005, 23 in 2002 and 33 in 2001.', 'murder'),
(2, 'section 363 IPC', 'Whoever kidnaps any person from India or from lawful guardianship, shall be punished with imprisonment of either description for a term which may extend to seven years, and shall also be liable to fine. Where any person, not being the lawful guardian of a minor, employs or uses such minor for the purposes of begging, it shall be presumed, unless the contrary is proved, that he kidnapped or otherwise obtained the custody of that minor in order that the minor might be employed or used for the purposes of begging.\n\n', 'Whoever kidnaps any person from 1[India] or from lawful guardianship, shall be punished with imprisonment of either description for a term which may extend to seven years, and shall also be liable to fine.', 'kidnapping'),
(3, 'Section 17 Article 21-A', 'Article 21-A and the RTE Act came into effect on 1 April 2010. The title of the RTE Act incorporates the words ‘free and compulsory’. ‘Free education’ means that no child, other than a child who has been admitted by his or her parents to a school which is not supported by the appropriate Government, shall be liable to pay any kind of fee or charges or expenses which may prevent him or her from pursuing and completing elementary education. ‘Compulsory education’ casts an obligation on the appropriate Government and local authorities to provide and ensure admission, attendance and completion of elementary education by all children in the 6-14 age group. With this, India has moved forward to a rights based framework that casts a legal obligation on the Central and State Governments to implement this fundamental child right as enshrined in the Article 21A of the Constitution, in accordance with the provisions of the RTE Act.', '(1) No child shall be subjected to physical punishment or mental harassment.\n(2) Whoever contravenes the provisions of sub-section (1) shall be liable to disciplinary action under the service rules applicable to such person', 'education_right'),
(5, 'section 2 (f)& 12(B) of the UGC Act 1956', 'The University Grants Commission (UGC) provides financial assistance to eligible colleges which are included under Section 2(f)* and declared fit to receive central assistance (UGC grant) under Section 12 (B)** of UGC Act, 1956 as per approved pattern of assistance under various schemes.       * The UGC had notified Regulations for recognition of colleges under Section 2(f) of the UGC Act, 1956. The colleges are brought under the purview of UGC in terms of these Regulations as and when the proposals are received from the colleges for inclusion under Section 2(f) and they are found fit for inclusion as per the provisions contained in the Regulations.', 'Violation of the Act shall be punishable with fine up to one thousand rupees. If the person contravening is an association or other body of individuals, every member of such association or other body who knowingly or wilfully authorises or permits the contravention shall be punishable with fine up to one thousand rupees.', 'ugc_act'),
(6, 'sections 494 and 495', '(1) This Act may be called the Hindu Marriage Act, 1955. (2) It extends to the whole of India except the State of Jammu and Kashmir 1 , and applies also to Hindus domiciled in the territories to which this Act extends who are outside the said territories.', 'Punishment for contravention of certain other conditions for Hindu marriage . Every person who procures a marriage of himself or herself to be solemnised under this Act in contravention of the conditions specified in clauses (iii), (iv), 36 [and (v)] of section 5 shall be punishable', 'marriage'),
(7, 'Section 498-A ', 'The Protection of Women from Domestic Violence Act,“physical abuse” means any act or conduct which is of such a nature as to cause bodily pain, harm, or danger to life, limb, or health or impair the health or development of the aggrieved person and includes assault, criminal intimidation and criminal force; 2005', 'Section 498-A of IPC prescribes punishment for a relative of the husband or the husband himself in case a woman is subjected to cruelty by them. It prescribes a punishment of imprisonment of upto 3 years and a fine. The definition of cruelty is provided under Section 498-A Explanation. ', 'domestic_violence'),
(8, 'Section 102', 'The Insurance Act, 1938Penalty for default in complying with, or act in contravention of, this Act.—If any person, who is required under this Act, or rules or regulations made thereunder,— (a) to furnish any document, statement, account, return or report to the Authority, fails to furnish the same; or (b) to comply with the directions, fails to comply with such directions;', 'comply with the directions on the insurance treaties, fails to comply with such directions on the insurance treaties, he shall be liable to a penalty not exceeding five lakh rupees for each such failure and punishable with fine.', 'insurance'),
(9, '45 CFR Part 160', 'HIPAA (Health Insurance Portability and Accountability Act) is United States legislation that provides data privacy and security provisions for safeguarding medical information. The law has emerged into greater prominence in recent years with the many health data breaches caused by cyber attacks and ransomware attacks on health insurers and providers.', 'For first-tier, the penalty can be $100 for every unknowing violation with a maximum of $25,000 for repeat violations. However, this amount is not static and can go up to $50,000 per violation with a maximum of $1.5 million every year depending on the assessment of the regulatory body', 'hipaa'),
(10, ' Section 312', 'The Medical Board shall consist of the following The Indian Penal Code, 1860 (IPC) makes abortion (\'induced miscarriage\') a criminal offence under Section 312. The MTP Act is the exception to this law.', 'Any person who willfully contravenes or willfully fails to comply with the requirements of any regulation made under sub-section (1) shall be liable to be punished with fine,which may extend to one thousand rupees.', 'pregnancy'),
(11, 'Section 26A.', 'Powers of Central Government to regulate, restrict or prohibit manufacture, etc., of drug and cosmetic in public interest. Section 26B. Powers of Central Government to regulate or restrict, manufacture, etc., of drug in public interest.', ' any drug or cosmetic in contravention of the provisions of any notification issued under section 10A, shall be punishable with imprisonment for a term which may extend to three years, or with fine which may extend to five thousand rupees, or with both.', 'drugs'),
(12, 'Section 378', 'Section 378 - Theft - defines theft as taking movable property out of the possession of another person without that person\'s consent.', 'According to this Section of Indian Penal Code, whoever commits theft shall be punished with imprisonment of either description for a term which may extend to three years, or with fine, or with both.', 'theft'),
(13, 'Section 427', 'The offence of mischief is explained under Section 425 of the Indian Penal Code, 1860 (IPC). According to this Section whoever intentionally or with knowledge commits such an act that causes wrongful loss or damage to large public or an individual or causes damage to their property which ultimately diminishes its value or affects the person, commits the offence of mischief. ', 'Whoever commits mischief and thereby causes loss or damage to the amount of fifty rupees or upwards, shall be punished with imprisonment of either description for a term which may extend to two years, or with fine, or with both.', ' mischief'),
(14, 'Section 20 and 21', 'In this Act, unless there is anything repugnant in the subject or context,— (1) “buyer” means a person who buys or agrees to buy goods; (2) “delivery” means voluntary transfer of possession from one person to another; (3) goods are said to be in a “deliverable state” when they are in such state that the buyer would under the contract be bound to take delivery of them;', 'Whenever a breach of contract is committed damages are awarded to the suffering party because his/her right was violated and he/she suffered losses because of it. But what should be the amount of damages to be paid in case of breach of contract of sale under Sale of Goods, Act. The damages to be paid are calculated on the basis of the principles of section 73 & 74 of the Indian Contract Act.', 'sale_of_good'),
(16, 'Section 10(5)', 'A person resident outside India may hold, own, transfer or invest in Indian currency, security or any immovable property situated in India if such currency, security or property was acquired, held or owned by such person when he was resident in India or inherited from a person who was resident in India.', 'Penalties Under FEMA If any person contravenes the provisions of FEMA or any rule, direction, regulation, order or notification issued under FEMA, he shall be liable to pay a penalty up to thrice the sum involved in such contravention or up to Rs. 2 lakh.', 'fema'),
(17, 'section 18', ') No person shall, while he holds any driving licence for the time being in force, hold any other driving licence except a learner\'s licence or a driving licence issued in accordance with the provisions of section 18 or a document authorising, in accordance with the rules made under section 139, the person ...', 'First-time offenders who commit offences covered by the Motor Vehicles Act may be subject to fines of up to Rs. 5,000 or a maximum sentence of 6 months in prison. The penalty for a further offence is a fine of up to Rs. 10,000 or two years in prison.', 'motor'),
(119, 'Section 13', 'Subject to the rules, if any, made by the Central Government in this behalf, it shall be the function of the Authority to manage the airports, the civil enclaves and the aeronautical communication stations efficiently.', 'Whoever, unlawfully occupies any airport premises,  shall be punishable with imprisonment for a term  which may extend to six years and with fine. ', 'airport');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_data`
--
ALTER TABLE `contact_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_data`
--
ALTER TABLE `contact_data`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
