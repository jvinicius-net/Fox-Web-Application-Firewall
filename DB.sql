
CREATE TABLE `bans` (
  `id` int(255) NOT NULL,
  `ban_code` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `useragent` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `reason` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `bans`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `bans`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

