-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 02:34 AM
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
-- Database: `piranews`
--

-- --------------------------------------------------------

--
-- Table structure for table `classificados`
--

CREATE TABLE `classificados` (
  `id` int(11) NOT NULL,
  `titulo` tinytext NOT NULL,
  `descrição` mediumtext NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `empresa` tinytext NOT NULL,
  `DATACADASTRO` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `stat` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classificados`
--

INSERT INTO `classificados` (`id`, `titulo`, `descrição`, `imagem`, `link`, `empresa`, `DATACADASTRO`, `stat`) VALUES
(5, 'Oportunidade de estágio no TCU', 'O Tribunal de Contas da União, por meio de sua Secretaria de Tecnologia da Informação e Evolução Digital, iniciou nova seleção de estágio em Oracle APEX para alunos de graduação da área de Tecnologia da Informação.\r\n\r\n \r\n\r\nNas últimas seleções, o TCU contratou em média mais de 50 estagiários de todo o Brasil para atuar em desenvolvimento e manutenção de aplicações web em Oracle APEX. O estagiário contratado atua intensamente com as linguagens SQL, PL/SQL, JavaScript, HTML e CSS, e com modelagem de banco de dados.\r\n\r\n \r\n\r\nAs inscrições já se iniciaram, se encerram no dia 20/2/2024 e podem ser feitas clicando aqui.\r\n\r\n \r\n\r\nHá limite máximo para o número de inscritos.', './imagens_banco/tcu.png', 'https://contas.tcu.gov.br/ords/f?p=701667:101::::::', 'Tribunal de contas da UNIÃO', '2023-11-25 14:16:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `assunto` tinytext NOT NULL,
  `reclamação` longtext NOT NULL,
  `DATACADASTRO` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `titulo` tinytext NOT NULL,
  `descrição` mediumtext NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `produtora` tinytext NOT NULL,
  `DATACADASTRO` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `stat` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filmes`
--

INSERT INTO `filmes` (`id`, `titulo`, `descrição`, `imagem`, `link`, `produtora`, `DATACADASTRO`, `stat`) VALUES
(3, 'OPENHEIMER', 'O físico J. Robert Oppenheimer trabalha com uma equipe de cientistas durante o Projeto Manhattan, levando ao desenvolvimento da bomba atômica.\r\n', './imagens_banco/openheimer.png', 'https://www.adorocinema.com/filmes/filme-296168/', 'American Prometheus', '2023-11-25 13:21:39', 1),
(4, 'JOGOS VORAZES – A CANTIGA DOS PÁSSAROS E DAS SERPENTES', 'Anos antes de se tornar o presidente tirânico de Panem, Coriolanus Snow, de 18 anos, vê uma chance de mudar sua sorte quando se torna o mentor de Lucy Gray Baird, o tributo feminino do Distrito 12.\r\n', './imagens_banco/jogos_vorazes.png', 'https://cinearaujo.com.br/filme/jogos-vorazes-a-cantiga-dos-passaros-e-das-serpentes/', 'Good Universe, Color Force', '2023-11-25 13:26:05', 1),
(5, 'FIVE NIGHTS AT FREDDY’S – O PESADELO SEM FIM', 'No Freddy Fazbear\'s Pizza, robôs animados fazem a festa das crianças durante o dia. Mas, quando chega a noite, eles se transformam em assassinos psicopatas.\r\n', './imagens_banco/fiveni.png', 'https://cinearaujo.com.br/filme/five-nights-at-freddys-o-pesadelo-sem-fim/', 'Blumhouse Productions, Striker Entertainment', '2023-11-25 13:55:45', 1),
(6, 'AS MARVELS', 'The Marvels é um filme estadunidense de super-herói de 2023 baseado nas personagens Carol Danvers, Kamala Khan e Monica Rambeau, da Marvel Comics. Produzido pelo Marvel Studios e distribuído pela Walt Disney Studios Motion Pictures, é uma sequência de Captain Marvel, uma continuação da série Ms.', './imagens_banco/ASMARVELS.png', 'https://cinearaujo.com.br/filme/as-marvels/', 'Marvel', '2023-11-25 14:09:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `noticia` longtext NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `resumo` longtext NOT NULL,
  `autor` varchar(200) NOT NULL,
  `DATACADASTRO` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `stat` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `titulo`, `noticia`, `imagem`, `resumo`, `autor`, `DATACADASTRO`, `stat`) VALUES
(11, 'Homem é preso suspeito de roubar cigarros de bar, moto de vendedora e dinheiro de clientes em Limeira', 'Um homem foi preso em flagrante suspeito de roubar clientes e uma vendedora em um bar no Jardim Ouro Verde em Limeira (SP) na tarde desta quinta-feira (23). De acordo com a Guarda Civil Municipal (GCM), o rapaz é investigado pelo roubo de uma motocicleta, um celular, um relógio, R$ 370 em dinheiro de diversas vítimas e 103 maços de cigarro do estabelecimento.\r\nTestemunhas descreveram características do suspeito às equipes da Guarda. A corporação iniciou as buscas e chegaram à casa do homem, que foi encontrado na residência.\r\n\r\nEle tinha arranhões pelo corpo que, segundo registro da GCM, ocorreram em decorrência da reação das vítimas. Ao ser questionado pela Guarda, o suspeito fugiu, mas foi detido.\r\nNa casa do suspeito, a Guarda recuperou os cigarros, celular e relógio das vítimas, que reconheceram o autor do roubo.\r\nA moto foi encontrada escondida em uma área verde nas proximidades do local do crime. O homem foi levado à 2ª Delegacia de Polícia.', './imagens_banco/imagem1.png', 'Homem é preso suspeito de roubar cigarros de bar, moto de vendedora e dinheiro de clientes em Limeira', 'Eduardo Salvador Itipão', '2023-11-29 00:23:56', 1),
(12, '10º Piracicaba Tattoo Fest e Rockaipira se unem em evento beneficente no Engenho Central', 'Dois eventos tradicionais de Piracicaba (SP) se uniram e vão realizar três dias de festa, a partir desta sexta-feira (24), no Engenho Central. Os anuais Piracicaba Tattoo Fest, que completa uma década de existência, e o Festival Rockaipira seguem também durante o sábado (25) e o domingo (26), todos os dias das 10h às 22h.\r\n\r\n\r\nA participação do evento ao público é gratuita, com doação de 1 quilo de alimento. As arrecadações serão doadas para o Fundo Social de Solidariedade de Piracicaba (Fussp). A entrada será pela Ponte do Morato e, para pedestres, pela Ponte Estaiada.\r\nNa programação dos três dias, estão presentes concurso de tatuagem e piercing, eleição da Miss Tattoo, batalha de rimas, pista de skate, food trucks para alimentação, espaço kids, feira mix de artesanato e feira de orquídeas. Além de muitas atrações musicais.\r\n\r\n', './imagens_banco/imagem2.png', 'Programação reúne concurso de tatuagem, batalha de rimas, pista de skate e apresentações de bandas autorais durante três dias, nesta sexta-feira (24), sábado (25) e domingo (26). Confira detalhes.\r\n', 'Eduardo Salvador Itipão', '2023-11-29 00:23:50', 1),
(13, 'Onda de calor dobra demanda por ar-condicionado e lojas chegam a ficar sem estoque em Piracicaba', 'As altas temperaturas registradas em outubro e novembro deste ano, com máximas que alcançaram até 42ºC em Piracicaba (SP), geraram um aumento nas demandas de empresas de refrigeração, que trabalham com vendas, instalação e manutenção de aparelhos de ar-condicionado na cidade. Houve casos em que a procura dobrou entre um mês e outro, as vendas cresceram 45% e lojas ficaram sem estoques do equipamento.\r\nO g1 conversou com diferentes empresas do setor, que relataram dificuldades de atender a agenda, com um tempo longo para realizar serviços como instalação mesmo com ampliação de equipe e telefones tocando o dia todo.\r\n\r\nGestor de uma empresa de refrigeração localizada no Bairro Alto, Claudio Camilli diz que, desde outubro, vem sentindo uma “alta demanda fora do normal”, que levou a aumento nas demandas de instalação, higienização e manutenção de aparelhos de ar-condicionado.\r\n\r\n“Em outubro e novembro de 2022, tínhamos três equipes, que realizavam cerca de três atendimentos por dia, totalizando nove, em média”, argumenta.\r\n\r\n“Ampliamos nosso quadro de funcionários em 2023, e nesse ano, contamos com cinco equipes, realizando, aproximadamente, cinco atendimentos diários cada, o que dá uma média de 25, um aumento de mais de 100%”, diz.\r\n\r\n“Mesmo com o aumento da equipe, se alguém entra em contato conosco hoje, só conseguimos atender daqui a 25 dias”, explica Claudio.', './imagens_banco/notic3.png', 'Reportagem do g1 percorreu empresas do setor, que relataram dificuldades de atender agenda, aumento nas vendas e demanda fora do normal, segundo lojistas. Veja dicas para obter maior desempenho em equipamento..\r\n', 'Eduardo Salvador Itipão', '2023-11-29 00:23:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `publisher` tinyint(1) NOT NULL DEFAULT 0,
  `moderator` tinyint(1) NOT NULL DEFAULT 0,
  `DATACADASTRO` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `nome`, `senha`, `publisher`, `moderator`, `DATACADASTRO`) VALUES
(1, 'admin@eep.br', 'Eduardo Salvador Itipão', 'admin', 1, 1, '2023-11-24 14:26:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classificados`
--
ALTER TABLE `classificados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classificados`
--
ALTER TABLE `classificados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
