CREATE TABLE `categories` (
  `categories_id` int(14) NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `categories_slug` text NOT NULL,
  `categories_icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

CREATE TABLE `channels` (
  `channels_id` int(14) NOT NULL,
  `channels_slug` varchar(255) NOT NULL,
  `channels_name` text NOT NULL,
  `channels_description` text NOT NULL,
  `channels_rating` varchar(255) NOT NULL,
  `channels_categories_id` int(14) NOT NULL,
  `channels_images_id` int(14) NOT NULL DEFAULT 0,
  `channels_users_id` int(14) NOT NULL,
  `channels_featured` int(1) NOT NULL DEFAULT 0,
  `channels_created` datetime NOT NULL DEFAULT current_timestamp(),
  `channels_sites_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

CREATE TABLE `favorites` (
  `favorites_id` int(14) NOT NULL,
  `favorites_users_id` int(14) NOT NULL,
  `favorites_media_id` int(14) NOT NULL,
  `favorites_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `files` (
  `files_id` int(14) NOT NULL,
  `files_users_id` int(14) NOT NULL,
  `files_file` text NOT NULL,
  `files_created` datetime NOT NULL DEFAULT current_timestamp(),
  `files_modified` datetime DEFAULT NULL,
  `files_sites_id` int(14) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

CREATE TABLE `images` (
  `images_id` int(14) NOT NULL,
  `images_users_id` int(14) NOT NULL,
  `images_file` text NOT NULL,
  `images_created` datetime NOT NULL DEFAULT current_timestamp(),
  `images_modified` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `images_sites_id` int(14) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

CREATE TABLE `movies` (
  `movies_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `filePath` text NOT NULL,
  `thumbnail` text DEFAULT NULL,
  `uploadDate` datetime NOT NULL DEFAULT current_timestamp(),
  `releaseDate` varchar(255) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `duration` varchar(10) NOT NULL DEFAULT '0',
  `slug` varchar(255) NOT NULL,
  `movies_images_id` int(14) NOT NULL DEFAULT 0,
  `movies_files_id` int(14) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 1,
  `featured` int(1) NOT NULL DEFAULT 0,
  `cover` text DEFAULT NULL,
  `rating` varchar(255) NOT NULL DEFAULT '',
  `categoryId` int(14) NOT NULL,
  `users_id` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `notifications` (
  `notifications_id` int(14) NOT NULL,
  `notifications_users_id` int(14) NOT NULL,
  `notifications_icon` text NOT NULL,
  `notifications_link` text NOT NULL,
  `notifications_text` text NOT NULL,
  `notifications_status` int(1) NOT NULL DEFAULT 0,
  `notifications_created` datetime NOT NULL DEFAULT current_timestamp(),
  `notifications_sites_id` int(14) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

CREATE TABLE `playlists` (
  `playlists_id` int(14) NOT NULL,
  `playlists_channels_id` int(14) NOT NULL,
  `playlists_videos_id` int(14) NOT NULL,
  `playlists_users_id` int(14) NOT NULL,
  `playlists_created` datetime NOT NULL DEFAULT current_timestamp(),
  `playlists_sites_id` int(14) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

CREATE TABLE `shows` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `seasons` int(14) NOT NULL,
  `episodes` int(14) NOT NULL DEFAULT 1,
  `years` varchar(255) NOT NULL,
  `views` int(14) NOT NULL DEFAULT 0,
  `description` text NOT NULL,
  `rating` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `thumbnail` text DEFAULT NULL,
  `preview` text DEFAULT NULL,
  `categoryId` int(11) NOT NULL DEFAULT 19,
  `shows_images_id` int(14) NOT NULL DEFAULT 0,
  `users_id` int(14) NOT NULL DEFAULT 1,
  `featured` int(1) NOT NULL DEFAULT 0,
  `cover` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `sites` (
  `sites_id` int(14) NOT NULL,
  `sites_name` text NOT NULL,
  `sites_logo_svg` text NOT NULL,
  `sites_logo_image` text NOT NULL,
  `sites_url` text NOT NULL,
  `sites_users_id` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

INSERT INTO `sites` (`sites_id`, `sites_name`, `sites_logo_svg`, `sites_logo_image`, `sites_url`, `sites_users_id`) VALUES
(1, 'New Project', ' <svg id=\"188634263\" viewBox=\"0 0 489.6551724137931 90.3411971302348\" height=\"80.3411971302348\" width=\"389.6551724137931\" style=\"width: 389.655px; height: 80.3412px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%) scale(0.633894); z-index: 0; cursor: pointer; overflow: visible;\"><defs id=\"SvgjsDefs2707\"></defs><g id=\"SvgjsG2708\" featurekey=\"2ou6gm-0\" transform=\"matrix(0.21319494855567675,0,0,0.21319494855567675,18.193172932981767,18.182513144890276)\" fill=\"#111111\"><g xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M202.9,120.4L156,82.2c-3.5-2.9-8.6-2.9-12.1,0L97,120.5c-1.9,1.5-1.9,4.5,0,6l14.7,12c2.1,1.7,5.1,1.7,7.3,0l30.9-25.2   l30.9,25.3c2.1,1.7,5.1,1.7,7.3,0l14.7-12C204.8,124.9,204.8,122,202.9,120.4z\"></path><path d=\"M249.9,158.9l40.2-32.7c1.9-1.5,1.9-4.5,0-6L156,10.7c-3.5-2.9-8.6-2.9-12.1,0L9.9,120c-1.9,1.5-1.9,4.5,0,6l40.2,32.8   L9.9,191.6c-1.9,1.5-1.9,4.5,0,6L124,290.7c2.5,2,6.2,0.3,6.2-3V193c0-2.9-1.3-5.7-3.6-7.5L94,158.9L72,141l-19-15.7   c-1.4-1.1-1.4-3.3,0-4.5l93.4-76.2c2.1-1.7,5.1-1.7,7.3,0l93.4,76.2c1.4,1.1,1.4,3.3,0,4.5L228,140.9l-22.1,18l-32.6,26.6   c-2.3,1.8-3.6,4.6-3.6,7.5v94.7c0,3.2,3.8,5,6.2,3L290,197.6c1.9-1.5,1.9-4.5,0-6L249.9,158.9z M73.9,178.3l26.7,21.8   c1.3,1.1,2.2,2.8,2.2,4.5v28.8c0,1.6-1.9,2.6-3.1,1.5L53,196.8c-1.4-1.1-1.4-3.3,0-4.5l17.3-14.1C71.3,177.3,72.8,177.3,73.9,178.3   z M197.3,233.4v-28.8c0-1.7,0.8-3.4,2.2-4.5l26.7-21.8c1-0.9,2.5-0.9,3.6,0l17.3,14.1c1.4,1.1,1.4,3.3,0,4.5L200.4,235   C199.1,235.9,197.3,235.1,197.3,233.4z\"></path></g></g><g id=\"SvgjsG2709\" featurekey=\"kZnDdN-0\" transform=\"matrix(2.3753910508224867,0,0,2.3753910508224867,99.04984391947342,19.222729186810255)\" fill=\"#111111\"><path d=\"M12.52 20 l-1.44 -3.3 l-7.48 0 l-1.44 3.3 l-1.76 0 l6.24 -14 l1.38 0 l6.26 14 l-1.76 0 z M4.22 15.3 l6.24 0 l-3.12 -7.12 z M17.54 6 l0 14 l-1.66 0 l0 -14 l1.66 0 z M36.22 20 l-1.8 0 l-3.54 -5.04 l-0.38 0 l-2.9 0 l0 5.04 l-1.66 0 l0 -14 l4.56 0 c3.14 0 4.96 1.92 4.96 4.52 c0 2 -1.08 3.56 -3 4.16 z M27.6 7.5600000000000005 l0 5.92 l2.86 0 c2.02 0 3.34 -1.04 3.34 -2.96 c0 -1.94 -1.32 -2.96 -3.34 -2.96 l-2.86 0 z M39.68 18.44 l6.66 0 l0 1.56 l-7.06 0 l-1.26 0 l0 -14 l1.66 0 l6.48 0 l0 1.56 l-6.48 0 l0 4.64 l5.04 0 l0 1.52 l-5.04 0 l0 4.72 z M60 18.5 c-1.28 1.1 -2.9 1.7 -4.7 1.7 c-3.64 0 -7.16 -2.96 -7.16 -7.2 s3.52 -7.2 7.16 -7.2 c1.78 0 3.38 0.6 4.64 1.66 l-1.02 1.16 c-0.98 -0.78 -2.24 -1.24 -3.5 -1.24 c-2.86 0 -5.56 2.32 -5.56 5.62 s2.7 5.62 5.56 5.62 c1.28 0 2.56 -0.48 3.54 -1.28 z M72.18 20 l-1.8 0 l-3.54 -5.04 l-0.38 0 l-2.9 0 l0 5.04 l-1.66 0 l0 -14 l4.56 0 c3.14 0 4.96 1.92 4.96 4.52 c0 2 -1.08 3.56 -3 4.16 z M63.56 7.5600000000000005 l0 5.92 l2.86 0 c2.02 0 3.34 -1.04 3.34 -2.96 c0 -1.94 -1.32 -2.96 -3.34 -2.96 l-2.86 0 z M82.48 6 l1.66 0 l0 8.92 c0 3.44 -2.24 5.38 -5.08 5.38 s-5.08 -1.94 -5.08 -5.38 l0 -8.92 l1.66 0 l0 8.92 c0 2.62 1.56 3.8 3.42 3.8 s3.42 -1.18 3.42 -3.8 l0 -8.92 z M88.2 6 l0 14 l-1.66 0 l0 -14 l1.66 0 z M99.64 6 l0 1.56 l-3.88 0 l0 12.44 l-1.66 0 l0 -12.44 l-3.9 0 l0 -1.56 l9.44 0 z M103.30000000000001 18.44 l6.66 0 l0 1.56 l-7.06 0 l-1.26 0 l0 -14 l1.66 0 l6.48 0 l0 1.56 l-6.48 0 l0 4.64 l5.04 0 l0 1.52 l-5.04 0 l0 4.72 z M122.34000000000002 20 l-1.8 0 l-3.54 -5.04 l-0.38 0 l-2.9 0 l0 5.04 l-1.66 0 l0 -14 l4.56 0 c3.14 0 4.96 1.92 4.96 4.52 c0 2 -1.08 3.56 -3 4.16 z M113.72000000000001 7.5600000000000005 l0 5.92 l2.86 0 c2.02 0 3.34 -1.04 3.34 -2.96 c0 -1.94 -1.32 -2.96 -3.34 -2.96 l-2.86 0 z\"></path></g></svg>', '', 'http://localhost:8888', 1);

CREATE TABLE `subscriptions` (
  `subscriptions_id` int(14) NOT NULL,
  `subscriptions_channels_id` int(14) NOT NULL,
  `subscriptions_users_id` int(14) NOT NULL,
  `subscriptions_created` datetime NOT NULL DEFAULT current_timestamp(),
  `subscriptions_sites_id` int(14) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

INSERT INTO `subscriptions` (`subscriptions_id`, `subscriptions_channels_id`, `subscriptions_users_id`, `subscriptions_created`, `subscriptions_sites_id`) VALUES
(1, 1, 1, '2024-10-16 15:46:46', 1);


CREATE TABLE `users` (
  `users_id` int(14) NOT NULL,
  `users_email` text NOT NULL,
  `users_phone` varchar(255) NOT NULL,
  `users_password` text NOT NULL,
  `users_first_name` text NOT NULL,
  `users_last_name` text NOT NULL,
  `users_address` text NOT NULL,
  `users_city` text NOT NULL,
  `users_state` text NOT NULL,
  `users_zip` varchar(11) NOT NULL,
  `users_ssn` varchar(13) NOT NULL,
  `users_images_id` int(14) NOT NULL DEFAULT 0,
  `users_types_id` int(14) NOT NULL,
  `users_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `users_blocked` int(1) NOT NULL DEFAULT 0,
  `users_subscriber` int(1) NOT NULL DEFAULT 0,
  `users_site_id` int(14) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;


INSERT INTO `users` (`users_id`, `users_email`, `users_phone`, `users_password`, `users_first_name`, `users_last_name`, `users_address`, `users_city`, `users_state`, `users_zip`, `users_ssn`, `users_images_id`, `users_types_id`, `users_date`, `users_blocked`, `users_subscriber`, `users_site_id`) VALUES
(1, 'billy.bateman3@gmail.com', '4053654377', '60c296495d77afdbb14ac3eb28238f89', 'Billy', 'Bateman', '10033 S. Ross', 'Oklahoma City', 'OK', '73159', '446-90-9326', 1, 1, '2024-06-29 18:59:25', 0, 1, 1);

CREATE TABLE `users_online` (
  `users_online_id` int(14) NOT NULL,
  `users_online_users_id` int(14) NOT NULL,
  `users_online_created` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

CREATE TABLE `users_permissions` (
  `users_permissions_id` int(14) NOT NULL,
  `users_permissions_controller` text NOT NULL,
  `users_permissions_method` text NOT NULL,
  `users_permissions_users_types` text NOT NULL,
  `users_permissions_sites_id` int(14) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

INSERT INTO `users_permissions` (`users_permissions_id`, `users_permissions_controller`, `users_permissions_method`, `users_permissions_users_types`, `users_permissions_sites_id`) VALUES
(1, 'admin', 'index', '1', 1),
(2, 'permissions', 'create', '1', 1);

CREATE TABLE `users_types` (
  `users_types_id` int(14) NOT NULL,
  `users_types_name` varchar(255) NOT NULL,
  `users_types_value` varchar(255) NOT NULL,
  `users_types_signup_type` int(1) NOT NULL DEFAULT 0,
  `users_types_site_id` int(14) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

INSERT INTO `users_types` (`users_types_id`, `users_types_name`, `users_types_value`, `users_types_signup_type`, `users_types_site_id`) VALUES
(1, 'Admin', 'admin', 0, 1),
(2, 'Subscriber', 'subscriber', 0, 1),
(3, 'User', 'user', 1, 1);

CREATE TABLE `videoProgress` (
  `id` int(11) NOT NULL,
  `users_id` int(14) NOT NULL,
  `videoId` int(11) NOT NULL,
  `progress` int(11) NOT NULL DEFAULT 0,
  `finished` tinyint(4) NOT NULL DEFAULT 0,
  `dateModified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE `videos` (
  `videos_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text DEFAULT NULL,
  `users_id` int(14) NOT NULL,
  `filePath` text NOT NULL,
  `thumbnail` text DEFAULT NULL,
  `uploadDate` datetime NOT NULL DEFAULT current_timestamp(),
  `releaseDate` varchar(255) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `duration` varchar(10) NOT NULL DEFAULT '0',
  `slug` varchar(255) NOT NULL,
  `entityId` int(11) NOT NULL,
  `categoryId` int(14) NOT NULL,
  `season` int(14) NOT NULL DEFAULT 1,
  `episode` int(14) NOT NULL DEFAULT 1,
  `videos_images_id` int(14) NOT NULL DEFAULT 0,
  `videos_files_id` int(14) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 1,
  `featured` int(1) NOT NULL DEFAULT 0,
  `cover` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

ALTER TABLE `channels`
  ADD PRIMARY KEY (`channels_id`);

ALTER TABLE `favorites`
  ADD PRIMARY KEY (`favorites_id`);

ALTER TABLE `files`
  ADD PRIMARY KEY (`files_id`);

ALTER TABLE `images`
  ADD PRIMARY KEY (`images_id`);

ALTER TABLE `movies`
  ADD PRIMARY KEY (`movies_id`);

ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notifications_id`);

ALTER TABLE `playlists`
  ADD PRIMARY KEY (`playlists_id`);

ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryId` (`categoryId`);

ALTER TABLE `sites`
  ADD PRIMARY KEY (`sites_id`),
  ADD KEY `sites_users_id` (`sites_users_id`);

ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`subscriptions_id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`),
  ADD KEY `users_types_id` (`users_types_id`);

ALTER TABLE `users_permissions`
  ADD PRIMARY KEY (`users_permissions_id`);

ALTER TABLE `users_types`
  ADD PRIMARY KEY (`users_types_id`),
  ADD UNIQUE KEY `users_types_value` (`users_types_value`);

ALTER TABLE `sites`
  MODIFY `sites_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `subscriptions`
  MODIFY `subscriptions_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `users`
  MODIFY `users_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `users_permissions`
  MODIFY `users_permissions_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `users_types`
  MODIFY `users_types_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `shows`
  ADD CONSTRAINT `shows_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`categories_id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `sites`
  ADD CONSTRAINT `sites_users_id` FOREIGN KEY (`sites_users_id`) REFERENCES `users` (`users_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `users`
  ADD CONSTRAINT `users_types_id` FOREIGN KEY (`users_types_id`) REFERENCES `users_types` (`users_types_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;