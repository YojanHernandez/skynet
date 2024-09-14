
    <style>
        body {
            background-color: white !important;
        }

        header {
            background-color: #ffffff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            padding: 1rem;
        }
        header h1 {
            margin: 0;
            font-size: 1.5rem;
        }
        main {
            flex-grow: 1;
            padding: 2rem;
        }
        .hero {
            text-align: center;
            margin-bottom: 2rem;
        }
        .hero h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        .hero p {
            font-size: 1.2rem;
            color: #6b7280;
            margin-bottom: 1.5rem;
        }
        .button {
            display: inline-block;
            background-color: #3b82f6;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.375rem;
            text-decoration: none;
            font-weight: bold;
        }
        .chat-widget {
            max-width: 400px;
            margin: 0 auto;
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .chat-header {
            background-color: #f3f4f6;
            padding: 1rem;
            font-weight: bold;
            border-bottom: 1px solid #e5e7eb;
        }
        .chat-messages {
            height: 300px;
            overflow-y: auto;
            padding: 1rem;
        }
        .message {
            margin-bottom: 1rem;
            padding: 0.5rem 1rem;
            border-radius: 1rem;
            max-width: 80%;
        }
        .bot-message {
            background-color: #f3f4f6;
            align-self: flex-start;
        }
        .user-message {
            background-color: #3b82f6;
            color: white;
            align-self: flex-end;
            margin-left: auto;
        }
        .chat-input {
            display: flex;
            padding: 1rem;
            border-top: 1px solid #e5e7eb;
        }
        .chat-input input {
            flex-grow: 1;
            padding: 0.5rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            margin-right: 0.5rem;
        }
        .chat-input button {
            background-color: black;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            cursor: pointer;
        }
        footer {
            background-color: #ffffff;
            text-align: center;
            padding: 1rem;
            font-size: 0.875rem;
            color: #6b7280;
        }

        #wpfooter {
            display: none;
        }
    </style>

    <main>
        <div class="hero">
            <h2>Welcome</h2>
            <p>Simple and effective chat solutions for your business.</p>
        </div>

        <div class="chat-widget">
            <div class="chat-header">
                Live chat
            </div>
            <div id="chat-log" class="chat-messages">
            </div>
            <div id="input-container" class="chat-input">
                <input id="user-input" type="text" placeholder="Escribe tu mensaje...">
                <button id="send-btn">Enviar</button>
            </div>
        </div>
    </main>

    <footer>
        <p>© 2024 Skynet. All rights reserved</p>
    </footer>
