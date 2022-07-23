-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               8.0.19 - MySQL Community Server - GPL
-- Операционная система:         Win64
-- HeidiSQL Версия:              11.0.0.5958
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица redpixel.feedback
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы redpixel.feedback: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `description`) VALUES
	(1, 'Rbhbkk', '2@asd.ru', '123123123123', 'asd');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;

-- Дамп структуры для таблица redpixel.projects
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `description` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `link_title` varchar(255) DEFAULT NULL,
  `type` varchar(20) DEFAULT 'game' COMMENT 'set one from list - [''game'', ''app'', ''web'', ''bots'']',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы redpixel.projects: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` (`id`, `title`, `description`, `path`, `link`, `link_title`, `type`) VALUES
	(1, 'Сайт ресторана "Kebab City House"', 'Вебсайт для Польского ресторана с доставкой на дом', 'assets/img/portfolio/portfolio-4.png', 'http://kebab.city.house.tilda.ws/', 'Переход на сайт', 'web'),
	(2, 'Игровой прототип "Arena 8D"', 'Прототип онлайн-пошаговой стратегии', 'assets/img/portfolio/portfolio-3.png', NULL, NULL, 'game'),
	(3, 'Игровое приложение "Portal Hero"', 'Казуальная игра в жанре головоломка', 'assets/img/portfolio/portfolio-2.png', 'https://play.google.com/store/apps/details?id=com.RedPixel.PortalHeroRobotadventuregame', 'Приложение в Google Play', 'game'),
	(4, 'Игровое приложение "Кубокот"', 'В сотрудничестве с телеканалом "СТС" и Яндексом', 'assets/img/portfolio/portfolio-1.png', NULL, NULL, 'game');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
