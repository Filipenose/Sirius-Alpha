-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Set-2018 às 20:01
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basedetestes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `oportunidade`
--

CREATE TABLE `oportunidade` (
  `nome_Opp` varchar(100) NOT NULL,
  `id_Opp` int(11) NOT NULL,
  `descricao_Opp` varchar(500) NOT NULL,
  `status_Opp` varchar(200) NOT NULL,
  `fabricante` varchar(50) NOT NULL,
  `consultor_Opp` varchar(50) NOT NULL,
  `cliente_Opp` varchar(50) NOT NULL,
  `historico_Opp` varchar(500) NOT NULL,
  `vencimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `oportunidade`
--

INSERT INTO `oportunidade` (`nome_Opp`, `id_Opp`, `descricao_Opp`, `status_Opp`, `fabricante`, `consultor_Opp`, `cliente_Opp`, `historico_Opp`, `vencimento`) VALUES
('Teste', 1, 'experimentar as diversidades culturais, aprendem a interagir em grupos e passam a ser produtores do próprio conhecimento.\r\n\r\n\r\nCom a missão de oferecer um espaço acolhedor e preparar as crianças para este processo inicial de aprendizagem, a escola estimula a criação de autonomia, a leitura, a escrita e a capacidade de interpretação dos alunos por meio de atividades lúdicas e educativas.\r\n\r\n\r\nPor valorizar estes princípios e acreditar que a educação é a base para um futuro promissor, o Educa Mais', 'Ativo', 'HPE', 'Filipe', 'São Rafael', 'Eu tava com meus mano lá na minha quebrada, Chegou o Vanderlei e veio dar idéia errada Ele virou pra mim e fez a proposição:Orgia de traveco com scat de montão.', '0000-00-00'),
('Projeto de backup Cardio', 2, 'lorem ipsumasdasdasdasdasdjhgajsd ajsdghjasdghasdhjdg', 'jaSHDGAJSDGHADHGAS JASHDGAJSHDkjashdkajsdhaksjdhaksjda', 'Arcserve', 'André luiz da silva nery', 'Cardio pulmonar', 'asdasdhjghjghasghghasdghghghasd', '2018-08-31'),
('Teste', 3, 'TEste', 'Teste', 'TEste', 'André', 'Teste', 'Teste', '2018-09-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `id_tarefas` int(11) NOT NULL,
  `nome_tarefa` varchar(100) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `data_criacao` date NOT NULL,
  `user_criador` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tarefas`
--

INSERT INTO `tarefas` (`id_tarefas`, `nome_tarefa`, `descricao`, `data_criacao`, `user_criador`) VALUES
(1, 'cotação sophos central', 'cotar e enviar para andré 1 e 3 anos', '2018-08-20', 'filipe nascimento'),
(2, 'mapeamento sophos andré', 'Efetuar o mapeamento de oportunidade sophos para andré. 6 endpoint intercpt x  e sophos central.', '2018-08-29', 'Fredy Dias'),
(3, 'Mapear dell andré', 'Mapear Dell. 6x R540 em nome da cardio pulmonar', '2018-08-29', 'Filipe Nascimento');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(60) NOT NULL,
  `email_usuario` varchar(60) NOT NULL,
  `ativo` varchar(200) NOT NULL,
  `senha_usuario` int(11) NOT NULL,
  `cod_perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `email_usuario`, `ativo`, `senha_usuario`, `cod_perfil`) VALUES
('Fred Dias', 'fred@camadaquatro.com.br', 'Consultor de Pre-vendas', 123456, 2),
('Filipe Barbosa Nascimento', 'filipebarbosanasc@gmail.com', 'asdaushdgjasd', 123456, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id_tarefas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
