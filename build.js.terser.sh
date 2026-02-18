#!/bin/bash
# create 
# find public/custom/js/ -name '*.js' -exec sh -c 'terser "$1" --compress --mangle --output "${1%.js}.min.js"' _ {} \;

# replace
find public/custom/js/ -name '*.js' -exec sh -c 'terser "$1" --compress --mangle --output "${1}.tmp" && mv "${1}.tmp" "$1"' _ {} \;

