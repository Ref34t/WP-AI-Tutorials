#!/bin/bash

# Build script for WordPress AI Tutorials
# Compiles and prepares all tutorial examples

set -e

echo "🔨 Building WordPress AI Tutorials..."

# Build getting started tutorial
echo "📚 Building Getting Started tutorial..."
cd "01-getting-started"
if [ -f "composer.json" ]; then
    composer install --no-dev --optimize-autoloader
fi
cd ..

# Build advanced techniques tutorial
echo "🚀 Building Advanced Techniques tutorial..."
cd "02-advanced-techniques"
if [ -f "composer.json" ]; then
    composer install --no-dev --optimize-autoloader
fi
cd ..

# Build micro app
echo "🔨 Building Micro App..."
cd "03-micro-app"
if [ -f "composer.json" ]; then
    composer install --no-dev --optimize-autoloader
fi
if [ -f "package.json" ]; then
    npm ci
    npm run build
fi
cd ..

echo "✅ All tutorials built successfully!"
echo "📝 Run ./scripts/test.sh to validate examples"
echo "🚀 Run ./scripts/deploy.sh to deploy demos"