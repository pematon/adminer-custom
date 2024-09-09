#!/bin/sh

set -e

# Root directory.
BASEDIR=$( cd `dirname $0`/.. ; pwd )
cd "$BASEDIR"

# Master branch
cp index.php ../adminer-custom
cp adminer.php ../adminer-custom
cp README.md ../adminer-custom

cp -r css/*.css ../adminer-custom/css
cp -r fonts ../adminer-custom
cp -r images ../adminer-custom
cp -r plugins ../adminer-custom

# Theme
cp -r css/*.less ../adminer-theme/src
cp -r css/inc ../adminer-theme/src

cp -r css/*.css ../adminer-theme/lib/css
cp -r fonts ../adminer-theme/lib
cp -r images ../adminer-theme/lib
cp plugins/AdminerTheme.php ../adminer-theme/lib/plugins

# Plugins
cp plugins/AdminerJsonPreview.php ../adminer-plugins
cp plugins/AdminerSimpleMenu.php ../adminer-plugins
cp plugins/AdminerCollations.php ../adminer-plugins
cp plugins/AdminerLoginServers.php ../adminer-plugins
