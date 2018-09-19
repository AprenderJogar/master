
CREATE TABLE `instituicao` (
  `ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `nomeInstituicao` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `jardim` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `jogodamemoria` (
  `ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `usuario` varchar(40) DEFAULT NULL,
  `horas` int(50) DEFAULT NULL,
  `minutos` int(50) DEFAULT NULL,
  `segundos` int(50) DEFAULT NULL,
  `centesimas` int(40) DEFAULT NULL,
  `pontos` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `jogodassilabas` (
  `ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `usuario` varchar(40) DEFAULT NULL,
  `horas` int(50) DEFAULT NULL,
  `minutos` int(50) DEFAULT NULL,
  `segundos` int(50) DEFAULT NULL,
  `centesimas` int(40) DEFAULT NULL,
  `pontos` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `usuarios` (
  `ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `login` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `cpf` varchar(30) DEFAULT NULL,
  `campo` varchar(30) DEFAULT NULL,
  `instituicao` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `jogodamemoria`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `jogodassilabas`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `instituicao`
  MODIFY `ID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

ALTER TABLE `jogodamemoria`
  MODIFY `ID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `jogodassilabas`
  MODIFY `ID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `usuarios`
  MODIFY `ID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

