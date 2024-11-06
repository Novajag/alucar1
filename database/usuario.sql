

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agendas`
--

CREATE TABLE `agendas` (
  `idusuario` varchar(100) NOT NULL,
  `nomeusuario` varchar(100) NOT NULL,
  `idcarro` varchar(100) NOT NULL,
  `dia` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `agendas`
--

INSERT INTO `agendas` (`idusuario`, `nomeusuario`, `idcarro`, `dia`) VALUES
('1', 'jorge alfonso', '2', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carros`
--

CREATE TABLE `carros` (
  `marca` varchar(100) NOT NULL,
  `carroId` int(11) NOT NULL,
  `nomeCarros` varchar(100) NOT NULL,
  `preço` varchar(10000) NOT NULL,
  `puntos` int(5) NOT NULL,
  `img` mediumtext NOT NULL,
  `img1` varchar(1000) NOT NULL,
  `img2` varchar(1000) NOT NULL,
  `kilo` varchar(1000) NOT NULL,
  `velocidade` varchar(1000) NOT NULL,
  `força` varchar(1000) NOT NULL,
  `estado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carros`
--

INSERT INTO `carros` (`marca`, `carroId`, `nomeCarros`, `preço`, `puntos`, `img`, `img1`, `img2`, `kilo`, `velocidade`, `força`, `estado`) VALUES
('chevrolet', 1, 'Toyota Corolla (2022)', 'R$ 90,000', 0, 'https://revistacarro.com.br/wp-content/uploads/2019/12/Toyota-Corolla-XEi_4.jpg', 'https://revistacarro.com.br/wp-content/uploads/2021/02/01-Corolla-2022-Interior-scaled-1.jpg', 'https://revistacarro.com.br/wp-content/uploads/2019/12/Toyota-Corolla-XEi_1.jpg', '', '180 km/h', '130 HP', 'novo'),
('Honda', 2, 'Honda Civic (2023)', 'R$ 95,000', 0, 'https://cdn.motor1.com/images/mgl/W81RXg/s2/honda-civic-sedan-e-hev-2023.webp', 'https://dicas.olx.com.br/wp-content/uploads/2023/06/honda-civic-e-hev-1024x576.webp', 'https://cdn.motor1.com/images/mgl/9mZ1Xg/s4/honda-civic-sedan-e-hev-2023.webp', '', '200 km/h', '150 HP', 'usado'),
('Ford', 3, 'Ford Mustang (2022', 'R$ 220,000', 0, 'https://revistacarro.com.br/wp-content/uploads/2022/04/Mustang-Mach-1-2022_4.jpg', 'https://revistacarro.com.br/wp-content/uploads/2021/04/Mustang-Mach-1_7.jpg', 'https://img.autobytel.com/chrome/colormatched_02/white/640/cc_2022foc21_02_640/cc_2022foc210066_02_640_g1.jpg', '', '250 km/h', '310 HP', 'novo'),
('chevrolet', 6, 'Chevrolet Camaro (2023)', 'R$ 210,000', 0, 'https://hips.hearstapps.com/hmg-prod/images/2019-chevrolet-camaro-2-0t-1le-6mt-106-1539790974.jpg?crop=0.675xw:0.620xh;0.252xw,0.335xh&resize=1200:*', '', 'https://bocamafrapremium.com.br/wp-content/uploads/2024/05/b6f34575ab644363b11af42c8793550b_1698777083701.jpg', '', '240 km/h', ' 275 HP', 'novo'),
('BMW', 8, 'BMW Serie 3 (2022)', 'R$ 150,000', 0, 'https://img1.icarros.com/dbimg/imgadicionalanuncio/5/363516707_1.webp', 'https://media.gazetadopovo.com.br/2019/02/7054866b4dd78e36cd287f6190d09ce1-gpMedium.jpg', 'https://media.gazetadopovo.com.br/2019/02/b10b28655cdf648a3f8d049c7ec95b43-gpMedium.jpg', '', '220 km/h', '190 HP', 'novo'),
('Mercedes-Benz ', 9, 'Mercedes-Benz Clase C (2023)', 'R$ 160,000', 0, 'https://www.mercedes-benzautoclasse.com/wp-content/uploads/2023/10/01e9902b-2956-4b39-9300-458fc3c9b031_LHDMercedes-BenzClaseCgrisexterior-04-1024x576.jpg', 'https://acroadtrip.blob.core.windows.net/catalogo-imagenes/m/RT_V_e4109132de26436da739fd86d5b715d0.jpg', 'https://production.autoforce.com/uploads/picture/image/177625743/main_webp_comprar-classe-c-sedan-2023_a169419add.jpg.webp', '', '230 km/h', '200 HP', 'novo'),
('Audi', 13, 'Audi A4 (2022)', 'R$ 145,000', 0, 'https://revistacarro.com.br/wp-content/uploads/2022/03/Audi-A4-Sedan-2022.jpg', 'https://www.webmotors.com.br/wp-content/uploads/2022/03/15165020/Audi-A4-3.jpg', 'https://www.webmotors.com.br/wp-content/uploads/2022/03/15164948/Audi-A4-2.jpg', '', '215 km/h', '180 HP', 'novo'),
('Volkswagen', 14, 'Volkswagen Golf (2023)', 'R$ 85,000', 0, 'https://cdn.motor1.com/images/mgl/W8G1or/s1/volkswagen-golf-black-edition.jpg', 'https://cdn.motor1.com/images/mgl/0eN47j/s1/volkswagen-golf-black-edition.jpg', 'https://es.motor1.com/photos/863801/volkswagen-golf-black-edition/#7449900_volkswagen-golf-black-edition', '', '195 km/h', '150 HP', 'novo'),
('Nissan', 15, 'Nissan Altima (2022) ', 'R$ 100,000', 0, 'https://www.elcarrocolombiano.com/wp-content/uploads/2021/11/20211911-PORTADA-Nissan-Altima-Midnight-Edition-1.jpg', 'https://www.elcarrocolombiano.com/wp-content/uploads/2021/11/20212011-Nissan-Altima-Midnight-Edition-1-750x518.jpg', 'https://www.elcarrocolombiano.com/wp-content/uploads/2021/11/20212011-Nissan-Altima-Midnight-Edition-750x518.jpg', '', ' 210 km/h', '180 HP', 'novo'),
('Hyundai', 16, 'Hyundai Elantra (2023)', 'R$ 80,000', 0, 'https://s7d1.scene7.com/is/image/hyundai/2022-elantra-cn7-n-0242-without-talent:16-9?wid=1440&hei=810&qlt=85,0&fmt=webp', 'https://s7d1.scene7.com/is/image/hyundai/2022-elantra-cn7-0200-vlp:16-9?wid=1440&hei=810&qlt=85,0&fmt=webp', 'https://s7d1.scene7.com/is/image/hyundai/2022-elantra-cn7-0196-vlp:16-9?wid=1440&hei=810&qlt=85,0&fmt=webp', '', '190 km/h', '147 HP', 'novo'),
('Kia', 17, 'Kia Optima (2022)', 'R$ 95,000', 0, 'https://acnews.blob.core.windows.net/imgnews/extralarge/NAZ_3cb1db7692bd4879a4bd077caa46474b.jpg', 'https://acnews.blob.core.windows.net/imgnews/paragraph/NPAZ_3e9646eb73c743bea74166ccac758de1.jpg', 'https://acnews.blob.core.windows.net/imgnews/paragraph/NPAZ_27bc2f35cf0c4044b8b97b933a85f8f3.jpg', '', '200 km/h', '178 HP,', 'nova'),
('Subaru', 18, 'Subaru Impreza (2023)', 'R$ 90,000', 0, 'https://cdn.motor1.com/images/mgl/1Zpo1q/s1/subaru-impreza-2024.jpg', 'https://cdn.motor1.com/images/mgl/KbnQKb/s1/subaru-impreza-2023-usa.jpg', 'https://cdn.motor1.com/images/mgl/bgzxGn/s1/subaru-impreza-2024.jpg', '', '205 km/h', '152 HP', 'novo'),
('Mazda', 19, 'Mazda3 (2022', 'R$ 85,000', 0, 'https://edgecast-img.yahoo.net/mysterio/api/9EFCF11B21B20570B4DBFAB2DA7BFBFC4DEBC05CB3F6D9602DE7A4C757500C07/autoblog/resizefill_w1200_h675;quality_80;format_webp;cc_31536000;/https://s.aolcdn.com/commerce/autodata/images/USD10MAC172B021001.jpg', 'https://edgecast-img.yahoo.net/mysterio/api/79A581AA77E3029FF97A57B15C7573D7501A6967432021DE1CD46DA97946E464/autoblog/resizefill_w1200_h675;quality_80;format_webp;cc_31536000;/https://s.aolcdn.com/commerce/autodata/images/USD10MAC172B021005.jpg', 'https://edgecast-img.yahoo.net/mysterio/api/9B0A53892C28753ED0FBDD74BAC2D797090FFCAE931B515E11D475E473C07A87/autoblog/resizefill_w1200_h675;quality_80;format_webp;cc_31536000;/https://s.aolcdn.com/commerce/autodata/images/USD10MAC172B021013.jpg', '', '195 km/h', '155 HP', 'novo'),
('Lexus', 20, 'Lexus IS (2023)', 'R$ 180,000', 0, 'https://www.motortrend.com/uploads/2023/01/1-2023-Lexus-IS350-F-Sport.jpg?fit=around%7C875:492', 'https://www.motortrend.com/uploads/2023/01/4-2023-Lexus-IS350-F-Sport.jpg?fit=around%7C875:492', 'https://www.motortrend.com/uploads/2023/01/3-2023-Lexus-IS350-F-Sport.jpg?fit=around%7C875:492', '', '230 km/h', '241 HP', 'novo'),
('infiniti', 21, 'Infiniti Q50 (2022)', 'R$ 190,000', 0, 'https://cdn.motor1.com/images/mgl/g4AwZN/s2/2023-infiniti-q50-red-sport-400-black-opal-edition.webp', 'https://cdn.motor1.com/images/mgl/nAyrOj/s1/2023-infiniti-q50-red-sport-400-black-opal-edition.jpg', 'https://cdn.motor1.com/images/mgl/E6wlKB/s1/2023-infiniti-q50-red-sport-400-black-opal-edition.jpg', '', ' 240 km/h', '300 HP,', 'novo'),
('tesla', 22, 'Tesla Model 3 (2023)', 'R$ 250,000', 0, 'https://phantom-expansion.unidadeditorial.es/6796e692ca852f1c42dd355e484af9ca/resize/720/f/webp/assets/multimedia/imagenes/2023/01/13/16736022101288.jpg', 'https://www.greendrive-accessories.com/blog/wp-content/uploads/2023/09/Tesla-Model-3-Uplift-dashboard-768x434.jpg', 'https://phantom-expansion.unidadeditorial.es/aa57ff246d7fd598d9d10a250e68f564/resize/990/f/webp/assets/multimedia/imagenes/2023/01/13/16736022128450.jpg', '', '225 km/h', '258 HP', 'novo'),
('Dodge', 23, 'Dodge Charger (2022)', 'R$ 210,000', 0, 'https://www.perfectautocollection.com/contentimages/contentimages/img_2943984157.jpg', 'https://www.perfectautocollection.com/contentimages/contentimages/img_3585732989.jpg', 'https://www.perfectautocollection.com/imagetag/2593/20/f/Used-2020-Dodge-Charger-Scat-Pack-1689966773.jpg', '', '270 km/h', '292 HP', 'novo\r\n'),
('Chrysler', 24, 'Chrysler 300 (2023)', 'R$ 200,000', 0, 'https://www.planetcarsz.com/img/noticias/2022/09/chrysler-300c-2023-01-20220915081518-1280x925.jpg', 'https://www.planetcarsz.com/img/carros/galeria/2022/09/chrysler-300c-2023-05-20220915081347-1280x925.jpg', 'https://www.planetcarsz.com/noticias-de-carros/chrysler-300c-2023-o-sedan-se-despede-com-um-motor-v8-de-492-cv', '', '250 km/h', '292 HP', 'novo'),
('Porsche', 25, 'Porsche 911 (2023)', 'R$ 700,000', 0, 'https://autosdeprimera.com/wp-content/uploads/2023/08/porsche-911-st-a.jpg', 'https://autosdeprimera.com/wp-content/uploads/2023/08/porsche-911-st-b.jpg', 'https://autosdeprimera.com/wp-content/uploads/2023/08/porsche-911-st-c.jpg', '', ' 300 km/h', '370 HP', 'novo'),
('ferrari', 26, 'Ferrari 488 (2022)', 'R$1,500,000', 0, 'https://quatrorodas.abril.com.br/wp-content/uploads/2018/02/ferrari_488_pista.jpg?quality=70&strip=info&w=1024&crop=1', 'https://quatrorodas.abril.com.br/wp-content/uploads/2018/02/ferrari_488_pista_1.jpg?quality=70&strip=info&w=1024&crop=1', 'https://quatrorodas.abril.com.br/wp-content/uploads/2018/02/ferrari_488_pista_48.jpg?quality=70&strip=info&w=1024&crop=1', '', '330 km/h', '661 HP', 'novo'),
('lamborghini', 27, 'Lamborghini Huracán (2023)', 'R$ 2,000,000', 0, 'https://www.lamborghinigoldcoast.com/imagetag/10874/2/l/New-2023-Lamborghini-Huracan-Tecnica-1689186022.jpg', 'https://prod.pictures.autoscout24.net/listing-images/7b5fa3a5-1345-4f9f-bf58-9b6a250d66a4_4981a380-3618-4b32-a20a-d371d090c533.jpg/720x540.webp', 'https://prod.pictures.autoscout24.net/listing-images/7b5fa3a5-1345-4f9f-bf58-9b6a250d66a4_4244446d-dcbc-40b7-a112-d50a60aee591.jpg/720x540.webp', '', '325 km/h', '610 HP', 'novo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `j`
--

CREATE TABLE `j` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cpf` bigint(13) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `produto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `j`
--

INSERT INTO `j` (`id`, `nome`, `cpf`, `senha`, `produto`) VALUES
(1, 'jorge alfonso', 71195976208, '123', 1),
(31, 'antonio', 71167217, '123', 1),
(32, 'antonio', 71195967217, '123', 1),
(34, 'andrew', 71195967217, 'jkl', 1),
(35, 'devora', 71828589160, '123', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntos`
--

CREATE TABLE `puntos` (
  `carroId` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `puntos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `puntos`
--

INSERT INTO `puntos` (`carroId`, `nome`, `puntos`) VALUES
(13, 'jorge alfonso', '4'),
(13, 'jorge alfonso', '3'),
(13, 'jorge alfonso', '1'),
(13, 'jorge alfonso', '5'),
(16, 'jorge alfonso', '5'),
(16, 'jorge alfonso', '4'),
(16, 'jorge alfonso', '5'),
(9, 'jorge alfonso', '5'),
(2, 'jorge alfonso', '5'),
(2, 'jorge alfonso', '1'),
(2, 'jorge alfonso', '2'),
(2, 'jorge alfonso', '2'),
(2, 'jorge alfonso', '1'),
(2, 'jorge alfonso', '2'),
(2, 'jorge alfonso', '1'),
(2, 'jorge alfonso', '2'),
(2, 'jorge alfonso', '1'),
(1, 'jorge alfonso', '5'),
(2, 'jorge alfonso', '1'),
(2, 'jorge alfonso', '5');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`carroId`) USING BTREE;

--
-- Indices de la tabla `j`
--
ALTER TABLE `j`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carros`
--
ALTER TABLE `carros`
  MODIFY `carroId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `j`
--
ALTER TABLE `j`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
