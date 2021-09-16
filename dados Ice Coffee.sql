-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 26, 2013 at 07:17 AM
-- Server version: 5.5.14
-- PHP Version: 5.5.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ice10`
--

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `preco` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` text COLLATE utf8_unicode_ci,
  `data` date DEFAULT NULL,
  `vendas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `descricao`, `data`, `vendas`) VALUES
(1, 'Red Velvet', '4,90', 'As duas palavras, em inglês, significam vermelho e veludo, respectivamente. O tom bordeaux esconde sabor de chocolate. O creme branco é o perfeito oposto complementar: baunilha.', '2013-09-01', 5),
(2, 'Bolo de chocolate', '4,90', 'Chocolate 50% cacal e especiarias que fazem o nosso bolo ser unico e especial', '2013-10-01', 90),
(3, 'Bolo Gelado', '4,90', 'Bem molhadinho e com bastante coco', '2013-09-29', 12),
(4, 'Folhados', '3,90', 'Recheado com um mholho de frango super cremoso e com uma massa muito crocante, esperimente essa delicia', '2013-09-20', 3),
(5, 'Pastel', '2,50', 'Varios sabores para vc escolher, basta escolher a combinação e esperar', '2013-09-27', 45),
(6, 'Pão de Queijo', '2,90', 'Macio por dentro e crocante por fora, o melhor pão de queijo de minas gerais', '2013-09-01', 178),
(7, 'Expresso', '1,90', 'Cafezinho expresso com gostinho de cazeiro, uma delicia', '2013-09-01', 84),
(8, 'Frapuccino', '3,90', 'É uma mistura da palavra frappé (do francês: bater, ex.: frapper à la porte = bater na porta) com o cappuccino, que é o espresso com leite vaporizado.  A bebida é preparada com café, gelo, leite, chantilly e outras complementos conforme a variação: chocolate, caramelo, etc…', '2013-09-03', 123),
(9, 'Chocolate Quente', '3,90', 'Chocolate de alta qualidade com leite e chantili muito cremoso para aquecer a barriga e o coração', '2013-09-18', 78),
(10, 'Café Gelado', '4,90', 'Especialidade da casa, o cafe como vc nunca viu, cobertura de doce de leite, muito gelo, leite e café, vc precisa esperimentar', '2013-09-03', 146),
(11, 'Capuccino', '2,90', 'Drinque quente com café espresso e leite espumante. O estilo europeu de cappuccino pede 1/3 de espresso, 1/3 de leite quente, 1/3 de espuma em uma xícara de aproximadamente 141,75 gramas (5 ounces) de bebida.', '2013-09-02', 345),
(12, 'smooth', '4,90', 'Feito a partir de ingredientes naturais, o smoothie se tornou sinônimo de lanche saudável. Seu nome é uma variante de smooth, que quer dizer liso ou suave, em inglês. Por isso, quando você se depara com essa bebida tem a certeza de estar tomando algo muito cremoso e delicioso.', '2013-09-07', 256),
(13, 'Latte', '3,90', 'O latte, ou café latte, é feito com uma dose de café expresso e duas vezes o volume de leite quente, mais espuma de leite por cima. A textura é menos cremosa do que a do cappuccino, com quem às vezes é confundido.', '2013-09-03', 42),
(14, 'Irish', '3,90', ' Bebida perfeita para os dias mais frios, mistura o café quente com uma dose de uísque irlandês.', '2013-09-04', 312),
(15, 'Moka', '3,90', 'Trata-se da combinação de café expresso, calda ou ganache de chocolate, leite vaporizado e espuma de leite. O nome (também escrito mocha) vem de uma região do Iêmen, no Oriente Médio, uma importante região produtora de café.', '2013-09-11', 98);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
