#!/bin/sh

set -e

# Root directory.
BASEDIR=$( cd `dirname $0`/.. ; pwd )
cd "$BASEDIR"

# Master branch
cp index.php ../adminer-custom-master
cp adminer.php ../adminer-custom-master

cp -r css ../adminer-custom-master
cp -r fonts ../adminer-custom-master
cp -r images ../adminer-custom-master
cp -r plugins ../adminer-custom-master

# Theme
cp -r less/* ../adminer-theme/src

cp -r css ../adminer-theme/lib
cp -r fonts ../adminer-theme/lib
cp -r images ../adminer-theme/lib
cp plugins/AdminerTheme.php ../adminer-theme/lib/plugins

# Plugins
cp plugins/AdminerJsonPreview.php ../adminer-plugins
cp plugins/AdminerSimpleMenu.php ../adminer-plugins
