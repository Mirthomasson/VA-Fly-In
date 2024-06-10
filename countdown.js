// Adjust the event date and time here
const eventDate = new Date('June 6, 2025 00:00:00').getTime();

// Update the countdown every second
const countdownElement = document.getElementById('countdown');

function updateCountdown() {
  const now = new Date().getTime();
  const timeRemaining = eventDate - now;

  const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
  const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

  // Display the countdown
  countdownElement.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;

  // Update every second
  setTimeout(updateCountdown, 1000);
}

// Initial call to start the countdown
updateCountdown();