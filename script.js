function showDiet(type, el) {
  document.querySelectorAll('.diet-content').forEach(c => c.classList.add('hidden'));
  document.getElementById(`diet-${type}`).classList.remove('hidden');

  document.querySelectorAll('.diet-tabs .tab-btn').forEach(btn => btn.classList.remove('active'));
  el.classList.add('active');
}

// Toggle daily plan
let isDailyOption1 = true;

function toggleDailyDiet() {
  const opt1 = document.getElementById('daily-opt1');
  const opt2 = document.getElementById('daily-opt2');
  const label = document.getElementById('daily-label');

  if (isDailyOption1) {
    opt1.classList.add('hidden');
    opt2.classList.remove('hidden');
    label.textContent = '(Option 2)';
  } else {
    opt2.classList.add('hidden');
    opt1.classList.remove('hidden');
    label.textContent = '(Option 1)';
  }

  isDailyOption1 = !isDailyOption1;
}

