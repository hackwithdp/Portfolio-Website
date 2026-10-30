// Small client-side enhancement; server-side validation is also performed in contact.php.
document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('contact-form');
  if (!form) return;

  form.addEventListener('submit', (event) => {
    const name = form.elements.name.value.trim();
    const email = form.elements.email.value.trim();
    const message = form.elements.message.value.trim();

    if (!name || !email || !message) {
      event.preventDefault();
      alert('Please fill in all contact form fields.');
    }
  });
});
