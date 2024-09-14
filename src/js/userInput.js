export function createUserMessage(inputField, chatLog) {
  // Mostrar el input del usuario en el chat
  let userMessage = document.createElement("p");
  userMessage.classList.add("message", "user-message");
  userMessage.textContent = inputField.value;

  if (chatLog) {
    chatLog.appendChild(userMessage);
    chatLog.scrollTop = chatLog.scrollHeight;
  }

  return inputField.value;
}

export function cleanInputField(inputField) {
  inputField.value = "";
}

export function createBotMessage(responseData, chatLog) {
  let botMessage = document.createElement("p");
  botMessage.classList.add("message", "bot-message");

  // Mostrar la respuesta del bot en el chat
  if (responseData.choices && responseData.choices.length > 0) {
    console.log(responseData.choices[0].text);
    botMessage.textContent = responseData.choices[0].text;
  } else {
    console.error("Unexpected response structure:", responseData);
    botMessage.textContent = "Error: Unexpected response from OpenAI";
  }

  chatLog.appendChild(botMessage);
  chatLog.scrollTop = chatLog.scrollHeight;
}
