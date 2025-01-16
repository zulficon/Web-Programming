document.getElementById("likeButton").addEventListener("click", function () {
  const likeMessage = document.getElementById("likeMessage");

  likeMessage.classList.remove("hidden");
  likeMessage.style.opacity = "1";

  this.disabled = true;
  this.style.backgroundColor = "#6c757d";
  this.innerText = "Beğendin";
});

const faqQuestions = document.querySelectorAll(".faq-question");

faqQuestions.forEach((question) => {
  question.addEventListener("click", () => {
    const answer = question.nextElementSibling;

    document.querySelectorAll(".faq-answer").forEach((item) => {
      if (item !== answer) {
        item.style.display = "none";
      }
    });

    if (answer.style.display === "block") {
      answer.style.display = "none";
    } else {
      answer.style.display = "block";
    }
  });
});

document
  .getElementById("suggestionForm")
  .addEventListener("submit", function (e) {
    e.preventDefault();

    const thankYouMessage = document.getElementById("thankYouMessage");
    thankYouMessage.style.display = "block";

    this.reset();
  });
