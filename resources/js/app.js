import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const confirmInputs = document.querySelectorAll("[data-confirm]");

confirmInputs.forEach((input) => {
input.addEventListener("click", (e) => {
e.preventDefault();
 const confirm = window.confirm(
"Sicurooo di voler eliminare questo personaggio OP?"
        );
    if (!confirm) return;
    const form = input.closest("form");
      if (form) {
            form.submit();
        }
    });
    });