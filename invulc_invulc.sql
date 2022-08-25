-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 25, 2022 at 11:43 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invulc_invulc`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutPage`
--

CREATE TABLE `aboutPage` (
  `id` int(11) NOT NULL,
  `main_title` text,
  `main_description` text,
  `main_image` text,
  `our_goal` text,
  `our_goal_desc` text,
  `learn_more` text,
  `learn_href` text,
  `meet_the_team` text,
  `t_img_1` text,
  `t_name_1` text,
  `t_desg_1` text,
  `t_img_2` text,
  `t_name_2` text,
  `t_desg_2` text,
  `t_img_3` text,
  `t_name_3` text,
  `t_desg_3` text,
  `t_img_4` text,
  `t_name_4` text,
  `t_desg_4` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutPage`
--

INSERT INTO `aboutPage` (`id`, `main_title`, `main_description`, `main_image`, `our_goal`, `our_goal_desc`, `learn_more`, `learn_href`, `meet_the_team`, `t_img_1`, `t_name_1`, `t_desg_1`, `t_img_2`, `t_name_2`, `t_desg_2`, `t_img_3`, `t_name_3`, `t_desg_3`, `t_img_4`, `t_name_4`, `t_desg_4`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT US', 'INVULC means to invent universal change. We strive to cover the six key goals to progress our society: zero hunger, no poverty, sustainability, ecological preservation, quality education, and clean water.\r\n\r\nOur vision is to create a world where people don’t have to be worried about their education, their next meal, or their next sip of water. A world where the fish disappearing from the oceans is not feared and forests can preserve their ecosystem. A world where our planet\'s future is not uncertain, but rather safe. We hope to achieve this by raising awareness about these issues, ensuring that anyone can help, and dedicating their help towards the issues they care about with confidence.', 'image-1661448778107.jpg', 'Our GOALS:', 'Focused on six distinct categories, our goals aim to cater to a vast expanse of our world’s problems. Our primary focus on hunger, poverty, sustainability, ecological preservation, education, and clean water helps us expand on two of our world’s most populated issues: The environment and people’s struggles.', 'Learn More', 'https://invulc.org/aboutus', 'MEET THE TEAM', 'image-1661448778108.jpeg', 'Ruchir Adenwala', 'President', 'image-1661448778105.jpeg', 'Sean Lee', 'Vice President', 'image-1661448778101.jpeg', 'Daisy Chang', 'Secretary', 'image-1661448778111.png', 'Aarya Oswal', 'Treasurer', '2022-08-25 17:32:58', '2022-08-25 17:32:58');

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `email` text,
  `password` text,
  `type` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `email`, `password`, `type`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$S5uIJR5OvZEtguJ2aFWTj.SHOeieXt4m6cAj5Y1L9Qsc9zUC6vAti', '1', '2022-08-17 20:20:35', '2022-08-17 20:20:35'),
(2, 'user@gmail.com', '$2y$10$lzB4oRbPbsAt5PgT0lnWaOCu1WtvFrAFcR5uOHeXHIOYN5kU.EwoC', '2', '2022-08-17 20:23:39', '2022-08-17 20:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `goal_id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `short_description`, `long_description`, `goal_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'WE MUST HELP OUR HOME', 'We treat our home badly. By home, I mean our planet Earth. And by badly, I mean with shockingly egregious and complete and utter contempt. Of course, there are a few who actually care about the planet and try to make some effort to try and change the destructive repercussions we will face if nothing is done now, but for the most part, humanity seems to live out the last of their days without giving a care. Ex-Senator Gaylord Nelson saw the obstacles humankind brought upon itself, and in the year 1970, he created Earth Day to remind people of the fact that this beautiful planet we reside on needs to remain that way.', '<p>Every human related activity such as driving cars and pumping oil – to name a few – are the\n                    causes of the greenhouse effect. The greenhouse effect, according to <a href=\"#\" class=\"text-primary\">Earth.org</a>, is when the\n                    Earth constricts all of the gasses and traps it within the Earth’s atmosphere. Glaciers are\n                    melting, oceans are rising, and the increase of climate extremes such as flooding, tornadoes,\n                    and hurricanes are just some effects of climate change.\n                </p>  \n                <p>It’s no hidden fact that the Earth is warming up. It’s been <a href=\"#\" class=\"text-primary\">proven</a>\n                    that due to the rise in carbon\n                    dioxide emissions, the Earth has warmed up 2.12 ℉ just in the last 40 years as a result of\n                    human activity. Pretty scary considering the human race has populated this terrene for <a href=\"#\" class=\"text-primary\">more\n                    than 4 million years</a> and all this has happened in just four decades.</p>\n                <h6>What can you do?</h6>\n                <p>Reduce the amount of unnecessary car trips you take.\n                    Invest in reusable energy sources to power your electrical necessities.\n                    Don’t waste any energy that you aren’t utilizing such as turning off the lights when you\n                    leave the room.</p>\n                <p>None of this will solve the problem, but little things like this may help buy us time to try to stop\n                    the problem from progressing, and hopefully allow us to find a solution that could reverse this\n                    moribund process.</p>\n                <p>Excess carbon dioxide emissions aren’t the only cause for the untimely demise of this planet.\n                    Waste – more specifically, plastic waste – kills hundreds of thousands if not millions of biological\n                    life forms each year. The straws we use to drink our strawberry smoothies find their way into the\n                    stomachs of sea turtles. The plastic holders used to keep soda cans together find their way\n                    around the beaks of seagulls.</p>\n                    <p>Plastic is not a biodegradable product, hence, you get 100 million marine animals with plastic in\n                    their stomachs, releasing chemicals in their bodily systems that will end up killing them. And\n                    there’s the food chain to consider after that. Predators of these animals will eat them, not\n                    knowing it is toxic, eventually killing them too. Those predators who haven’t died from\n                    consuming the infected animals will somehow end up in the dinner plates of humans. And you\n                    guessed it. When people eat these pernicious animals, they also consume the toxins from the\n                    plastics. It becomes a whole cycle as you can see.</p>\n                <p>Consider limiting if not stopping the use of plastics in your-day-to-day life. Replace the plastic\n                    straws with metal ones. Don’t buy the pack-of-six soda containers surrounded by plastic from\n                    the gas station – actually, consider not buying them at all since it’s not very healthy anyways.\n                    Recycle properly as much and as often as you can. There’s so many minor things you could\n                    change in your daily routine that don’t require much effort which could majorly benefit this Earth.</p>\n                <p>Animal species are not the only thing disappearing by the day, as acres of rainforest continue to\n                    be chopped down for agricultural and economical purposes. Land depletion is not only allowing\n                    carbon dioxide emissions to rise – plants consume CO2 as energy intake; if there are less\n                    plants to take in this gas, there will be more CO2 in the atmosphere – but also displacing\n                    millions of animals from their homes.</p>\n                <p>Animal displacement, deforestation, global warming and climate change, toxic environments –\n                    just to name a few – are all problems caused by humans. Mother nature provides us with\n                    everything we need. I mean this quite literally. So how about giving back for a change. Clean up\n                    litter you see on the sidewalk and dispose of it properly. Don’t leave the water running while you\n                    brush your teeth. If you ever go to a beach, spend some time trying to clean it up. Listen to your\n                    mother and finish your food. Even though Apr. 22 is a specific day that commemorates our\n                    planet Earth, don’t just chip in your two cents to help this planet only on this specific date.\n                    Instead, pretend every day is Earth Day and give back to this planet Earth which gave so much\n                    to you.</p>', 7, 'page-image-1661296256104.png', '2022-08-23 18:10:56', '2022-08-23 18:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `d_title` text NOT NULL,
  `d_desc` text NOT NULL,
  `d_amount` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `user_id`, `d_title`, `d_desc`, `d_amount`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'X Press Feeders Limited: Pay for All Damages from MV X-Press Pearl Disaster in Sri Lanka', '<p><strong>MV X-Press Pearl,</strong>&nbsp;a container ship owned by X Press Feeders Ltd.,&nbsp;<strong>caught fire and sunk creating the&nbsp;largest environmental disaster in Sri Lankan history spilling oil</strong>,&nbsp;<strong>acid, polythene pellets, chemicals, and other toxic contaminants</strong>&nbsp;<strong>into the Sri Lankan coastline.</strong></p>\r\n\r\n<p>Immense devastation has occurred to 10,000 sq km+ of marine life, 100 km+ of beaches and coastline, 40 sq km+ of wetlands and lagoons and tens of thousands of livelihoods.</p>\r\n\r\n<p>The<strong>&nbsp;environmental and economic cost</strong>&nbsp;of the disaster is&nbsp;<strong>expected to be more than USD 5 billion</strong>&nbsp;to cover clean-up, fire-fighting, loss of economic activity and loss of ecosystem services.&nbsp;</p>\r\n\r\n<p><strong>We as, citizens of Sri Lanka and other countries affected, demand that X Press Feeders Ltd promptly cover all the expected environmental and economic costs to Sri Lanka from this disaster over the next three years.&nbsp;</strong></p>', '10000', 'image-1661367249100.jpg', '2022-08-24 22:04:17', '2022-08-24 13:54:09'),
(2, 1, 'Justice for Bilkis Bano', '<p>11 convicts who were convicted for rape of Bilkis Bano and killing of her family members have been released from Indian &nbsp;prison on 75th Independence Day of India. They are now roaming free and are danger to society as the crime they did is so heinous it will make one shiver. The appeal is to Supreme Court of India to put them back in prison as their freedom is insult to every human being.&nbsp;</p>', '5000', 'image-1661378737109.png', '2022-08-24 23:24:45', '2022-08-24 17:05:37'),
(3, 2, 'Australia is my home please let me stay here', '<p><strong>My name is Navninder Kaur and I have been living in Australia with my husband, Vikramjit Singh, for 18 years. We are living in Goolwa, SA with our rescued cats, dogs and rabbits.&nbsp;We have embraced Australia as our only home but the government wants to tear apart my beautiful family.&nbsp;Please help me appeal the government&#39;s rejection of our Permanent Residency visas.</strong></p>\r\n\r\n<p><strong>In the last four and a half years, Vikram and I have run a successful Indian restaurant together. We are proud of our commitment to our Goolwa community and growing the local economy although it has now closed due to my visa situation. In addition to my job as a care worker in Estia Health, I am also completing a nursing program. My husband, on the other hand, is pursuing a career in aviation</strong>.&nbsp;Our two dogs, seven cats, 2 rabbits, birds and chooks are all the family we will ever need and it is right here in Goolwa, Australia.</p>', '1000', 'image-1661380276109.jpg', '2022-08-24 17:31:16', '2022-08-24 17:31:16'),
(4, 3, 'Fluid', '<p>df dsdfs</p>', '100', 'image-1661454390108.JPG', '2022-08-25 19:06:30', '2022-08-25 19:06:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `financePage`
--

CREATE TABLE `financePage` (
  `id` int(11) NOT NULL,
  `main_desc` text,
  `goal_title_one` text,
  `goal_desc_one` text,
  `goal_title_two` text,
  `goal_desc_two` text,
  `goal_title_three` text,
  `goal_desc_three` text,
  `goal_title_four` text,
  `goal_desc_four` text,
  `goal_title_five` text,
  `goal_desc_five` text,
  `goal_title_six` text,
  `goal_desc_six` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financePage`
--

INSERT INTO `financePage` (`id`, `main_desc`, `goal_title_one`, `goal_desc_one`, `goal_title_two`, `goal_desc_two`, `goal_title_three`, `goal_desc_three`, `goal_title_four`, `goal_desc_four`, `goal_title_five`, `goal_desc_five`, `goal_title_six`, `goal_desc_six`, `created_at`, `updated_at`) VALUES
(1, 'Here at Invulc we believe in maximizing the impact per dollar. We continuously work to find the best organizations that put your money to work. 100% of the money donated goes directly to the organization and cause of choice. This allows your donations to target causes you are passionate about and work towards inventing universal change!', 'NO POVERTY', 'Outreach International is dedicated towards helping communities overcome chronic poverty. Their work supports constructing new water wells, establishing low-interest loan programs, repairing roads, growing vegetables, and more. Outreach international is focused on providing sustainable opportunities that empower people to lift themselves. 100% of donations go towards work in communities around the world.', 'QUALITY EDUCATION', 'Room to Read believes that change starts with education and opportunity. They work with local communities, governments, and partner with organizations to encourage pursuing higher education and developing the necessary skills to succeed in life. Over 95 percent of their finances is working towards their program to benefit children or fundraising to further these efforts.', 'ECOLOGICAL PRESERVATION', 'Founded in 2001, Oceana has grown to become the largest international organization dedicated to ocean conservation. Their efforts are focused on achieving measurable outcomes that will help restore the oceans to their former state. Most of their finances are dedicated towards conserving the oceans along with expanding their reach. This enables them to drive the largest impact they can through donated funds.', 'REDUCED CARBON FOOTPRINT', 'The Climate Reality Project’s mission is to catalyze a global solution to the climate crisis by making urgent action a necessity across every level of society. Over 90% of the donated money goes directly towards creating a solution to the climate crisis with the rest of the expenses going towards expanding and running the organization.', 'ZERO HUNGER', 'ZERO HUNGER\r\nFeeding America has one goal, to provide food for people across America. They work with 200 foodbanks, host 60,000 programs, and serve 1 in 7 Americans. Every $1.00 donated goes directly towards providing 10 meals for people in need.', 'CLEAN WATER', 'Charity water is dedicated towards ending the water crisis. Every dollar donated is tracked and its impact measured. They work with local partners towards making water accessible for everyone. Every $40 donated equates to providing a year\'s worth of water for 12 people. Since Charity Water’s operational costs are covered by private donors, 100% of the funds donated goes directly towards the mission.', NULL, '2022-08-25 18:04:02');

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `id` int(11) NOT NULL,
  `goal_name` text NOT NULL,
  `goal_slug` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`id`, `goal_name`, `goal_slug`, `created_at`, `updated_at`) VALUES
