-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 09-Out-2023 às 11:40
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ashy`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE IF NOT EXISTS `cadastro` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(62) NOT NULL,
  `senha` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Thomas', 'thomas@gmail.com', '$2y$10$xhPRnp7VBWFkLhSkEVSE1e25Jcc/Txw5DiKaoUUibCKasckcDo6TC'),
(2, 'Thomas', 'thomas@gmail.com', '$2y$10$Fj4zuH3XpSh5E7XDg2V.6.VN/qhJ2fpPfZlxHjB33kgbiyVg9wTi6'),
(3, 'Thomas', 'thomas@gmail.com', '$2y$10$YSOODtHzFklYPBPeGqAgGO7FuVeAPPHX9P.yx7PJTxIMe7UnB5C3m'),
(4, 'Thomas', 'thomas@gmail.com', '$2y$10$k9NV5pIuzlHGXDKWyqZz2OA//PJ3ilUKN25lnNCWBH6eFLomMj5kq'),
(5, 'Thomas', 'thomas@gmail.com', '$2y$10$6jMZ3UxCQkwSJjTA/ARoyOkI5wOpKlOkhwtg4oRsY6dyMfALAaavm'),
(6, 'Thomas', 'thomas@gmail.com', '$2y$10$FlVjVcbvK84kmOjJEaB8iu4eEse.OFN2buIYPsMuiiOkkygSAabEm'),
(7, 'Thomas', 'thomas@gmail.com', '$2y$10$6gCyvBs4eUaT8srwRUvsYeuSOkSdBPuM.PMuXdIQHiu3sHqUeI.Ka'),
(8, 'Thomas', 'thomas2@gmail.com', '$2y$10$tZ4i7Eq/9nIEnk0Vpto7g.7IFiK2BxO3flEzJQpF3E5GDf.8JjVjC'),
(9, 'Thomas', 'thomas2@gmail.com', '$2y$10$LAboE6qkfv.VrOYDBsOORetx48jlJ2GGNm8oRu3IJMe.NYHSIlK2e'),
(10, 'Thomas', 'thomas@gmail.com', '$2y$10$.kZ34SY86CeGttGbR9JWPu2SSQ8TrpVz0x2qnw6WGJcSl0ual9CC6'),
(11, 'Thomas', 'thomas@gmail.com', '$2y$10$dIVjhUYOFN.D3oJj7fyS4ejQVl5t/5HAqY8QERfXqWlyJ1lhej7/K'),
(12, 'Thomas', 'thomas@gmail.com', '$2y$10$ke6sKg3fLYEBHXAr5gSxFuAiOUlv9/Cqee/FNVuWRaUPvCJxh.gUy'),
(13, '', '', '$2y$10$FBiiEGp4nrkas3MGQ2GSzOQ8U6LlSoe2s5IKin4dfwngbld8xm8oW'),
(14, '', '', '$2y$10$BKkKNUJcO1Qjx9.xehQOyuNSx/yAO6/IzsjutOp5CD.OnA1a8T7wi'),
(15, 'Thomas', 'thomas@gmail.com', '$2y$10$nngWyjOiCoS83sFq9QWhb.rEJeWgWE2uhspyBaT98CHr98Vrn9Blq');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
