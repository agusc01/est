#!/bin/bash
# create 
# find public/custom/css/ -name '*.css' -exec sh -c 'csso "$1" --output "${1%.css}.min.css"' _ {} \;

# replace
find public/custom/css/ -name '*.css' -exec sh -c 'csso "$1" --output "${1}.tmp" && mv "${1}.tmp" "$1"' _ {} \;
