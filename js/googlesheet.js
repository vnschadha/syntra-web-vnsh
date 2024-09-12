const scriptURL = 'https://script.google.com/macros/s/AKfycbwCg7i3VAmRL2HOfh5y8wivSX0kUYiCbNcTwV870HJMsB4Susi1ZQHcX6MR9mhGuwXg/exec'
const form = document.forms['syntra-form']
form.addEventListener('submit', e => {
e.preventDefault()
fetch(scriptURL, { method: 'POST', body: new FormData(form)})
.then(response => alert("Thank you! your form is submitted successfully." ))
.then(() => { window.location.reload(); })
.catch(error => console.error('Error!', error.message))
})