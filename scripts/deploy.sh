#!/bin/bash

# Deploy script for WordPress AI Tutorials
# Deploys demo applications and examples

set -e

echo "🚀 Deploying WordPress AI Tutorials..."

# Build everything first
./scripts/build.sh

# Deploy micro app demo
echo "🔨 Deploying Micro App demo..."
cd "03-micro-app"
if [ -f "deploy.php" ]; then
    php deploy.php
fi
cd ..

# Create demo packages
echo "📦 Creating demo packages..."
mkdir -p dist

# Package getting started
tar -czf dist/01-getting-started-demo.tar.gz "01-getting-started" --exclude="vendor" --exclude="node_modules"

# Package advanced techniques
tar -czf dist/02-advanced-techniques-demo.tar.gz "02-advanced-techniques" --exclude="vendor" --exclude="node_modules"

# Package micro app
tar -czf dist/03-micro-app-demo.tar.gz "03-micro-app" --exclude="vendor" --exclude="node_modules" --exclude="dist"

echo "✅ Deployment complete!"
echo "📍 Demo packages available in ./dist/"
echo "🌍 Live demos ready for testing"