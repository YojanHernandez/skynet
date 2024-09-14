import {
    createUserMessage,
    cleanInputField,
    createBotMessage,
} from "./userInput.js";

import {
    myApiKey,
    sendButton,
    inputField,
    chatLog,
    context,
} from "./variables.js";

import OpenAI from "openai";

const openai = new OpenAI({ apiKey: myApiKey, dangerouslyAllowBrowser: true });


async function getOpenAIResponse() {
    let userInput = createUserMessage(inputField, chatLog);
    userInput = {
        role: "user",
        content: userInput,
    };

    cleanInputField(inputField);

    let responseData = await openai.chat.completions.create({
        messages: [...context, userInput],
        model: "gpt-4o",
    });

    createBotMessage(responseData, chatLog);
}

// Event listeners
if (sendButton) {
    sendButton.addEventListener("click", getOpenAIResponse);
}

if (inputField) {
    inputField.addEventListener("keydown", (e) => {
        if (e.key === "Enter") {
            getOpenAIResponse();
        }
    });
}
