// public/assets/js/debug.js

window.debugMode = true; // Activez le mode de débogage si nécessaire

function debugLog(message) {
  if (window.debugMode) {
    console.log(message);
  }
}
