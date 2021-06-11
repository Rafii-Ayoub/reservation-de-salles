
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Base de données :  `projet_reservation`
--

-- --------------------------------------------------------

--
-- Structure de la table `atelier`
--

CREATE TABLE `atelier` (
  `id_salle` varchar(40) NOT NULL
) ;

--
-- Déchargement des données de la table `atelier`
--

INSERT INTO `atelier` (`id_salle`) VALUES
('Atelier electronique'),
('Atelier procedes de fabrication'),
('Laboratoire de chimie'),
('Laboratoire de metallurgie'),
('Laboratoire de plasturgie');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `CNE` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `tel` varchar(20) NOT NULL
);

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`CNE`, `nom`, `prenom`, `email`, `tel`) VALUES
('F149074176', 'ballouki', 'oussama', 'ballouki.oussama@ensam.ma', '060000000'),
('G134560623', 'bennani', 'ayoub', 'bennani.ayoub@ensam.ma', '0600000000'),
('J130288938', 'yamani', 'adil', 'yamani.adil@ensam.ma', '0600000000'),
('P100076313', 'ahmed', 'bekkari', 'ahmed.bekkari@ensam.com', '060000000');



-- --------------------------------------------------------

--
-- Structure de la table `reservation_atelier`
--

CREATE TABLE `reservation_atelier` (
  `num_reservation` int(10) NOT NULL,
  `CNE` varchar(20) NOT NULL,
  `nom_atelier` varchar(20) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_heure` time NOT NULL,
  `dure` int(2) NOT NULL,
  `etat` varchar(20) NOT NULL DEFAULT 'en cours'
);

--
-- Déchargement des données de la table `reservation_atelier`
--

INSERT INTO `reservation_atelier` (`num_reservation`, `CNE`, `nom_atelier`, `reservation_date`, `reservation_heure`, `dure`, `etat`) VALUES
(2, 'P100076313', 'atelier procedes', '2019-04-30', '10:00:00', 1, 'confirmer'),
(3, 'P100076313', 'Laboratoire de chimi', '2019-06-02', '00:00:00', 2, 'en cours');

-- --------------------------------------------------------

--
-- Structure de la table `reservation_salle`
--

CREATE TABLE `reservation_salle` (
  `num_reservation` int(11) NOT NULL,
  `CNE` varchar(20) NOT NULL,
  `reservation_heure` time NOT NULL,
  `reservation_date` date NOT NULL,
  `nom_salle` varchar(20) NOT NULL,
  `dure` int(11) NOT NULL
);

--
-- Déchargement des données de la table `reservation_salle`
--

INSERT INTO `reservation_salle` (`num_reservation`, `CNE`, `reservation_heure`, `reservation_date`, `nom_salle`, `dure`) VALUES
(1, 'P100076313', '09:00:00', '2021-05-02', 'salle 1-1', 2),
(3, 'P100076313', '08:00:00', '2021-05-01', 'salle 1-1', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reservation_salletp`
--

CREATE TABLE `reservation_salletp` (
  `num_reservation` int(11) NOT NULL,
  `CNE` varchar(20) NOT NULL,
  `nom_salletp` varchar(20) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_heure` time NOT NULL,
  `dure` int(11) NOT NULL,
  `etat` varchar(20) NOT NULL DEFAULT 'en cours'
) ;

-- --------------------------------------------------------

--
-- Structure de la table `reservation_t`
--

CREATE TABLE `reservation_t` (
  `num_reservation` int(11) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_heure` time NOT NULL,
  `nom_t` varchar(20) NOT NULL,
  `CNE` varchar(20) NOT NULL,
  `dure` int(11) NOT NULL
) ;

--
-- Déchargement des données de la table `reservation_t`
--

INSERT INTO `reservation_t` (`num_reservation`, `reservation_date`, `reservation_heure`, `nom_t`, `CNE`, `dure`) VALUES
(1, '2021-05-02', '14:00:00', 'volleyball', 'R149072038', 1),
(2, '2021-05-02', '09:00:00', 'basket', 'P100076313', 2);

-- --------------------------------------------------------

--
-- Structure de la table `reserversalleconferance`
--

CREATE TABLE `reserversalleconferance` (
  `num_reservation` int(11) NOT NULL,
  `CNE` varchar(20) NOT NULL,
  `nom_salleConferance` varchar(20) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_heured` date NOT NULL,
  `reservation_heuref` date NOT NULL,
  `etat` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id_salle` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id_salle`) VALUES
('Amphie1'),
('Amphie2'),
('Amphie3'),
('Amphie4'),
('salle 1-1'),
('salle 1-2'),
('salle 1-3'),
('salle 1-4'),
('salle 1-5');

-- --------------------------------------------------------

--
-- Structure de la table `salletp`
--

CREATE TABLE `salletp` (
  `nom_salletp` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salletp`
--

INSERT INTO `salletp` (`nom_salletp`) VALUES
('Laboratoire automatismes Et Supervision Industrielle'),
('Laboratoire De mecanique du solide'),
('Laboratoire De Metrologie'),
('Laboratoire Des Systemes d\'Information Integres'),
('Laboratoire electrotechnique Et Energies Renouvelables');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `atelier`
--
ALTER TABLE `atelier`
  ADD PRIMARY KEY (`id_salle`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`CNE`);

--
-- Index pour la table `reservation_atelier`
--
ALTER TABLE `reservation_atelier`
  ADD PRIMARY KEY (`num_reservation`);

--
-- Index pour la table `reservation_salle`
--
ALTER TABLE `reservation_salle`
  ADD PRIMARY KEY (`num_reservation`);

--
-- Index pour la table `reservation_salletp`
--
ALTER TABLE `reservation_salletp`
  ADD PRIMARY KEY (`num_reservation`);

--
-- Index pour la table `reservation_t`
--
ALTER TABLE `reservation_t`
  ADD PRIMARY KEY (`num_reservation`);

--
-- Index pour la table `reserversalleconferance`
--
ALTER TABLE `reserversalleconferance`
  ADD PRIMARY KEY (`num_reservation`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id_salle`);

--
-- Index pour la table `salletp`
--
ALTER TABLE `salletp`
  ADD PRIMARY KEY (`nom_salletp`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservation_atelier`
--
ALTER TABLE `reservation_atelier`
  MODIFY `num_reservation` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `reservation_salle`
--
ALTER TABLE `reservation_salle`
  MODIFY `num_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `reservation_salletp`
--
ALTER TABLE `reservation_salletp`
  MODIFY `num_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `reservation_t`
--
ALTER TABLE `reservation_t`
  MODIFY `num_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `reserversalleconferance`
--
ALTER TABLE `reserversalleconferance`
  MODIFY `num_reservation` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

