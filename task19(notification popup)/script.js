document.getElementById("showNotificationBtn").addEventListener("click", function() {
    showNotification("Welcome to Your Website!", 5000);
  });
  
  document.getElementById("closeBtn").addEventListener("click", closeNotification);
  
  function showNotification(message, duration) {
    var notification = document.getElementById("notificationPopup");
    var notificationText = document.getElementById("notificationText");
    
    notificationText.innerText = message;
    notification.classList.add("show");
    
    setTimeout(function(){
      notification.classList.remove("show");
    }, duration);
  }
  
  function closeNotification() {
    var notification = document.getElementById("notificationPopup");
    notification.classList.remove("show");
  }
  