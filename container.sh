#!/usr/bin/bash

echo -n 'Which are you enter container?'

read container


docker compose exec ${container} bash
