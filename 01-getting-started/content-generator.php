<?php
/**
 * WordPress AI Building Blocks Content Generator
 * 
 * Demonstrates the PHP AI Client SDK (Foundation Layer) patterns
 * that power WordPress AI Services, Abilities API, REST endpoints,
 * and MCP adapters in the complete Building Blocks architecture.
 * 
 * @package WordPress_AI_Building_Blocks
 * @author WordPress AI Contributor
 */

require_once __DIR__ . '/vendor/autoload.php';
use WordPress\AiClient\AiClient;
use Dotenv\Dotenv;

// Load environment variables
if (file_exists(__DIR__ . '/.env')) {
    $dotenv = Dotenv::createUnsafeImmutable(__DIR__);
    $dotenv->load();
}

echo "🏗️ WordPress AI Building Blocks Content Generator\n";
echo "================================================\n";
echo "Foundation Layer (PHP AI Client SDK) Demonstration\n\n";

// Example 1: Blog Post Generation
echo "1. Generating a blog post about WordPress AI...\n";
echo str_repeat("-", 50) . "\n";

$blogPost = AiClient::prompt('Write a comprehensive blog post about integrating AI into WordPress websites. Include practical benefits and implementation tips.')
    ->usingTemperature(0.7)
    ->generateText();

echo $blogPost . "\n\n";

// Example 2: Product Description
echo "2. Generating a product description...\n";
echo str_repeat("-", 50) . "\n";

$productDescription = AiClient::prompt('Write a compelling product description for a WordPress AI plugin that helps content creators generate blog posts automatically.')
    ->usingTemperature(0.8)
    ->generateText();

echo $productDescription . "\n\n";

// Example 3: Social Media Content
echo "3. Generating social media content...\n";
echo str_repeat("-", 50) . "\n";

$socialContent = AiClient::prompt('Create 3 engaging Twitter posts about WordPress development tips. Keep each under 280 characters.')
    ->usingTemperature(0.9)
    ->generateText();

echo $socialContent . "\n\n";

// Example 4: Technical Documentation
echo "4. Generating technical documentation...\n";
echo str_repeat("-", 50) . "\n";

$techDoc = AiClient::prompt('Write a technical guide explaining how to use WordPress hooks and filters for beginners. Include code examples.')
    ->usingTemperature(0.5)
    ->generateText();

echo $techDoc . "\n\n";

// Example 5: Building Blocks Architecture Demo (Method 1: JSON in prompt)
echo "5. WordPress AI Building Blocks Architecture Analysis (JSON in prompt)...\n";
echo str_repeat("-", 50) . "\n";

$architectureAnalysis = AiClient::prompt('Analyze the WordPress AI Building Blocks architecture. 

IMPORTANT: Return your response as valid JSON with this exact structure:
{
  "foundation_layer": "description of foundation layer",
  "abstraction_layer": "description of abstraction layer", 
  "integration_layer": "description of integration layer",
  "communication_layer": "description of communication layer",
  "benefits": ["benefit1", "benefit2", "benefit3"]
}')
    ->usingSystemInstruction('You are a WordPress AI architect. Analyze the 4-layer Building Blocks system. Always respond with valid JSON only.')
    ->usingTemperature(0.3)
    ->generateText();

echo $architectureAnalysis . "\n\n";

// Example 6: Plugin Features Demo (Method 2: Strong system instructions)
echo "6. WordPress AI Plugin Features Analysis (Strong system instructions)...\n";
echo str_repeat("-", 50) . "\n";

$pluginFeatures = AiClient::prompt('List the key features of a WordPress AI content generation plugin')
    ->usingSystemInstruction('You are a WordPress AI expert. ALWAYS respond with valid JSON in this format: {"features": [{"name": "feature_name", "description": "feature_description", "importance": "high/medium/low"}], "target_users": ["user_type1", "user_type2"], "pricing_model": "description"}. Do not include any text before or after the JSON.')
    ->usingTemperature(0.4)
    ->generateText();

echo $pluginFeatures . "\n\n";

echo "✅ WordPress AI Building Blocks Foundation Demo Complete!\n";
echo "🏗️ You've experienced the foundation layer that powers:\n";
echo "   • Abilities API (Abstraction Layer)\n";
echo "   • MCP Adapter (Communication Layer)\n\n";
echo "🤝 Ready to contribute to WordPress AI Building Blocks?\n";
echo "   Join us at https://make.wordpress.org/ai/\n";