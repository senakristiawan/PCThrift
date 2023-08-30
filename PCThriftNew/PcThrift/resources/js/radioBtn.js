const radios = document.querySelectorAll('input[type=radio]');
radios.forEach((radio) => {
  radio.addEventListener('change', () => {
    const label = radio.parentNode;
    const allLabels = document.querySelectorAll('label');
    allLabels.forEach((label) => {
      label.classList.remove('bg-checked', 'text-white');
    });
    if (radio.checked) {
      label.classList.add('bg-checked', 'text-white');
    }
  });
});