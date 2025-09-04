# Getting Started with WP AI Tutorials

Learn the basics of WordPress AI development using the PHP AI Client.

## Quick Start

```bash
cd 01-getting-started
composer install
# Set up your API keys
cp .env.example .env
# Edit .env and add your actual API keys

php c.php
```

## Prerequisites

- PHP 7.4 or higher
- Composer
- API keys for AI providers (OpenAI, Anthropic, Google AI)

## Required Dependencies

The WordPress PHP AI Client requires a PSR-18 HTTP client implementation. Install one of these:

```bash
# Guzzle (recommended)
composer require php-http/guzzle7-adapter

# Or cURL adapter
composer require php-http/curl-client guzzlehttp/psr7

# Or Symfony HttpClient
composer require symfony/http-client nyholm/psr7
```

## Setup Instructions

1. **Install Dependencies**
   ```bash
   composer install
   ```

2. **Configure API Keys**
   ```bash
   cp .env.example .env
   ```
   Edit the `.env` file and add your actual API keys:
   - Get OpenAI API key from: https://platform.openai.com/api-keys
   - Get Anthropic API key from: https://console.anthropic.com/
   - Get Google AI API key from: https://makersuite.google.com/app/apikey

3. **Run the Example**
   ```bash
   php content-generator.php
   ```

## What You'll Learn

- Basic PHP AI Client setup and configuration
- Making your first AI API calls
- Handling responses and errors
- Working with different AI providers
- WordPress AI integration basics