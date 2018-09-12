-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Set-2018 às 18:46
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
  `vencimento` date NOT NULL,
  `id_Opp_Fab` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `oportunidade`
--

INSERT INTO `oportunidade` (`nome_Opp`, `id_Opp`, `descricao_Opp`, `status_Opp`, `fabricante`, `consultor_Opp`, `cliente_Opp`, `historico_Opp`, `vencimento`, `id_Opp_Fab`) VALUES
('teste2', 2, 'teste2', 'ativo', 'teste2', 'Andr?', 'HPE', 'Teste Teste teste testet t?ste ??o p?ul?o', '2018-09-12', '321456');

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
(803, 'cotar Sophos para andr? Cliente Prom?dica', 'Rrealizar a cota??o de 4 xg 105 para a paraty com margem de 0,8 e solicitar desconto de oportunidade', '2018-09-12', 'Filipe Nascimento');

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
-- Indexes for table `oportunidade`
--
ALTER TABLE `oportunidade`
  ADD PRIMARY KEY (`id_Opp`),
  ADD UNIQUE KEY `id_Opp` (`id_Opp`),
  ADD UNIQUE KEY `id_Opp_Fab` (`id_Opp_Fab`);

--
-- Indexes for table `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id_tarefas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oportunidade`
--
ALTER TABLE `oportunidade`
  MODIFY `id_Opp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id_tarefas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=804;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
