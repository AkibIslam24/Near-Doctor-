document.addEventListener("DOMContentLoaded", function(){

    const checkbox = document.getElementById("agreeCheck");
    const confirmBtn = document.getElementById("confirmBtn");

    checkbox.addEventListener("change", function(){
        confirmBtn.disabled = !this.checked;
    });

    confirmBtn.addEventListener("click", function(){

        confirmBtn.innerHTML = "Processing...";
        confirmBtn.classList.add("loading");

        setTimeout(()=>{
            confirmBtn.innerHTML = "✅ Emergency Confirmed!";
            confirmBtn.classList.remove("loading");
            confirmBtn.classList.add("success");

            setTimeout(()=>{
                alert("Doctor is on the way 🚑\nLive tracking started.");
                window.location.href = "index.php";
            },1500);

        },1500);
    });

    // Payment selection
    const options = document.querySelectorAll(".payment-option");

    options.forEach(option=>{
        option.addEventListener("click", function(){
            options.forEach(o=>o.classList.remove("active"));
            this.classList.add("active");
        });
    });

});