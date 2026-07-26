// Safely append characters to the calculator display
function appendCharacter(char) {
    const display = document.getElementById('display');
    if (!display) return;

    if (display.value === '0' || display.value === 'Error') {
        display.value = char;
    } else {
        display.value += char;
    }
}

// Clear the display input
function clearDisplay() {
    const display = document.getElementById('display');
    if (display) {
        display.value = '';
    }
}

// Send calculation to PHP backend
function calculate() {
    const display = document.getElementById('display');
    if (!display || !display.value) return;

    fetch('calculator.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'expression=' + encodeURIComponent(display.value)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        if (data.status === 'success') {
            display.value = data.result;
        } else {
            console.error('PHP Error:', data.message);
            display.value = 'Error';
        }
    })
    .catch(error => {
        console.error('Fetch Error:', error);
        display.value = 'Error';
    });
}