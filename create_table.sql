
CREATE TABLE symbols (
    id       INTEGER        PRIMARY KEY AUTOINCREMENT,
    symbol     VARCHAR (64)   NOT NULL,
    block_time      VARCHAR (512),
    last_block      VARCHAR (512),
    nethash         VARCHAR (512),
    exchange_rate_vol  VARCHAR (512),
    block_reward   VARCHAR (512),
    estimated_rewards24  VARCHAR (512),
    estimated_rewards VARCHAR (512),
    algo VARCHAR (512),
    change_1h VARCHAR (512),
    usd      VARCHAR (512),
    cny     VARCHAR (512)
);
difficulty 难度 nethash 全网算力 exchange_rate_vol 交易量单位BTC estimated_rewards平均收益 text_speed测试算力
CREATE TABLE coin (
    id  INTEGER        PRIMARY KEY AUTOINCREMENT,
    en_name VARCHAR (512),
    symbol VARCHAR (512),
    block_time VARCHAR (512),
    last_block      VARCHAR (512),
    nethash         VARCHAR (512),
    exchange_rate_vol  VARCHAR (512),
    block_reward   VARCHAR (512),
    difficulty VARCHAR (512),
    estimated_rewards24  VARCHAR (512),
    estimated_rewards VARCHAR (512),
    unit VARCHAR (512),
    algo VARCHAR (512),
    usd VARCHAR (512),
    cny VARCHAR (512),
    change_1h VARCHAR (512),
    change_24 VARCHAR (512),
    change_7d VARCHAR (512),
    source VARCHAR (512),
    whattominel_coin_id INT (11),
    is_hand_price INT (2) DEFAULT (0),
    is_hand_reward INT (2) DEFAULT (0),
    is_del INT (2) DEFAULT (0)
);
Alter table coin add column text_speed VARCHAR default(1000)
Alter table coin add column btc_revenue VARCHAR(256)
Alter table coin add column is_hand_price int(2) DEFAULT (0)
Alter table coin add column is_hand_reward int(2) DEFAULT (0)
Alter table coin add  column img_url VARCHAR(256);
ALTER table coin add column  img_upload VARCHAR(128)

ALTER table coin add column description VARCHAR (1024)
