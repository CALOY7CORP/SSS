// Elements
const adModal = document.getElementById('adModal');
const mainContent = document.getElementById('mainContent');
const skipButton = document.getElementById('skipButton');
const timerElement = document.getElementById('timer');

let timer = 5; // Set countdown to 5 seconds

// Countdown Logic
const countdown = setInterval(() => {
  timer--;
  timerElement.textContent = timer;

  if (timer === 0) {
    skipButton.disabled = false; // Enable the skip button after the countdown
    clearInterval(countdown);
  }
}, 1000);

// Skip Button Event Listener
skipButton.addEventListener('click', () => {
  adModal.style.display = 'none'; // Hide the ad modal
  mainContent.style.display = 'block'; // Display the main content
});
