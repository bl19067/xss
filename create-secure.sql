-- テーブルが既にある場合は一旦削除
DROP TABLE IF EXISTS securelist;
-- テーブルの作成
CREATE TABLE securelist (
    name text,
    detail text
);
-- テーブルの表示
SELECT * FROM securelist;