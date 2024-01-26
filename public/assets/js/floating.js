// Create a wrapper element
const wrapper = document.createElement('div');
wrapper.classList.add('floating-wrapper');

// Create the WhatsApp button
const whatsappButton = document.createElement('button');
whatsappButton.classList.add('floating-button');
whatsappButton.textContent = 'WhatsApp';

// Create the two additional buttons
const button1 = document.createElement('button');
button1.classList.add('floating-button');
button1.textContent = 'Button 1';

const button2 = document.createElement('button');
button2.classList.add('floating-button');
button2.textContent = 'Button 2';

// Append the buttons to the wrapper
wrapper.appendChild(whatsappButton);
wrapper.appendChild(button1);
wrapper.appendChild(button2);

// Append the wrapper to the document body
document.body.appendChild(wrapper);

// Add a click event listener to the WhatsApp button
whatsappButton.addEventListener('click', () => {
    // Toggle the visibility of the additional buttons
    button1.classList.toggle('hidden');
    button2.classList.toggle('hidden');
});
