#!/bin/bash
set -e

THEME_DIR="/root/wordpress/sites/alpindede/wp-content/themes/EvoLve"
WP_PATH="/root/wordpress/sites/alpindede"

echo "→ Pushing to GitHub..."
git push origin main

echo "→ Deploying to server..."
ssh bmericc@192.168.0.82 "sudo bash -c '
  cd $THEME_DIR
  git fetch origin
  git reset --hard origin/main
  WP_PATH=$WP_PATH wp cache flush --allow-root
  rm -rf $WP_PATH/wp-content/cache/all/*
  rm -rf $WP_PATH/wp-content/cache/wpfc-minified/*
  echo Deploy OK
'"

echo "✓ Done"
