document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("enquiryForm");
    const submitBtn = document.getElementById("submitBtn");
    const btnText = submitBtn.querySelector(".btn-text");
    const btnSpinner = submitBtn.querySelector(".spinner-border");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        // Show loader & disable button
        submitBtn.disabled = true;
        btnText.textContent = "Sending...";
        btnSpinner.classList.remove("d-none");

        // Reset errors
        form.querySelectorAll(".invalid-feedback").forEach(el => el.textContent = '');
        form.querySelectorAll(".form-control, .form-select").forEach(el => el.classList.remove("is-invalid"));

        let formData = new FormData(form);

        fetch(form.action, {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                "Accept": "application/json"
            }
        })
        .then(async res => {
            const contentType = res.headers.get("content-type");
            if (contentType && contentType.includes("application/json")) {
                return res.json();
            } else {
                throw new Error("Non-JSON response received");
            }
        })
        .then(data => {
            if (data.errors) {
                Object.keys(data.errors).forEach(key => {
                    let input = form.querySelector(`[name="${key}"]`);
                    if (input) {
                        input.classList.add("is-invalid");
                        input.nextElementSibling.textContent = data.errors[key][0];
                    }
                });
            } else if (data.success) {
                bootstrap.Modal.getInstance(document.getElementById("enquiryModal")).hide();
                new bootstrap.Modal(document.getElementById("successModal")).show();
                form.reset();
            }
        })
        .catch(err => {
            console.error("Form submission error:", err);
        })
        .finally(() => {
            // Hide loader & enable button again
            submitBtn.disabled = false;
            btnText.textContent = "Submit";
            btnSpinner.classList.add("d-none");
        });
    });
});
