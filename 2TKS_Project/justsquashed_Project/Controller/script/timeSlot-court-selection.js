// DISPLAY COURTS
let court = document.getElementById('court');
let courtName = ['Court 1', 'Court 2', 'Court 3', 'Court 4', 'Court 5', 'Court 6', 'Court 7', 'Court 8'];
let courtCode = 1001;
for(let i = 0; i < courtName.length; i++){
    let courtNameVal = courtName[i];
    let electCourt = document.createElement("option");
    electCourt.textContent = courtNameVal;
    electCourt.value =  courtCode;
    
    court.appendChild(electCourt);
    courtCode++;
}

// SHOW AVAILABLE TIMESLOTS
let clickedThisDate;
function getClickedDate(cDate){
    clickedThisDate = cDate;
}

function getCourtCode(){
    let courtsAvail = document.getElementById('court');
    let courtIndex = courtsAvail.value;

    let clCode = courtIndex;
    let clDate = clickedThisDate;

    bookedSlots(clCode, clDate);
}

let bookedStartSlot;
let bookedEndSlot;
function bookedSlots(cCode, cDate){
    let bookedCount = 0;
    for(let i = 0; i < dateArr.length; i ++){
        if(courtCodeArr[i] == cCode && dateArr[i] == cDate){
            bookedCount++;
        }
    }

    bookedStartSlot = new Array(bookedCount);
    bookedEndSlot = new Array(bookedCount);
    let inCount = 0;
    for(let i = 0; i < dateArr.length; i ++){
        if(courtCodeArr[i] == cCode && dateArr[i] == cDate){
            // GET TIMESLOT INDEX
            bookedStartSlot[inCount] = startArr[i].substr(0, 5);
            bookedEndSlot[inCount] = endArr[i].substr(0, 5);
            
            getBookedTimeSlotIndex(inCount);
            inCount++;
        }
    }
    postStartSlot();
}

// Select Time Slot
let startTime = document.getElementById('startTime'); 
let consecutiveSlots = document.getElementById('consecutiveSlots');

let timeSlots = ["06:00 - 06:30", "06:30 - 07:00", "07:00 - 07:30", "07:30 - 08:00", "08:00 - 08:30", "08:30 - 09:00", "09:00 - 09:30", "09:30 - 10:00", "10:00 - 10:30", "10:30 - 11:00", "11:00 - 11:30", "11:30 - 12:00", "12:00 - 12:30", "12:30 - 13:00", "13:00 - 13:30", "13:30 - 14:00", "14:00 - 14:30", "14:30 - 15:00", "15:00 - 15:30", "15:30 - 16:00", "16:00 - 16:30", "16:30 - 17:00", "17:00 - 17:30", "17:30 - 18:00", "18:00 - 18:30", "18:30 - 19:00", "19:00 - 19:30", "19:30 - 20:00", "20:00 - 20:30", "20:30 - 21:00", "21:00 - 21:30", "21:30 - 22:00"]; 

// GETTING INDEX
function getBookedTimeSlotIndex(countIn){
    for(let i = 0; i < timeSlots.length; i++){
        if(timeSlots[i].substr(0, 5) == bookedStartSlot[countIn]){
            bookedStartSlot[countIn] = i;
        }
    }
    for(let i = 0; i < timeSlots.length; i++){
        if(timeSlots[i].substr(0, 5) == bookedEndSlot[countIn]){
            bookedEndSlot[countIn] = i;
        }
    }
}

// START TIME""
function postStartSlot(){
    BstartTCounter = 0;
    BendTCounter = 0;
        for(let i = 0; i < timeSlots.length; i++){
            let slotValue = timeSlots[i];
            let elecTime = document.createElement("option");
            elecTime.textContent = slotValue;

            if(i == bookedEndSlot[BstartTCounter]){
                BstartTCounter++;
            }
            if(i >= bookedStartSlot[BstartTCounter] && i < bookedEndSlot[BstartTCounter]){
                // console.log(bookedStartSlot[BstartTCounter]);
            }
            else{
                startTime.appendChild(elecTime);
            }
        }
}

let changedStartVal;
function disableDisable(){
    consecutiveSlots.removeAttribute('disabled');
    changedStartVal = startTime.value;
    let selectedTimeSlotIndex = getTimeSlotIndex(changedStartVal);

    // GENERAL RESTRICTION
    let numAvailConsecutiveSlots = 0;
    let nextBookedSlot = getNextBookedSlot(selectedTimeSlotIndex);
    if(nextBookedSlot == undefined){
        if(selectedTimeSlotIndex >= 22){ // PEEK TIME RESTRICTION
            displayNumAvailConsecSlots(3);
        }
        else{
            for(let i = selectedTimeSlotIndex; i < 24; i ++){
                numAvailConsecutiveSlots++;
            }
            displayNumAvailConsecSlots(numAvailConsecutiveSlots);
        }
    }
    else{
        for(let i = selectedTimeSlotIndex; i < nextBookedSlot; i ++){
            numAvailConsecutiveSlots++;
        }
        if(numAvailConsecutiveSlots > 3 && selectedTimeSlotIndex >= 22){ // PEEK TIME RESTRICTION
            displayNumAvailConsecSlots(3);
        }
        else{
            displayNumAvailConsecSlots(numAvailConsecutiveSlots);
        }
    }
}

// DISPLAYING NUMBER OF AVAILABLE TIME SLOTS
function displayNumAvailConsecSlots(maxNumSlots){
    for(let i = 0; i < maxNumSlots; i ++){
        let elecTime = document.createElement("option");
        elecTime.textContent = (i + 1);
        
        consecutiveSlots.appendChild(elecTime);
    }
}

// DETERMINING THE NEXT BOOKED SLOT FROM SELECTED SLOT
function getNextBookedSlot(currSelectSlot){
    for(let i = 0; i < bookedStartSlot.length; i ++){
        if(currSelectSlot <= bookedStartSlot[i]){
            return bookedStartSlot[i];
        }
    }
}

// WANTING AN INDEX OF A TIME SLOT
function getTimeSlotIndex(slotVal){
    for(let i = 0; i < timeSlots.length; i ++){
        if(timeSlots[i] == slotVal){
            return i;
        }
    }
}

// SHOWING END TIME
function postEndTime(){
    let numSelectSlots = consecutiveSlots.selectedIndex;
    let getchangedTSI = getTimeSlotIndex(changedStartVal);

    let endTimeSlotIndex = getchangedTSI + numSelectSlots;
    let endTimeSlot = document.getElementById('endTime');
    endTimeSlot.setAttribute('value', timeSlots[endTimeSlotIndex].substr(0, 5));
}