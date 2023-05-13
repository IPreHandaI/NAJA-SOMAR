-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Maio-2023 às 00:02
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

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
  `odsid` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Sobre` mediumtext NOT NULL,
  `Imagem` varchar(200) NOT NULL,
  `Ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ods`
--

INSERT INTO `ods` (`odsid`, `Nome`, `Sobre`, `Imagem`, `Ativo`) VALUES
(0, 'Erradicação da Pobreza', ' Acabar com a pobreza em todas as suas formas, em todos os lugares.', 'https://www.atlasodsamazonas.ufam.edu.br/images/SDG-icon-PT-01.jpg', 1),
(1, 'Fome Zero e Agricultura Sustentável', 'Acabar com a fome, alcançar a segurança alimentar e melhoria da nutrição e promover a agricultura sustentável.', 'https://www.estrategiaods.org.br/wp-content/uploads/2021/10/ODS2-1.jpg', 1),
(2, 'Saúde e Bem Estar', ' Assegurar uma vida saudável e promover o bem-estar para todas e todos, em todas as idades.', 'https://www.estrategiaods.org.br/wp-content/uploads/2021/10/ODS3-1.jpg', 1),
(3, 'Educação de Qualidade', 'Assegurar a educação inclusiva e equitativa e de qualidade, e promover oportunidades de aprendizagem ao longo da vida para todas e todos.', 'https://www.estrategiaods.org.br/wp-content/uploads/2021/10/ODS4.jpg', 1),
(4, 'Igualdade de Gênero', 'Alcançar a igualdade de gênero e empoderar todas as mulheres e meninas.', 'https://www.estrategiaods.org.br/wp-content/uploads/2021/10/ODS5-1.jpg', 1),
(5, 'Água Potável e Saneamento', 'Assegurar a disponibilidade e gestão sustentável da água e saneamento para todas e todos.', 'https://www.estrategiaods.org.br/wp-content/uploads/2021/10/ODS6-1.jpg', 1),
(6, 'Energia Acessível e Limpa', ' Assegurar o acesso confiável, sustentável, moderno e a preço acessível à energia para todas e todos.', 'https://www.estrategiaods.org.br/wp-content/uploads/2021/10/ODS7-1.jpg', 1),
(7, 'Trabalho Decente e Crescimento Econômico', 'Promover o crescimento econômico sustentado, inclusivo e sustentável, emprego pleno e produtivo e trabalho decente para todas e todos.', 'https://oestepr2030.org.br/wp-content/uploads/2018/07/8-Trabalho-Decente-e-Crescimento-Econ%C3%B4mico.-Vetorizada.-JPG.-Com-t%C3%ADtulo.-Colorida.jpg', 1),
(8, 'Indústria Inovação e Infraestrutura', 'Construir infraestruturas resilientes, promover a industrialização inclusiva e sustentável e fomentar a inovação.', 'https://www.estrategiaods.org.br/wp-content/uploads/2021/10/ODS9-1.jpg', 1),
(9, 'Redução das Desigualdades', 'Reduzir a desigualdade dentro dos países e entre eles.', 'https://www.estrategiaods.org.br/wp-content/uploads/2021/10/ODS10-1.jpg', 1),
(10, 'Cidades e Comunidades Sustentáveis', 'Tornar as cidades e os assentamentos humanos inclusivos, seguros, resilientes e sustentáveis.', 'https://www.estrategiaods.org.br/wp-content/uploads/2021/10/ODS11-1.jpg', 1),
(11, 'Consumo e Produção Responsáveis', 'Assegurar padrões de produção e de consumo sustentáveis.', 'https://www.estrategiaods.org.br/wp-content/uploads/2021/10/ODS12-1.jpg', 1),
(12, 'Ação Contra a Mudança Global do Clima', 'Tomar medidas urgentes para combater a mudança climática e seus impactos.', 'https://www.estrategiaods.org.br/wp-content/uploads/2021/10/ODS13-1.jpg', 1),
(13, 'Vida na Água', 'Conservação e uso sustentável dos oceanos, dos mares e dos recursos marinhos para o desenvolvimento sustentável.', 'https://www.estrategiaods.org.br/wp-content/uploads/2021/10/ODS14-1-1.jpg', 1),
(14, 'Vida Terrestre', 'Proteger, recuperar e promover o uso sustentável dos ecossistemas terrestres, gerir de forma sustentável as florestas, combater a desertificação, deter e reverter a degradação da terra e deter a perda de biodiversidade.', 'https://www.estrategiaods.org.br/wp-content/uploads/2021/10/ODS15-1.jpg', 1),
(15, 'Paz, Justiça e Instituições Eficazes', 'Promover sociedades pacíficas e inclusivas para o desenvolvimento sustentável, proporcionar o acesso à justiça para todos e construir instituições eficazes, responsáveis e inclusivas em todos os níveis.', 'https://www.estrategiaods.org.br/wp-content/uploads/2021/10/ODS16-1-1.jpg', 1),
(16, 'Parcerias e Meios de Implementação', 'Fortalecer os meios de implementação e revitalizar a parceria global para o desenvolvimento sustentável.', 'https://www.estrategiaods.org.br/wp-content/uploads/2021/10/ODS17-1.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

CREATE TABLE `projetos` (
  `projetosid` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `Descricao` varchar(250) NOT NULL,
  `Imagem` varchar(200) NOT NULL,
  `Ativo` tinyint(1) NOT NULL,
  `odsid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `projetos`
