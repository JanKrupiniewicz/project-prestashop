docker stack deploy -c docker-compose.yaml BE_188857 --with-registry-auth

docker exec -i $(docker ps --filter "name=admin-mysql_db" -q) mysql --default-character-set=utf8mb4 -uroot -pstudent BE_188857 < db_dump.sql
