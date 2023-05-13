-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Abr-2023 às 21:17
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `somar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ods`
--


CREATE TABLE `ods` (
  `odsID` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Sobre` varchar(100) NOT NULL,
  `Imagem` varchar(200) NOT NULL,
  `Ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ods`
--

INSERT INTO `ods` (`odsID`, `Nome`, `Sobre`,`Imagem`, `Ativo`) VALUES
(1, 'Erradicação da Pobreza', 'Acabar com a pobreza em todas as suas formas, em todos os lugares','1.png', 1),
(2, 'Fome Zero e Agricultura Sustentável', 'Acabar com a fome, alcançar a segurança alimentar e melhoria da nutrição e promover a agricultura sustentável','2.png', 1),
(3, 'Saúde e Bem Estar', 'Assegurar uma vida saudável e promover o bem-estar para todos, em todas as idades','3.png', 1),
(4, 'Educação de Qualidade', 'Assegurar a educação inclusiva e equitativa de qualidade, e promover oportunidades de aprendizagem ao longo da vida para todos','4.png', 1),
(5, 'Igualdade de Gênero', 'Alcançar a igualdade de gênero e empoderar todas as mulheres e meninas','5.png', 1),
(6, 'Água Potável e Saneamento', 'Assegurar a disponibilidade e a gestão sustentável da água e saneamento para todos','6.png', 1),
(7, 'Energia Acessível e Limpa', 'Assegurar o acesso confiável, sustentável, moderno e a preço acessível à energia para todos','7.png', 1),
(8, 'Trabalho Decente e Crescimento Econômico', 'Promover o crescimento econômico sustentado, inclusivo e sustentável, o emprego pleno e produtivo e o trabalho decente para todos','8.png', 1),
(9, 'Indústria Inovação e Infraestrutura', 'Construir infraestruturas resilientes, promover a industrialização inclusiva e sustentável e fomentar a inovação','9.png', 1),
(10,'Redução das Desigualdades', 'Reduzir a desigualdade dentro dos países e entre eles','10.png', 1),
(11,'Cidades e Comunidades Sustentáveis', 'Tornar as cidades e os assentamentos humanos inclusivos, seguros, resilientes e sustentáveis','11.png', 1),
(12,'Consumo e Produção Responsáveis', 'Assegurar padrões de produção e de consumo sustentáveis','12.png', 1),
(13,'Ação Contra a Mudança Global do Clima', 'Tomar medidas urgentes para combater a mudança do clima e seus impactos*','13.png', 1),
(14,'Vida na Água', 'Conservar e promover o uso sustentável dos oceanos, dos mares e dos recursos marinhos para o desenvolvimento sustentável','14.png', 1),
(15,'Vida Terrestre', 'Proteger, recuperar e promover o uso sustentável dos ecossistemas terrestres, gerir de forma sustentável as florestas, combater a desertificação, deter e reverter a degradação da terra e deter a perda','15.png', 1),
(16,'Paz, Justiça e Instituições Eficazes', 'Promover sociedades pacíficas e inclusivas para o desenvolvimento sustentável, proporcionar o acesso à justiça para todos e construir instituições eficazes, responsáveis e inclusivas em todos os níveis','16.png', 1),
(17,'Parcerias e Meios de Implementação', 'Fortalecer os meios de implementação e revitalizar a parceria global para o desenvolvimento sustentável','17.png', 1);

-- --------------------------------------------------------

--

CREATE TABLE `projetos` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `Descricao` varchar(250) NOT NULL,
  `Imagem` varchar(200) NOT NULL,
  `Ativo` tinyint(1) NOT NULL,
  `odsID` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `projetos`
--

INSERT INTO `projetos` (`ID`, `Nome`, `Descricao`,`Imagem`,`Ativo`,`odsID`) VALUES
(1, 'Exemplo de Projeto ', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae aliquam, inventore esse repellendus eos facilis quam fugiat','1.png',1,1),
(2, 'fgfdgfg Projeto ', 'Lolor sit, amet consectetur adipisicing elit. Molestiae aliquam, inventore esse repellendus eos facilis quam fugiat','2.png',1,2),
(3, 'kkkkkk Projeto ', ' ipsum dolor sit, amet consectetur adipisicing elit. Molestiae aliquam, inventore esse repellendus eos facilis quam fugiat','3.png',1,3),
(4, 'pooppp Projeto ', 'amet consectetur adipisicing elit. Molestiae aliquam, inventore esse repellendus eos facilis quam fugiat','4.png',1,4),
(5, 'dfsdfdsfsd de Projeto ', 'met consectetur adipisicing elit. Molestiae aliquam, inventore esse repellendus eos facilis quam fugiat','5.png',1,5);


--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ods`
--
ALTER TABLE `ods`
  ADD PRIMARY KEY (`odsID`);

--
-- Índices para tabela `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`ID`);


-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ods`
--
ALTER TABLE `ods`
  MODIFY `odsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;