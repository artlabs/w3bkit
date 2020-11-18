#!/bin/bash

SOURCE="../design/source"
TARGET="../design/css"

sass $SOURCE/w3bkit.scss $TARGET/w3b.css
sass --style=compressed $SOURCE/w3bkit.scss $TARGET/w3b.min.css

