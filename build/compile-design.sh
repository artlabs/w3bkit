#!/bin/bash

SOURCE="../design/source/w3bkit.scss"
TARGET="../design/css"
NAME="w3b"

printf "compiling $NAME.css...\n"
sass $SOURCE $TARGET/$NAME.css

printf "compiling $NAME.min.css...\n"
sass --style=compressed $SOURCE $TARGET/$NAME.min.css

