window.addEventListener('DOMContentLoaded', () => {
  document.getElementById("calculate-btn").addEventListener("click", function () {
    const height = parseFloat(document.getElementById("height").value);
    const weight = parseFloat(document.getElementById("weight").value);

    if (isNaN(height) || isNaN(weight)) {
      document.getElementById("result").innerText = "Enter valid numbers!";
      return;
    }

    const bmi = weight / ((height / 100) ** 2);
    let message = "";

    if (bmi < 18.5) message = "Underweight";
    else if (bmi < 24.9) message = "Normal";
    else if (bmi < 29.9) message = "Overweight";
    else message = "Obese";

    document.getElementById("result").innerText = `Your BMI is ${bmi.toFixed(2)} (${message})`;
  });
});
