#!/bin/bash

HOSTNAME="192.168.0.30"
PORT="3306"
PASSWORD="root"
DBNAME="testdb"
TABLENAME="vulunelist"

createdbSQL="create database IF NOT EXISTS ${DBNAME}"
mysql -h${HOSTNAME} -P${PORT} -u${USERNAME} -p${PASSWORD} -e "${createdbSQL}"

createTblSQL="create table IF NOT EXISTS ${TABLENAME} ( name text, detail text)"
mysql -h${HOSTNAME} -P${PORT} -u${USERNAME} -p${PASSWORD} ${DBNAME} -e "${createTblSQL}"
