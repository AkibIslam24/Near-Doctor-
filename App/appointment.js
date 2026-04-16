// ===================================
// Doctor Data (Dynamic List)
// ===================================

const doctors = [
    {
        name: "Dr. Arif Rahman",
        specialty: "Cardiologist",
        fee: 1500,
        rating: 4.9,
        photo: "https://randomuser.me/api/portraits/men/32.jpg"
    },
    {
        name: "Dr. Nusrat Jahan",
        specialty: "Dermatologist",
        fee: 1200,
        rating: 4.8,
        photo: "https://randomuser.me/api/portraits/women/44.jpg"
    },
    {
        name: "Dr. Tanvir Ahmed",
        specialty: "Orthopedic",
        fee: 1800,
        rating: 4.7,
        photo: "https://randomuser.me/api/portraits/men/65.jpg"
    }
];

// ===================================
// Render Doctor Cards
// ===================================

const doctorContainer = document.getElementById("doctorContainer");

doctors.forEach(doc => {
    doctorContainer.innerHTML += `
        <div class="card shadow-sm mb-4 border-0 rounded-4">
            <div class="card-body">

                <div class="d-flex align-items-center">
                    <img src="${doc.photo}" 
                         class="rounded-circle me-3" 
                         width="75" height="75"
                         style="object-fit:cover;">

                    <div class="flex-grow-1">
                        <h5 class="mb-1 fw-bold">${doc.name}</h5>
                        <p class="mb-1 text-muted">${doc.specialty}</p>
                        <small class="text-warning">⭐ ${doc.rating}</small>
                        <p class="mb-0 mt-1 fw-semibold text-dark">Fee: ৳${doc.fee}</p>
                    </div>
                </div>

                <button class="btn btn-primary w-100 mt-3"
                        onclick="goToSchedule('${doc.name}', '${doc.specialty}', '${doc.photo}', ${doc.fee})">
                    Appointment Now
                </button>

            </div>
        </div>
    `;
});


// ===================================
// Navigate to Schedule Page
// ===================================

function goToSchedule(name, specialty, photo, fee){
    window.location.href =
        `schedule.php?name=${encodeURIComponent(name)}&specialty=${encodeURIComponent(specialty)}&photo=${encodeURIComponent(photo)}&fee=${fee}`;
}