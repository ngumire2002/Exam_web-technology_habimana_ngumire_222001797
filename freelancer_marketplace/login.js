document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.querySelector(".Login-form");
    
    if (loginForm) {
        loginForm.addEventListener("submit", function(event) {
            event.preventDefault(); 
            
            const formData = new FormData(loginForm);
            
            fetch("login.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json()) 
            .then(data => {
                const messageElement = document.querySelector(".login-message");
                if (data.success) {
                    // Populate user ID field in create form
                    document.getElementById("userId").value = data.userID;
                    
                    // Redirect to home.html after successful login
                    window.location.href = "home.html";
                } else {
                    messageElement.textContent = data.message;
                }
            })
            .catch(error => {
                console.error("Error:", error);
            });
        });
    }
});
