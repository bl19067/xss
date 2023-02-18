-- テーブルが既にある場合は一旦削除
DROP TABLE IF EXISTS tasklist;
-- テーブルの作成
CREATE TABLE vulunelist (
    name text,
    detail text
);
-- テーブルの表示
SELECT * FROM vulunelist;