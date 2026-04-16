let selectedDate = null;
let selectedTime = null;

document.addEventListener("DOMContentLoaded", function(){

    generateNext7Days();

    document.getElementById("confirmScheduleBtn")
        .addEventListener("click", confirmBooking);
});

function generateNext7Days(){
    const container = document.getElementById("dateContainer");
    const today = new Date();

    for(let i=0;i<7;i++){
        const date = new Date();
        date.setDate(today.getDate()+i);

        const day = date.toLocaleDateString('en-US',{weekday:'short'});
        const dayNum = date.getDate();

        const div = document.createElement("div");
        div.classList.add("date-item");
        div.innerHTML = `<div>${day}</div><strong>${dayNum}</strong>`;

        div.onclick = ()=>{
            document.querySelectorAll(".date-item").forEach(d=>d.classList.remove("active"));
            div.classList.add("active");
            selectedDate = date.toDateString();
            fetchAvailableSlots(selectedDate);
        };

        container.appendChild(div);
    }
}

function fetchAvailableSlots(date){
    const container = document.getElementById("timeSlotsContainer");
    container.innerHTML = "";

    const slots = mockSlots(date);

    if(slots.length === 0){
        container.innerHTML =
        `<div class="text-muted mt-3">
        No slots available for this day. Please try another date.
        </div>`;
        return;
    }

    slots.forEach(group=>{
        const title = document.createElement("h6");
        title.innerText = group.period;
        container.appendChild(title);

        const wrapper = document.createElement("div");
        wrapper.classList.add("slot-group");

        group.times.forEach(time=>{
            const btn = document.createElement("button");
            btn.classList.add("slot-btn");
            btn.innerText = time;

            btn.onclick = ()=>{
                document.querySelectorAll(".slot-btn").forEach(b=>b.classList.remove("active"));
                btn.classList.add("active");
                selectedTime = time;
                updateSummary();
            };

            wrapper.appendChild(btn);
        });

        container.appendChild(wrapper);
    });
}

function mockSlots(date){
    const random = new Date(date).getDate() % 2;

    if(random === 0){
        return [];
    }

    return [
        {period:"Morning", times:["9:00 AM","10:30 AM"]},
        {period:"Afternoon", times:["2:00 PM","4:00 PM"]},
        {period:"Evening", times:["7:00 PM","8:30 PM"]}
    ];
}

function updateSummary(){
    document.getElementById("summaryText").innerText =
        `${selectedDate} | ${selectedTime}`;
    document.getElementById("confirmScheduleBtn").disabled = false;
}

function confirmBooking(){
    const bookingID = "ND" + Math.floor(Math.random()*100000);

    alert(`Appointment Confirmed!\nBooking ID: ${bookingID}\nFee: ${doctorFee} BDT`);
    window.location.href="index.php";
}