DROP DATABASE IF EXISTS bb;

CREATE DATABASE bb;

USE bb;

DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NULL,
    password VARCHAR(255) NOT NULL,
    picture_path VARCHAR(255) NOT NULL
);

INSERT INTO
    users (name, email, password, picture_path)
VALUES
    ('keishiro_terashita', 'terashi@email.com', '$2y$10$ZTDk0.0rmhqscVGFk8hzseGRCiRNL89IYRp8iw/opawEIF.Hl2s6O', '/pictures/terashi.jpeg'),
    ('akira_kobayashi', 'akira@email.com', '$2y$10$nLebMS0JhVJQhbIon2Y0EO3DbpFKd6X6POtx1ribrTerB9hlXr1pG', '/pictures/akira.jpeg'),
    ('lisa_terashima', 'lisa@email.com', '$2y$10$95qNdY1JOUUqxrErNBRYiO2PIqWZpcN6BiRJ9Wn2IeH0AQq7oabVm', '/pictures/lisa.jpeg'),
    ('jin_aoyagi', 'jin@email.com', '$2y$10$wWupiSroZ4Q04CXqSpa1ZemX3PbgAmkqB/UdCdk4UGxRzoLsqcYde', '/pictures/jin.jpeg');


DROP TABLE IF EXISTS posts;

CREATE TABLE posts (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    message VARCHAR(140) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO
    posts (user_id, message, created_at, updated_at)
VALUES
    (1, 'どうもです。始めてみました。よろしくお願いします。。。なんやねんこれ。', '2022-08-27 18:05:54', '2022-08-27 18:05:54'),
    (2, 'パソコンの分割払いが絶妙に家計を圧迫している。稼がねば。', '2022-08-25 14:55:42', '2022-08-25 14:55:42'),
    (3, '毎日日記つけようとか思ってたけど全然続いてなくて草', '2022-08-26 20:32:07', '2022-08-26 20:32:07'),
    (4, '財布に小銭入れるポケットいらんやろとか思ったけど、ゆーて現金使う場面あってちょっと不便。', '2022-08-27 23:47:38', '2022-08-27 23:47:38'),
    (2, '最近松屋推しです。でも味噌汁がつかなくなるみたいなニュース見て悲しい。', '2022-08-27 07:23:14', '2022-08-27 07:23:14'),
    (3, 'これ、たのしいねえええ。', '2022-08-27 12:14:26', '2022-08-27 12:14:26'),
    (4, '面白いことやりたいよね。人生楽しんだもん勝ち！', '2022-08-27 01:25:58', '2022-08-27 01:25:58'),
    (2, '船の免許とか取っていつ使うねん。。って思ったけど割とロマンあるよね。', '2022-08-27 10:06:22', '2022-08-27 10:06:22'),
    (3, '船ときたら飛行機も免許取れたりするのかなって思って調べたらお金かかるけど一般人でも取れそうな感じはあるっぽい。', '2022-08-27 12:21:32', '2022-08-27 12:21:32'),
    (4, '授業期間より夏休みの方が忙しい。。まじでどうかしてる', '2022-08-27 16:54:06', '2022-08-27 16:54:06'),
    (3, 'I study English, so I will write some messages in English.', '2022-08-27 14:23:02', '2022-08-27 14:23:02');