(2, 'Zero Hunger', 'zero-hunger', '2022-08-01 20:25:25', '2022-08-25 18:55:06'),
(4, 'No Poverty', 'no-poverty', '2022-08-23 17:37:51', '2022-08-23 17:37:51'),
(5, 'Ecological Preservation', 'ecological-preservation', '2022-08-23 17:38:11', '2022-08-23 17:38:11'),
(6, 'Reduced Carbon Footprint', 'reduced-carbon-footprint', '2022-08-23 17:38:33', '2022-08-23 17:38:33'),
(7, 'Quality Education', 'quality-education', '2022-08-23 17:38:55', '2022-08-23 17:38:55'),
(8, 'Clean Water', 'clean-water', '2022-08-23 17:39:10', '2022-08-23 17:39:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_24_204828_create_payments_table', 2),
(6, '2022_08_25_202136_add_google_id_into_users_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `slug` varchar(250) NOT NULL,
  `goal_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `slug`, `goal_id`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ZERO HUNGER', 'zero-hunger', 2, 'Over 811 million people around the world are malnourished or have little access to food as of 2022. Of this population, over 9 million people die annually from starvation, including 3.1 million children. These people are primarily concentrated in developing countries, such as Pakistan, Ethiopia, and Nigeria. Thus, we aim to both aid those who suffer from hunger, as well as eliminate hunger as a whole throughout the world. In an age where technology has made food production more efficient, especially in developing countries, no one deserves to go hungry.', 'page-image1.png', '2022-08-23 16:17:52', '2022-08-23 16:26:25'),
(2, 'NO POVERTY', 'no-poverty', 4, 'Poverty is defined as the inability of a person to satisfy their basic needs due to insufficient material wealth. Since 2020, the number of those who are on or below the poverty line have increased; the US has experienced a 6 million increase in the population of people in poverty from 2021 to 2022. Those who are financially incapable lack access to affordable healthy foods, health care, and good education. Thus, we aim to improve the quality of life and eliminate poverty primarily across the US.', 'page-image-1661294373102.png', '2022-08-23 17:39:33', '2022-08-23 17:39:33'),
(3, 'ECOLOGICAL PRESERVATION', 'ecological-preservation', 5, '1 million plants and animal species are on the brink of extinction. 60% of Earth’s natural ecosystems have been either damaged or destroyed over the past 60 years. Overconsumption, pollution, and deforestation are part of the factors that are contributing to this decline. Thus, we aim to prevent any further environmental harm by both raising awareness and directly contributing to the cause. Community cleanups, fundraising for your local wildlife organization, the possibilities are endless amidst this global crisis.', 'page-image-1661294416107.png', '2022-08-23 17:40:16', '2022-08-23 17:40:16'),
(4, 'REDUCED CARBON FOOTPRINT', 'reduced-carbon-footprint', 6, 'Our fourth goal is to reduce our Carbon Footprint. This goal falls under our “sustainability” category, which works with our third goal, Ecological Preservation. Like the name suggests, this goal aims to minimize the amount of carbon that is produced in our world. We work to optimize certain practices such as the burning of fossil fuels in large industries. Click to learn more!', 'page-image-1661294448104.png', '2022-08-23 17:40:48', '2022-08-23 17:40:48'),
(5, 'QUALITY EDUCATION', 'quality-education', 7, 'We all have some means of education, whether it’s school or separate classes. However, approximately 537 million children around the world do not have access to education, not including the children in the United States. In countries like Africa, the value of education is extremely low, and schools aren’t being built for the children there. Furthermore, there are people whose families cannot support school, resulting in the force of child labor. Whether it’s a first or third-world country, our goal strives to promote the building of affordable schools in different parts of the globe, by fundraising for international charities and raising awareness.', 'page-image-1661294479104.png', '2022-08-23 17:41:19', '2022-08-23 17:41:19'),
(6, 'CLEAN WATER', 'clean-water', 8, 'Since approximately 2.1 billion people across the globe lack clean water, this goal focuses on generating funding for water filtration systems and man-made creations of water sources. For example, a primary target for this goal is Africa, since the dry climate introduces toxic particles into the drinking water of Africa’s rivers and lakes, so that inhabitants have to dig deep just to get dirty water. This can further lead to life-threatening illnesses such as gastrointestinal illness, chronic diseases, and sometimes cancer. We often take for granted the water we have access to every day of our lives. However, by contributing to this goal and its water-funding charities, a quality everyone deserves becomes much more prevalent.', 'page-image-1661294502105.png', '2022-08-23 17:41:42', '2022-08-23 17:41:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `donation_id` bigint(20) NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(10,2) NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `donation_id`, `payment_id`, `payer_id`, `payer_email`, `amount`, `currency`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'PAYID-MMDI72Q08190133B2854663R', 'KV3YPGE97S86A', 'azahid42101-buyer@gmail.com', 1000.00, 'USD', 'approved', '2022-08-24 15:54:43', '2022-08-24 15:54:43'),
(2, 2, 1, 'PAYID-MMDJBDI8L200692NP1495919', 'KV3YPGE97S86A', 'azahid42101-buyer@gmail.com', 1000.00, 'USD', 'approved', '2022-08-24 15:56:56', '2022-08-24 15:56:56'),
(3, 3, 1, 'PAYID-MMDJB4I6P379038Y7013191F', 'KV3YPGE97S86A', 'azahid42101-buyer@gmail.com', 1000.00, 'USD', 'approved', '2022-08-24 15:58:37', '2022-08-24 15:58:37'),
(4, 2, 1, 'PAYID-MMDJYIY3U0270113V558893V', 'KV3YPGE97S86A', 'azahid42101-buyer@gmail.com', 50.00, 'USD', 'approved', '2022-08-24 16:46:21', '2022-08-24 16:46:21'),
(5, 2, 2, 'PAYID-MMDKBPI45L43590GS485704E', 'KV3YPGE97S86A', 'azahid42101-buyer@gmail.com', 1000.00, 'USD', 'approved', '2022-08-24 17:06:26', '2022-08-24 17:06:26'),
(6, 2, 2, 'PAYID-MMDKB7Q7LH27282RG202570E', 'KV3YPGE97S86A', 'azahid42101-buyer@gmail.com', 4100.00, 'USD', 'approved', '2022-08-24 17:07:05', '2022-08-24 17:07:05'),
(7, 2, 3, 'PAYID-MMDKNQQ4MA17245BU361935P', 'KV3YPGE97S86A', 'azahid42101-buyer@gmail.com', 100.00, 'USD', 'approved', '2022-08-24 17:31:52', '2022-08-24 17:31:52'),
(8, 2, 3, 'PAYID-MMDKN5I9J676275NN7243931', 'KV3YPGE97S86A', 'azahid42101-buyer@gmail.com', 1100.00, 'USD', 'approved', '2022-08-24 17:32:36', '2022-08-24 17:32:36'),
(9, 3, 4, 'PAYID-MMD4R3Y1SW74591NS271183D', 'KV3YPGE97S86A', 'azahid42101-buyer@gmail.com', 50.00, 'USD', 'approved', '2022-08-25 19:09:53', '2022-08-25 19:09:53'),
(10, 2, 4, 'PAYID-MMD4TAA25J12853T50806454', 'KV3YPGE97S86A', 'azahid42101-buyer@gmail.com', 50.00, 'USD', 'approved', '2022-08-25 19:12:46', '2022-08-25 19:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `petitions`
--

CREATE TABLE `petitions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `p_title` text NOT NULL,
  `p_goal` bigint(20) NOT NULL,
  `p_desc` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petitions`
--

INSERT INTO `petitions` (`id`, `user_id`, `p_title`, `p_goal`, `p_desc`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'STOP Philippine Customs to Impose Tighter Rules for Balikbayan Boxes', 2000, '<p>Alot of OFW were being affected of the customs to impose tighter rules for balikbayan boxes and will also put additional tax on it. We all know how much corruption is happening in customs right now. We cannot deny it. Add to that they are aggresively telling that they have the rights to open boxes, if something is missing after the inspection we have the rights to report it to the authorities. Who is the authorities they are saying? Even if that happen and we report it we all know that there will be no good output.</p>', 'image-166144169799.jpg', '2022-08-25 15:40:28', '2022-08-25 15:34:57'),
(2, 2, 'STOP Philippine Customs to Impose Tighter Rules for Balikbayan Boxes', 50000, '<p>Alot of OFW were being affected of the customs to impose tighter rules for balikbayan boxes and will also put additional tax on it. We all know how much corruption is happening in customs right now. We cannot deny it. Add to that they are aggresively telling that they have the rights to open boxes, if something is missing after the inspection we have the rights to report it to the authorities. Who is the authorities they are saying? Even if that happen and we report it we all know that there will be no good output.</p>', 'image-1661441983104.jpg', '2022-08-25 15:39:43', '2022-08-25 15:39:43'),
(3, 3, 'Fluid', 1000, '<p>Example: &ldquo;Buy organic, free-range eggs for your restaurants.&rdquo;</p>', 'image-1661454303101.jpg', '2022-08-25 19:05:03', '2022-08-25 19:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `petitions_signed`
--

CREATE TABLE `petitions_signed` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petitions_signed`
--

INSERT INTO `petitions_signed` (`id`, `u_id`, `p_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 9, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `country`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `google_id`) VALUES
(1, 'Jhon', 'Wick', 'United States', 'admin@gmail.com', NULL, '$2y$10$RiG10lm4nUAlbjUOWrdd4OLGkk0jIZSge9U52LtgoPkPFzkaphQeO', 1, NULL, '2022-08-24 12:45:47', '2022-08-24 12:45:47', NULL),
(2, 'Jhon', 'Wick', 'United States', 'jhonwick2@gmail.com', NULL, '$2y$10$JEAUtIfJGP0A12qeCJcvVeX1WPgH6Jqs4vtHSA9PZFa/Nc6PR.4Xy', 2, NULL, '2022-08-24 13:26:33', '2022-08-24 13:26:33', NULL),
(3, 'devmin', 'min', 'Afghanistan', 'devmin720@gmail.com', NULL, '$2y$10$Gdo88.UN9wNuInRRWAYJzuZVdLddDJAQU6AMxMoAnimhmN/YGGAmi', 2, NULL, '2022-08-25 19:03:04', '2022-08-25 19:03:04', NULL),
(4, 'aa', 'qweqweqwe', 'Afghanistan', 'demo@user.com', NULL, '$2y$10$LxG1fR/7wf1Gm/WWT5k/oebDteCNrrWCKMcccmzEoapFq39lYm0wG', 2, NULL, '2022-08-25 19:32:43', '2022-08-25 19:32:43', NULL),
(9, 'Mubeen Khan', NULL, NULL, 'mubeen.khan208@gmail.com', NULL, '$2y$10$4TYudFbHmrB7MmImoDNmxOhj/Xl1Mj.MvaBxnAD7ltLBw248Nx/aO', 2, NULL, '2022-08-25 20:45:51', '2022-08-25 22:51:08', '105006722910033166054');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutPage`
--
ALTER TABLE `aboutPage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `financePage`
--
ALTER TABLE `financePage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `petitions`
--
ALTER TABLE `petitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petitions_signed`
--
ALTER TABLE `petitions_signed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutPage`
--
ALTER TABLE `aboutPage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `financePage`
--
ALTER TABLE `financePage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petitions`
--
ALTER TABLE `petitions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `petitions_signed`
--
ALTER TABLE `petitions_signed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
