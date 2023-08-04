USE miranda;
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `roomID` int(11) DEFAULT NULL,
  `userName` varchar(10) DEFAULT NULL,
  `orderDate` datetime DEFAULT NULL,
  `checkIn` datetime DEFAULT NULL,
  `checkOut` datetime DEFAULT NULL,
  `specialRequest` varchar(255) DEFAULT NULL,
  `roomType` enum('Single','Double','Suite','Suite Deluxe') DEFAULT NULL,
  `status` enum('Check In','Check Out','In Progress') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `userName` varchar(20) DEFAULT NULL,
  `userEmail` varchar(40) DEFAULT NULL,
  `userPhone` varchar(15) DEFAULT NULL,
  `messageSubject` varchar(50) DEFAULT NULL,
  `messageBody` text DEFAULT NULL,
  `archived` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contact`
--

INSERT INTO `contact` (`id`, `date`, `userName`, `userEmail`, `userPhone`, `messageSubject`, `messageBody`, `archived`) VALUES
(17, '2023-07-31', 'Usuario 1', 'usuario1@example.com', '123456789', 'Consulta 1', 'Mensaje de la consulta 1', 0),
(18, '2023-07-31', 'Usuario 2', 'usuario2@example.com', '987654321', 'Consulta 2', 'Mensaje de la consulta 2', 0),
(19, '2023-07-31', 'Usuario 3', 'usuario3@example.com', '555555555', 'Consulta 3', 'Mensaje de la consulta 3', 1),
(20, '2023-07-31', 'Usuario 4', 'usuario4@example.com', '111111111', 'Consulta 4', 'Mensaje de la consulta 4', 1),
(21, '2023-07-31', 'Usuario 5', 'usuario5@example.com', '222222222', 'Consulta 5', 'Mensaje de la consulta 5', 0),
(22, '2023-08-02', 'dfgash', 'mail@mail.com', '66666666666', 'prueba', 'PRUEBA DE POST', 0),
(23, '2023-08-02', 'dfgash', 'mail@mail.com', '66666666666', 'prueba', 'PRUEBA DE POST', 0),
(24, '2023-08-02', 'david', 'mail@mail.com', '666666666', 'prueba', 'PRUEBA DE POST', 0),
(25, '2023-08-02', 'david', 'mail@mail.com', '666666666', 'prueba', 'PRUEBA DE POST', 0),
(26, '2023-08-02', 'Elena', 'mail@mail.com', '666666666', 'Hola', 'HOLA CARACOLA', 0),
(27, '2023-08-02', 'Elena', 'mail@mail.com', '666666666', 'Hola', 'HOLA CARACOLA', 0),
(28, '2023-08-02', 'Elena', 'mail@mail.com', '666666666', 'Hola', 'HOLA CARACOLA', 0),
(29, '2023-08-02', 'Elena', 'mail@mail.com', '666666666', 'Hola', 'HOLA CARACOLA', 0),
(30, '2023-08-02', 'Elena', 'mail@mail.com', '666666666', 'Hola', 'HOLA CARACOLA', 0),
(31, '2023-08-02', 'Elena', 'mail@mail.com', '666666666', 'Hola', 'HOLA CARACOLA', 0),
(32, '2023-08-04', 'davi8d', 'afdsgrg@mail.com', '666666666', 'preuba en directo', 'a ver si funciona', 0),
(33, '2023-08-04', 'egsgas', 'madrid@mail.com', '6754856954', 'safdafd', 'probando alerta', 0),
(34, '2023-08-04', 'David Cuadrillero', 'davidcuadrillerosaura@gmail.com', '687813350', 'prueba', 'probando alerta 2', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_number` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photoTwo` varchar(255) DEFAULT NULL,
  `photoThree` varchar(255) DEFAULT NULL,
  `photoFour` varchar(255) DEFAULT NULL,
  `photoFive` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `discountPercent` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `cancellationPolicy` text DEFAULT NULL,
  `bed_type` varchar(50) DEFAULT NULL,
  `room_facilities` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`room_facilities`)),
  `room_rate` int(11) DEFAULT NULL,
  `room_offer` int(11) DEFAULT NULL,
  `room_status` enum('Available','Booked') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rooms`
--

INSERT INTO `rooms` (`id`, `room_number`, `photo`, `photoTwo`, `photoThree`, `photoFour`, `photoFive`, `description`, `discountPercent`, `discount`, `cancellationPolicy`, `bed_type`, `room_facilities`, `room_rate`, `room_offer`, `room_status`) VALUES
(13, 101, 'https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0MzQxOTR8MHwxfHNlYXJjaHwyfHxyb29tfGVufDB8fHx8MTY5MDkzMDQxNHww&ixlib=rb-4.0.3&q=80&w=1080', 'photo2.jpg', 'photo3.jpg', 'photo4.jpg', 'photo5.jpg', 'Habitación individual', 0, 0, 'Política de cancelación de habitación individual', 'Individual', '{\"wifi\": true, \"tv\": true}', 100, NULL, 'Available'),
(14, 102, 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0MzQxOTR8MHwxfHNlYXJjaHwxfHxob3RlbCUyMHJvb218ZW58MHx8fHwxNjkwOTMwNDU3fDA&ixlib=rb-4.0.3&q=80&w=1080', 'photo2.jpg', 'photo3.jpg', 'photo4.jpg', 'photo5.jpg', 'Habitación doble', 10, 5, 'Política de cancelación de habitación doble', 'Doble', '{\"wifi\": true, \"tv\": true, \"balcony\": true}', 150, NULL, 'Available'),
(15, 103, 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0MzQxOTR8MHwxfHNlYXJjaHw1fHxob3RlbCUyMHJvb218ZW58MHx8fHwxNjkwOTMwNDU3fDA&ixlib=rb-4.0.3&q=80&w=1080', 'photo2.jpg', 'photo3.jpg', 'photo4.jpg', 'photo5.jpg', 'Suite', 20, 10, 'Política de cancelación de suite', 'Suite', '{\"wifi\": true, \"tv\": true, \"balcony\": true, \"kitchenette\": true}', 200, NULL, 'Available'),
(16, 104, 'https://images.unsplash.com/photo-1590490360182-c33d57733427?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0MzQxOTR8MHwxfHNlYXJjaHw5fHxob3RlbCUyMHJvb218ZW58MHx8fHwxNjkwOTMwNDU3fDA&ixlib=rb-4.0.3&q=80&w=1080', 'photo2.jpg', 'photo3.jpg', 'photo4.jpg', 'photo5.jpg', 'Suite Deluxe', 30, 15, 'Política de cancelación de suite deluxe', 'Suite Deluxe', '{\"wifi\": true, \"tv\": true, \"balcony\": true, \"kitchenette\": true, \"jacuzzi\": true}', 250, NULL, 'Available'),
(17, 105, 'https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0MzQxOTR8MHwxfHNlYXJjaHwyfHxyb29tfGVufDB8fHx8MTY5MDkzMDQxNHww&ixlib=rb-4.0.3&q=80', 'photo2.jpg', 'photo3.jpg', 'photo4.jpg', 'photo5.jpg', 'Habitación individual', 0, 0, 'Política de cancelación de habitación individual', 'Individual', '{\"wifi\": true, \"tv\": true}', 100, NULL, 'Available');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `position` enum('manager','recepcionist','waitress') DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `state` enum('active','inactive') DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roomID` (`roomID`);

--
-- Indices de la tabla `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`roomID`) REFERENCES `rooms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
