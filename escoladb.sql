-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Dez-2022 às 00:40
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escoladb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id_aluno` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `cpf` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id_aluno`, `nome`, `email`, `senha`, `cpf`) VALUES
(1, 'aluno', 'aluno@aluno.com', 'e10adc3949ba59abbe56e057f20f883e', '11111'),
(4, 'Jupira Candonga', 'jup@jup.com', 'e10adc3949ba59abbe56e057f20f883e', 'c4ca4238a0b9238'),
(6, 'Joao Arregão', 'jo@jo.com', 'c4ca4238a0b923820dcc509a6f75849b', 'c4ca4238a0b9238'),
(10, 'Jupira Candonga Ultima', 'jotod@joto.com', 'c4ca4238a0b923820dcc509a6f75849b', 'c4ca4238a0b9238'),
(16, 'Junior', 'jun@jun.com', 'c4ca4238a0b923820dcc509a6f75849b', 'c4ca4238a0b9238'),
(17, 'Pedro', 'p@p.com', 'c4ca4238a0b923820dcc509a6f75849b', 'c4ca4238a0b9238'),
(18, 'Lucas sumido', 'lucas@l.com', 'c4ca4238a0b923820dcc509a6f75849b', 'c4ca4238a0b9238'),
(20, 'Jupira Candonga', 'jun2022@jun.com', 'c4ca4238a0b923820dcc509a6f75849b', 'c4ca4238a0b9238'),
(23, 'zxcczcxzc', 'sccas@fsdf', 'c4ca4238a0b923820dcc509a6f75849b', 'c4ca4238a0b9238'),
(29, 'Pedro Henrique', 'pedro@henrique.com', 'c4ca4238a0b923820dcc509a6f75849b', 'c4ca4238a0b9238'),
(30, 'texte12', 'texte1@t.com', 'c4ca4238a0b923820dcc509a6f75849b', '15616549874897'),
(31, 'texte12', 'texte1@texte1.com', 'c4ca4238a0b923820dcc509a6f75849b', '54365435638'),
(43, 'Rodrigo Oliveira', 'rodrigo.oliveira@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '3616546854897'),
(48, 'senac teste', 'senac@texte1.com', 'c4ca4238a0b923820dcc509a6f75849b', '212134567879890'),
(51, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id_notas` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `id_disciplina` int(11) NOT NULL,
  `período` int(20) NOT NULL,
  `nota` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`id_notas`, `id_aluno`, `id_disciplina`, `período`, `nota`) VALUES
(1, 1, 6, 1, 10),
(2, 1, 6, 2, 10),
(3, 1, 6, 3, 10),
(4, 1, 6, 4, 5),
(5, 1, 6, 4, 1),
(6, 4, 6, 1, 0),
(7, 4, 6, 2, 9),
(8, 4, 6, 3, 10),
(9, 4, 6, 4, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `id_disciplina` int(11) NOT NULL,
  `disciplina` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id_disciplina`, `disciplina`) VALUES
(6, 'Excel Avançado'),
(5, 'Excel Básico'),
(9, 'Excel com BI'),
(2, 'Java'),
(3, 'JavaScript'),
(8, 'PHP'),
(1, 'Python'),
(7, 'Técnico em Informática');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id_endereco` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `rua` varchar(40) NOT NULL,
  `numero` int(11) DEFAULT 0,
  `complemento` varchar(20) DEFAULT NULL,
  `bairro` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `ibge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id_endereco`, `id_aluno`, `cep`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `ibge`) VALUES
(1, 27, '24725270', 'Estrada São Pedro', 11, 'complemento', 'Vista Alegre', 'São Gonçalo', 'RJ', 3304904),
(2, 28, '24725270', 'Estrada São Pedro', 0, '', 'Vista Alegre', 'São Gonçalo', 'RJ', 3304904),
(3, 29, '24933160', 'Rua Cento e Dezoito', 18, 'Quadra 513 Lote 18', 'Jardim Atlântico Leste (Itaipuaçu)', 'Maricá', 'RJ', 3302700),
(4, 6, '24725270', 'Estrada São Pedro', 500, 'casa 5', 'Vista Alegre', 'São Gonçalo', 'RJ', 3304904),
(5, 30, '25946100', 'Rua Conceição', 100, 'fundos', 'Centro', 'Guapimirim', 'RJ', 3301850),
(6, 33, '24410400', 'Travessa São João', 1000, '', 'Tenente Jardim', 'São Gonçalo', 'RJ', 3304904),
(11, 43, '25946100', 'Rua Conceição', 1000, 'apt', 'Centro', 'Guapimirim', 'RJ', 3301850),
(12, 1, '25946100', 'Rua Conceição', 100, 'fundos', 'Centro', 'Guapimirim', 'RJ', 3301850),
(13, 1, '25946100', 'Rua Conceição', 1000, 'fundos', 'Centro', 'Guapimirim', 'RJ', 3301850),
(14, 4, '25946100', 'Rua Conceição', 1000, 'fundos', 'Centro', 'Guapimirim', 'RJ', 3301850),
(15, 1, '24410400', 'Travessa São João', 1000, 'apt', 'Tenente Jardim', 'São Gonçalo', 'RJ', 3304904),
(17, 4, '25946100', 'Rua Conceição', 1000, 'fundos', 'Centro', 'Guapimirim', 'RJ', 3301850),
(18, 49, '', '', 0, '', '', '', '', 0),
(19, 51, '', '', 0, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `perfil` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nome`, `email`, `senha`, `cpf`, `perfil`) VALUES
(1, 'adm', 'adm@adm.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 2),
(3, 'Jupira Candonga da Luz', 'jup2@jup.com', '.54.44.56.564', 'c4ca4238a0b9238', 1),
(4, 'Rodrigo', 'rg@r.com', 'c4ca4238a0b923820dcc509a6f75849b', '123.456.789-00', 1),
(5, 'Rodrigo Gonzaga', 'rodrigo@gonzaga.com', 'd41d8cd98f00b204e9800998ecf8427e', '564657485456', 2),
(6, 'Gonzaga', 'gonzaga@r.com', 'd41d8cd98f00b204e9800998ecf8427e', '545678954859648', 1),
(7, 'texte13', 'texte13@13.com', 'c4ca4238a0b923820dcc509a6f75849b', '32543254354', 2),
(8, 'SENAC', 'senac@texte.com', 'e10adc3949ba59abbe56e057f20f883e', '564687497', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id_aluno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id_notas`),
  ADD KEY `id_aluno` (`id_aluno`),
  ADD KEY `id_disciplina` (`id_disciplina`);

--
-- Índices para tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`id_disciplina`),
  ADD UNIQUE KEY `disciplina` (`disciplina`);

--
-- Índices para tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id_endereco`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id_notas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `id_disciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD CONSTRAINT `id_aluno` FOREIGN KEY (`id_aluno`) REFERENCES `alunos` (`id_aluno`),
  ADD CONSTRAINT `id_disciplina` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplinas` (`id_disciplina`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
