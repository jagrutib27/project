function openLoginModal() {
  document.getElementById("loginModal").classList.remove("hidden");
}

function closeLoginModal() {
  document.getElementById("loginModal").classList.add("hidden");
}

window.onclick = function(event) {
  const modal = document.getElementById("loginModal");
  if (event.target === modal) {
    closeLoginModal();
  }
}


