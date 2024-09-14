
# SKYNET

This WordPress theme integrates an AI-powered chatbot that allows users to generate dynamic content directly through chat. The bot interacts with users to create posts and other types of content based on text requests.


## Features

- **AI Chatbot**: Uses AI models to automatically generate content through real-time interactions.
- **Custom Interface**: PHP template with enhanced interactivity through JavaScript.
- **SEO Optimization**: Generated content follows best SEO practices.
- **Seamless Integration**: Easily integrates with the WordPress CMS.


## Installation

1. Clone the repository into your WordPress themes folder:
    ```bash
    git clone https://github.com/YojanHernandez/skynet.git
    ```

2. Activate the theme from the WordPress admin dashboard:
    - Go to **Appearance > Themes**.
    - Find **custom Theme** and activate it.

3. Set up the environment variables for the AI API:
    - Open the `config.php` file in the theme's root directory.
    - Add your AI API key to the `$api_key` variable.

4. Configure the JavaScript routes to communicate with the chatbot API.

    
## Usage/Examples

1. Once the theme is activated, go to the chatbot page:
    - The chatbot will be available at a specific page (`/chatOpenAI`).
    - Enter your content request in the chat, and the AI will automatically generate a new post or article based on your instructions.


## Customization

- **Styles**: The `style.css` file contains the default styles for the chatbot and the rest of the theme’s interface.
- **JavaScript**: `chatOpenAI.js` controls the chatbot’s interactivity. You can customize the bot's response functions and layout by modifying this file.
- **AI API**: If you want to switch AI providers, you can modify the API calls in `api-handler.php`.

## Tech Stack

### Dependencies

This theme depends on:

- **WordPress** (version 6.0 or higher)
- **PHP** (version 7.4 or higher)
- **openai** (version 4.61.0)
- **An AI API key** (e.g., OpenAI or similar)
