document.addEventListener("DOMContentLoaded", function () {

    const doctors = [
        {
            name: "Dr. Arif Rahman",
            specialty: "General Physician",
            distance: "1.2 km",
            eta: "12 mins",
            status: "online",
            photo: "https://randomuser.me/api/portraits/men/32.jpg"
        },
        {
            name: "Dr. Tanvir Ahmed",
            specialty: "Neurologist",
            distance: "2.4 km",
            eta: "18 mins",
            status: "online",
            photo: "https://randomuser.me/api/portraits/men/45.jpg"
        },
        {
            name: "Dr. Nusrat Jahan",
            specialty: "Cardiologist",
            distance: "3.5 km",
            eta: "25 mins",
            status: "offline",
            photo: "https://randomuser.me/api/portraits/women/44.jpg"
        },
        {
            name: "Dr. Shirin Akter",
            specialty: "Pediatrician",
            distance: "4.1 km",
            eta: "30 mins",
            status: "offline",
            photo: "https://randomuser.me/api/portraits/women/65.jpg"
        }
    ];

    // Sort online first
    doctors.sort((a, b) => {
        return a.status === "online" ? -1 : 1;
    });

    const doctorList = document.getElementById("doctorList");

    doctors.forEach(doc => {

        const card = document.createElement("div");
        card.classList.add("doctor-card");

        card.innerHTML = `
            <img src="${doc.photo}">
            <div class="doctor-info">
                <div class="doctor-name">${doc.name}</div>
                <div class="specialty">${doc.specialty}</div>
                <div class="distance">${doc.distance} • ETA ${doc.eta}</div>
                <div class="status ${doc.status}">
                    ${doc.status === "online" ? "● Online" : "● Offline"}
                </div>
            </div>
        `;

        doctorList.appendChild(card);
    });

});


function confirmDoctor(name, fee) {
    alert("Emergency request sent to " + name +
          "\nFee: " + fee + " BDT" +
          "\nDoctor is on the way 🚑");
}