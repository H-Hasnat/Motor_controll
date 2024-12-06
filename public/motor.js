document.getElementById("speedval").innerHTML="0"

async function Submit(){
    let speed=document.getElementById('speed').value
    console.log(speed)
   let res=await axios.post("/motor/speed",{speed:speed})

   console.log(res)




}


 function range(val){
   
    let speedVal=document.getElementById("speedval").innerHTML=val

}
