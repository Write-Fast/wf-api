CREATE TABLE
  `rank` (
    `id` int(5), 
    `username` varchar(25) DEFAULT 'NULL',
    `wpm` varchar(4) DEFAULT 'NULL'
  ) ENGINE = InnoDB AUTO_INCREMENT = 6 DEFAULT CHARSET = utf8mb4;

/* Just some examples to test the db */
INSERT INTO
  rank (id, username, wpm)
VALUES
  (1, 'killerX', '38');

INSERT INTO
  rank (id, username, wpm)
VALUES
  (2, 'Im Slow LOL', '29');