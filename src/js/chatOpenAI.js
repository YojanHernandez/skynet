import {
  createUserMessage,
  cleanInputField,
  createBotMessage,
} from "./userInput.js";

import { myApiKey, sendButton, inputField, chatLog } from "./variables.js";

import OpenAI from "openai";

const openai = new OpenAI({ apiKey: myApiKey, dangerouslyAllowBrowser: true });

async function getOpenAIResponse() {
  let userInput = createUserMessage(inputField, chatLog);
  cleanInputField(inputField);

  let responseData = await openai.completions.create({
    model: "gpt-3.5-turbo-instruct",
    prompt: userInput,
    max_tokens: 7,
    temperature: 0,
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
