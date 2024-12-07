// document.getElementById("speedval").innerHTML="0"

// async function Submit(){
//     let speed=document.getElementById('speed').value
//     console.log(speed)
//    let res=await axios.post("/motor/speed",{speed:speed})

//    console.log(res)




// }




// Update connection status dynamically
let isConnected = false;
// checkConnection()
async function checkConnection() {
    try {
        let res = await axios.get("/motor/status");
        isConnected = res.data.connected;

        const connectionStatus = document.getElementById("connectionStatus");
        if (isConnected) {
            connectionStatus.innerText = "Connected";
            off.innerText = "ON";
            connectionStatus.classList.remove("btn-danger");
            connectionStatus.classList.add("btn-success");
        } else {
            connectionStatus.innerText = "Disconnected";
            connectionStatus.classList.remove("btn-success");
            connectionStatus.classList.add("btn-danger");
            // window.location.reload()
        }


    } catch (error) {
        console.error("Error checking connection:", error);
    }

        // window.location.reload()

}

// Submit motor speed
async function Submit() {
    if (!isConnected) {
        alert("Motor is not connected. Please check the connection first.");
        return;
    }

    const speed = document.getElementById("speed").value;
    try {
        let res = await axios.post("/motor/speed", { speed });
        console.log(res.data);
        // alert(`Speed set to ${speed}`);
    } catch (error) {
        console.error("Error setting motor speed:", error);
        alert("Failed to update motor speed.");
    }
}

// Turn off the motor
async function Off() {
    if (!isConnected) {
        alert("Motor is not connected. Cannot turn off.");
        return;
    }

    try {
        let res = await axios.post("/motor/off");
        console.log(res.data);
        alert("Motor turned off.");
    } catch (error) {
        console.error("Error turning off motor:", error);
        alert("Failed to turn off motor.");
    }
}

// Check connection on page load
checkConnection();