--

INSERT INTO `projetos` (`projetosid`, `Nome`, `Descricao`, `Imagem`, `Ativo`, `odsid`) VALUES
(0, 'Exemplo de Projeto ', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae aliquam, inventore esse repellendus eos facilis quam fugiat', 'https://blog.emania.com.br/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2016/02/direitos-autorais-e-de-imagem-1024x683.jpg.webp', 1, 1),
(1, 'fgfdgfg Projeto ', 'Lolor sit, amet consectetur adipisicing elit. Molestiae aliquam, inventore esse repellendus eos facilis quam fugiat', 'https://st.depositphotos.com/1010338/2099/i/600/depositphotos_20999947-stock-photo-tropical-island-with-palms.jpg', 1, 2),
(2, 'kkkkkk Projeto ', ' ipsum dolor sit, amet consectetur adipisicing elit. Molestiae aliquam, inventore esse repellendus eos facilis quam fugiat', 'https://blog.portalpos.com.br/app/uploads/2021/08/cores.jpg', 1, 3),
(3, 'pooppp Projeto ', 'amet consectetur adipisicing elit. Molestiae aliquam, inventore esse repellendus eos facilis quam fugiat', 'https://img.freepik.com/fotos-gratis/imagem-aproximada-da-cabeca-de-um-lindo-leao_181624-35855.jpg', 1, 4),
(4, 'dfsdfdsfsd de Projeto ', 'met consectetur adipisicing elit. Molestiae aliquam, inventore esse repellendus eos facilis quam fugiat', 'https://img.freepik.com/fotos-gratis/terra-e-galaxia-elementos-desta-imagem-fornecidos-pela-nasa_335224-750.jpg', 1, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetosods1`
--

CREATE TABLE `projetosods1` (
  `projetosods1id` int(11) NOT NULL,
  `descricao_ods1` text DEFAULT NULL,
  `projetosid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ods`
--
ALTER TABLE `ods`
  ADD PRIMARY KEY (`odsid`);

--
-- Índices para tabela `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`projetosid`);

--
-- Índices para tabela `projetosods1`
--
ALTER TABLE `projetosods1`
  ADD PRIMARY KEY (`projetosods1id`),
  ADD KEY `projetosid` (`projetosid`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ods`
--
ALTER TABLE `ods`
  MODIFY `odsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `projetosods1`
--
ALTER TABLE `projetosods1`
  MODIFY `projetosods1id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `projetosods1`
--
ALTER TABLE `projetosods1`
  ADD CONSTRAINT `projetosods1_ibfk_1` FOREIGN KEY (`projetosid`) REFERENCES `projetos` (`projetosid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
