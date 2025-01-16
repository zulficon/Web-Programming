document.getElementById("likeButton").addEventListener("click", function () {
  const likeMessage = document.getElementById("likeMessage");

  likeMessage.classList.remove("hidden");
  likeMessage.style.opacity = "1";

  this.disabled = true;
  this.style.backgroundColor = "#6c757d";
  this.innerText = "Beğendin";
});
