#!/bin/sh

set -e

# Root directory.
BASEDIR=$( cd `dirname $0`/.. ; pwd )
cd "$BASEDIR"

lessc --clean-css css/default-blue.less css/default-blue.css
lessc --clean-css css/default-green.less css/default-green.css
lessc --clean-css css/default-orange.less css/default-orange.css
